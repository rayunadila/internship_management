<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Apprentince;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ApprentinceController extends Controller
{
    public function index()
    {
        // Confirm Delete Alert
        $title = 'Hapus Data!';
        $text = "Apakah yakin ingin menghapus data?";
        confirmDelete($title, $text);

        return view('user_registers.index');
    }

    public function datatable()
    {
        $model = Apprentince::query();
        return DataTables::of($model)
            ->addColumn('action', function ($data) {
                $url_show = route('user_register.show', Crypt::encrypt($data->id));
                $url_edit = route('user_register.edit', Crypt::encrypt($data->id));
                $url_delete = route('user_register.destroy', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_show' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Lihat</a>";
                $btn .= "<a href='$url_edit' class = 'btn btn-outline-info btn-sm text-nowrap'><i class='fas fa-edit mr-2'></i> Edit</a>";
                $btn .= "<a href='$url_delete' class = 'btn btn-outline-danger btn-sm text-nowrap' data-confirm-delete='true'><i class='fas fa-trash mr-2'></i> Hapus</a>";
                $btn .= "</div>";
            })
            ->toJson();
    }

    public function create()
    {
        $user_registers = Apprentince::all();
        return view('user_registers.add', compact('user_registers'));
    }


    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = Apprentince::find($id);
        $user_registers = Apprentince::all();

        return view('user_registers.edit', compact('data', 'user_registers'));
    }

    public function show($id)
    {
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'user_register_id' => 'required',
                'title' => 'required',
                'date' => 'required',
                'agenda' => 'required',
            ]);

            // Create Data
            $input = $request->all();

            // Decrypt Meeting Room Id
            $input['user_register_id'] = Crypt::decrypt($request->user_register_id);
            // Create Status
            $input['status'] = Apprentince::STATUS_NOT_CONFIRMED;

            Apprentince::create($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('user_register.index');
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
                'user_register_id' => 'required',
                'title' => 'required',
                'date' => 'required',
                'agenda' => 'required',
            ]);

            // Update Data
            $id = Crypt::decrypt($id);
            $user_register = Apprentince::find($id);

            $input = $request->all();

            // Decrypt
            $input['user_register_id'] = Crypt::decrypt($request->user_register_id);

            $user_register->update($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Diperbarui', 'success');
            return redirect()->route('user_register.index');
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
            $user_register = Apprentince::find($id);

            // Delete Data
            $user_register->delete();

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Dihapus', 'success');
            return redirect()->route('user_register.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Berhasil Dihapus', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Dihapus' . $e->getMessage());
        }
    }
}
