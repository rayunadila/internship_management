<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;


class AttendancesController extends Controller
{
    public function index()
    {
        // Confirm Delete Alert
        $title = 'Hapus Data!';
        $text = "Apakah yakin ingin menghapus data?";
        confirmDelete($title, $text);

        return view('attendances.index');
    }

    public function datatable()
    {
        $model = Attendance::query();
        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->translatedFormat('d F Y - H:i');
                return $formatedDate;
            })
            ->addColumn('action', function ($data) {
                $url_show = route('attendance.show', Crypt::encrypt($data->id));
                $url_edit = route('attendance.edit', Crypt::encrypt($data->id));
                $url_delete = route('attendance.destroy', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_show' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Lihat</a>";
                $btn .= "<a href='$url_edit' class = 'btn btn-outline-info btn-sm text-nowrap'><i class='fas fa-edit mr-2'></i> Edit</a>";
                $btn .= "<a href='$url_delete' class = 'btn btn-outline-danger btn-sm text-nowrap' data-confirm-delete='true'><i class='fas fa-trash mr-2'></i> Hapus</a>";
                $btn .= "</div>";

                return $btn;
            })
            ->toJson();
    }

    public function create()
    {
        return view('attendances.add');
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = Attendance::find($id);
        return view('attendances.edit', compact('data'));
    }

    public function show($id)
    {
        $id = Crypt::decrypt($id);
        $data = Attendance::find($id);
        return view('attendances.show', compact('data'));
    }

    public function store(Request $request)
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

            // $apprentince = Apprentince::where('user_id', $user_id)->first();
            // $apprentince_id = $apprentince->id;

            $input['apprentince_id'] = $user_id;

            if ($request->description == Attendance::STATUS_PRESENT) {
                $input['status'] = Attendance::STATUS_PRESENT;
            } else {
                $input['status'] = Attendance::STATUS_ABSENT;
            }

            Attendance::create($input);

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

    public function update($id, Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'attendance_id' => 'required',
                'title' => 'required',
                'date' => 'required',
                'agenda' => 'required',
            ]);

            // Update Data
            $id = Crypt::decrypt($id);
            $attendance = Attendance::find($id);

            $input = $request->all();

            // Decrypt Meeting Room Id
            $input['attendance_id'] = Crypt::decrypt($request->attendance_id);

            $attendance->update($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Diperbarui', 'success');
            return redirect()->route('attendance.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Tersimpan', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Diperbarui' . $e->getMessage());
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
