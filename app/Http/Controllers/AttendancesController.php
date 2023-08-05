<?php

namespace App\Http\Controllers;

use App\Models\Apprentince;
use Illuminate\Http\Request;
use App\Models\Attendance;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Barryvdh\DomPDF\Facade\Pdf;
use Stevebauman\Location\Facades\Location;


class AttendancesController extends Controller
{
    public function index()
    {
        // Confirm Delete Alert
        $title = 'Hapus Data!';
        $text = "Apakah yakin ingin menghapus data?";
        confirmDelete($title, $text);

        if (Auth::user()->hasRole('Mahasiswa')) {
            $user_id = Auth::user()->id;
            $apprentince = Apprentince::where('user_id', $user_id)->first();
            $absensiMasuk = Attendance::where('apprentince_id', $apprentince->id)->whereDate('present_in', Carbon::today())->first();
            $absensiKeluar = $absensiMasuk ? $absensiMasuk->present_out : null;

            return view('attendances.index', compact('absensiMasuk', 'absensiKeluar'));
        } else {
            return view('attendances.index');
        }
    }

    public function report_pdf()
    {

        $data = Attendance::where('status', '=', Attendance::STATUS_PRESENT)
        ->orWhere('status', '=', Attendance::STATUS_SICK)
            ->orWhere('status', '=', Attendance::STATUS_PERMIT)
            ->orderBy('id', 'desc')
            ->get();
        $pdf = PDF::loadView('attendances.report_pdf', compact('data'))->setPaper('a4', 'landscape');

        $fileName = "Laporan Presensi Harian.pdf";

        return $pdf->stream($fileName);
    }


    public function datatable()
    {
        $model = Attendance::query()->orderBy('id', 'desc');
        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->translatedFormat('d F Y - H:i');
                return $formatedDate;
            })
            ->editColumn('status', function ($data) {
                if ($data->status == Attendance::STATUS_PRESENT) {
                    $badge = "<span class='badge bg-success'>" .  Attendance::STATUS_PRESENT . "</span>";
                } elseif ($data->status == Attendance::STATUS_PERMIT) {
                    $badge = "<span class='badge bg-warning'>" .  Attendance::STATUS_PERMIT . "</span>";
                } elseif ($data->status == Attendance::STATUS_SICK) {
                    $badge = "<span class='badge bg-danger'>" .  Attendance::STATUS_SICK . "</span>";
                }

                return $badge;
            })
            ->addColumn('apprentince_name', function ($data) {
                return $data->apprentince->name;
            })
            ->addColumn('action', function ($data) {
                $url_show = route('attendance.show', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_show' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Lihat</a>";
                $btn .= "</div>";

                return $btn;
            })
            ->rawColumns(['status', 'action'])
            ->toJson();
    }

    public function datatable_student()
    {
        $user_id = Auth::user()->id;
        $apprentince = Apprentince::where('user_id', $user_id)->first();
        $model = Attendance::where('apprentince_id', $apprentince['id'])
            ->orderBy('id', 'desc');
        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->translatedFormat('d F Y - H:i');
                return $formatedDate;
            })
            ->editColumn('status', function ($data) {
                if ($data->status == Attendance::STATUS_PRESENT) {
                    $badge = "<span class='badge bg-success'>" .  Attendance::STATUS_PRESENT . "</span>";
                } elseif ($data->status == Attendance::STATUS_PERMIT) {
                    $badge = "<span class='badge bg-warning'>" .  Attendance::STATUS_PERMIT . "</span>";
                } elseif ($data->status == Attendance::STATUS_SICK) {
                    $badge = "<span class='badge bg-danger'>" .  Attendance::STATUS_SICK . "</span>";
                }

                return $badge;
            })
            ->addColumn('action', function ($data) {
                $url_show = route('attendance.show', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_show' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Lihat</a>";
                $btn .= "</div>";

                return $btn;
            })
            ->rawColumns(['status', 'action'])
            ->toJson();
    }

    public function create_present()
    {
        return view('attendances.create_present');
    }


    public function show($id)
    {
        $id = Crypt::decrypt($id);
        $data = Attendance::find($id);

        $data['present_in'] = Carbon::parse($data['present_in'])->translatedFormat('l, d F Y - H:i');
        if (!empty($data['present_out'])) {
            $data['present_out'] = Carbon::parse($data['present_out'])->translatedFormat('l, d F Y - H:i');
        }

        return view('attendances.show', compact('data'));
    }

    public function store_present_in(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'status' => 'required',
                'longitude' => 'required',
                'latitude' => 'required',
            ]);

            // Create Data
            $input = $request->all();

            $user_id = Auth::user()->id;

            $apprentince = Apprentince::where('user_id', $user_id)->first();
            $apprentince_id = $apprentince->id;

            $input['apprentince_id'] = $apprentince_id;

            $absensiMasuk = Attendance::where('apprentince_id', $apprentince->id)
                ->whereDate('present_in', Carbon::today())->first();

            if ($absensiMasuk) {
                DB::rollBack();

                // Alert & Redirect
                Alert::toast('Anda sudah melakukan presensi masuk hari ini!', 'error');
                return redirect()->back();
            }

            $input['present_in'] = Carbon::now();
            $input['status'] = $request->status;

            $input['longitude'] = $request->longitude;
            $input['latitude'] = $request->latitude;


            if ($request->status !== Attendance::STATUS_PRESENT) {

                $input['present_out'] = Carbon::now();

                Attendance::create($input);
            } else {
                Attendance::create($input);
            }

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('attendance.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Tersimpan', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Disimpan' . $e->getMessage());
        }
    }

    public function store_present_out(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'longitude' => 'required',
                'latitude' => 'required',
            ]);

            // Create Data
            $input = $request->all();

            $user_id = Auth::user()->id;

            $apprentince = Apprentince::where('user_id', $user_id)->first();
            $apprentince_id = $apprentince->id;

            $input['apprentince_id'] = $apprentince_id;

            $absensi = Attendance::where('apprentince_id', $apprentince->id)
                ->whereDate('present_in', Carbon::today())->first();

            if ($absensi->keluar) {
                DB::rollBack();

                // Alert & Redirect
                Alert::toast('Anda sudah melakukan presensi keluar hari ini!', 'error');
                return redirect()->back();
            }

            $input['present_out'] = Carbon::now();

            $absensi->update($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('attendance.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Tersimpan', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Disimpan' . $e->getMessage());

        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $id = Crypt::decrypt($id);
            $attendance = Attendance::find($id);

            // Delete Data
            $attendance->delete();

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Dihapus', 'success');
            return redirect()->route('attendance.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Berhasil Dihapus', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Dihapus' . $e->getMessage());
        }
    }
}
