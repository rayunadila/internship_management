<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\ApprentinceFile;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class ApprentinceFileController extends Controller
{
    public function index()
    {
        return view('apprentince-files.index');
    }

    public function datatable()
    {
        $model = ApprentinceFile::query();
        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->translatedFormat('d F Y - H:i');
                return $formatedDate;
            })
            ->editColumn('status', function ($data) {
                if ($data['status'] == ApprentinceFile::STATUS_NOT_CONFIRMED) {
                    $badge  = "<span class='badge bg-warning'>" . $data['status'] . "</span>";
                } elseif ($data['status'] == ApprentinceFile::STATUS_CONFIRMED) {
                    $badge  = "<span class='badge bg-success'>" . $data['status'] . "</span>";
                } elseif ($data['status'] == ApprentinceFile::STATUS_NOT_COMPLETED) {
                    $badge  = "<span class='badge bg-danger'>" . $data['status'] . "</span>";
                }

                return $badge;
            })
            ->addColumn('show_file', function ($data) {
                $file = asset('assets/pkl/' . $data['file']);
                return "<a href='$file' target='_blank' class='btn btn-primary'><i class='fa fa-info'></i> Lihat File</a>";
            })
            ->addColumn('action', function ($data) {
                $url_accepted = route('apprentince_file.accepted', Crypt::encrypt($data->id));
                $url_not_completed = route('apprentince_file.not_complete', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                if ($data['status'] == ApprentinceFile::STATUS_NOT_CONFIRMED) {
                    $btn .= "<a href='$url_accepted' onclick='return confirm(\" Validasi Data? \")' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-check mr-2'></i> Konfirmasi</a>";
                    $btn .= "<a href='$url_not_completed' onclick='return confirm(\" Validasi Data? \")' class = 'btn btn-outline-danger btn-sm text-nowrap'><i class='fas fa-xmark mr-2'></i> Belum Lengkap</a>";
                }
                $btn .= "</div>";

                return $btn;
            })

            ->rawColumns(['status', 'show_file', 'action'])
            ->toJson();
    }

    public function create()
    {
        return view('apprentince-files.add');
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'file' => 'mimes:pdf|max:3000',
            ]);

            $input = $request->all();

            $user_id = Auth::user()->id;

            // $apprentince = Apprentince::where('user_id', $user_id)->first();
            // $apprentince_id = $apprentince->id;

            $input['apprentince_id'] = $user_id;

            // Save file
            if ($file = $request->file('file')) {
                $destinationPath = 'assets/pkl/';
                $fileName = "PKL" . "_" . date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName);
                $input['file'] = $fileName;
            }

            $input['status'] = ApprentinceFile::STATUS_NOT_CONFIRMED;

            ApprentinceFile::create($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('apprentince_file.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Tersimpan', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Diperbarui' . $e->getMessage());
        }
    }

    public function accepted($id)
    {
        try {
            DB::beginTransaction();

            $id = Crypt::decrypt($id);
            $apprentince_request = ApprentinceFile::find($id);

            $apprentince_request->update([
                'status' => ApprentinceFile::STATUS_CONFIRMED
            ]);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Diperbarui', 'success');
            return redirect()->route('apprentince_file.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Berhasil Diperbarui', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Diperbarui' . $e->getMessage());
        }
    }

    public function not_complete($id)
    {
        try {
            DB::beginTransaction();

            $id = Crypt::decrypt($id);
            $apprentince_request = ApprentinceFile::find($id);

            $apprentince_request->update([
                'status' => ApprentinceFile::STATUS_NOT_COMPLETED
            ]);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Diperbarui', 'success');
            return redirect()->route('apprentince_file.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Berhasil Diperbarui', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Diperbarui' . $e->getMessage());
        }
    }
}
