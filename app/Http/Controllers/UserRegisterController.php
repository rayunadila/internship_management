<?php

namespace App\Http\Controllers;

use App\Models\UserRegister;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class UserRegisterController extends Controller
{
    // public function index()
    // {
    //     // Confirm Delete Alert
    //     $title = 'Hapus Data!';
    //     $text = "Apakah yakin ingin menghapus data?";
    //     confirmDelete($title, $text);

    //     return view('user.index');
    // }

    // public function datatable()
    // {
    //     $model = UserRegister::query();
    //     return DataTables::of($model)
    //         ->editColumn('created_at', function ($data) {
    //             $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->translatedFormat('d F Y - H:i');
    //             return $formatedDate;
    //         })
    //         ->editColumn('date', function ($data) {
    //             $formatedDate = Carbon::createFromFormat('Y-m-d', $data->date)->translatedFormat('d F Y');
    //             return $formatedDate;
    //         })
    //         ->editColumn('status', function ($data) {
    //             if (UserRegister::STATUS_NOT_READY) {
    //                 $badge = "<span class='badge bg-warning'>" . UserRegister::STATUS_NOT_READY .  "</span>";
    //             } elseif (UserRegister::STATUS_ON_PROGRESS) {
    //                 $badge = "<span class='badge bg-primary'>" . UserRegister::STATUS_ON_PROGRESS .  "</span>";
    //             } elseif (UserRegister::STATUS_DONE) {
    //                 $badge = "<span class='badge bg-success'>" . UserRegister::STATUS_DONE .  "</span>";
    //             } else {
    //                 $badge = "<span class='badge bg-danger'>Tidak Ada Status</span>";
    //             }

    //             return $badge;
    //         })
    //         ->addColumn('user_register', function ($data) {
    //             return $data->user_register->name;
    //         })
    //         ->addColumn('action', function ($data) {
    //             $url_show = route('user_register.show', Crypt::encrypt($data->id));
    //             $url_edit = route('user_register.edit', Crypt::encrypt($data->id));
    //             $url_delete = route('user_register.destroy', Crypt::encrypt($data->id));

    //             $btn = "<button type = 'button' class = 'btn app-btn-secondary btn-sm dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>Aksi<i class = 'mdi mdi-chevron-down'></i></button>";
    //             $btn .= "<div class='dropdown-menu'>";
    //             $btn .= "<a href='$url_show' class = 'btn btn-light text-nowrap dropdown-item'><i class='fas fa-show mr-2'></i> Lihat</a>" . "<div class='dropdown-divider'></div>";
    //             $btn .= "<a href='$url_edit' class = 'btn btn-light text-nowrap dropdown-item'><i class='fas fa-edit mr-2'></i> Edit</a>" . "<div class='dropdown-divider'></div>";
    //             $btn .= "<a href='$url_delete' class = 'btn btn-light text-nowrap dropdown-item' data-confirm-delete='true'><i class='fas fa-trash mr-2'></i> Hapus</a>" . "<div class='dropdown-divider'></div>";
    //             $btn .= "</div>";
    //             return $btn;
    //         })
    //         ->rawColumns(['status', 'action'])
    //         ->toJson();
    // }

    // public function create()
    // {
    //     $user_registers = UserRegister::all();
    //     return view('user_registers.create', compact('user_registers'));
    // }

    // public function edit($id)
    // {
    //     $id = Crypt::decrypt($id);
    //     $data = UserRegister::find($id);
    //     $user_registers = UserRegister::all();

    //     return view('user_registers.edit', compact('data', 'user_registers'));
    // }

    // public function show($id)
    // {
    // }

    // public function store(Request $request)
    // {
    //     try {
    //         DB::beginTransaction();

    //         $request->validate([
    //             'user_register_id' => 'required',
    //             'title' => 'required',
    //             'date' => 'required',
    //             'agenda' => 'required',
    //         ]);

    //         // Create Data
    //         $input = $request->all();

    //         // Decrypt Meeting Room Id
    //         $input['user_register_id'] = Crypt::decrypt($request->user_register_id);
    //         // Create Status
    //         $input['status'] = UserRegister::STATUS_NOT_READY;

    //         UserRegister::create($input);

    //         // Save Data
    //         DB::commit();

    //         // Alert & Redirect
    //         Alert::toast('Data Berhasil Disimpan', 'success');
    //         return redirect()->route('user_register.index');
    //     } catch (\Exception $e) {
    //         // If Data Error
    //         DB::rollBack();

    //         // Alert & Redirect
    //         Alert::toast('Data Tidak Tersimpan', 'error');
    //         return redirect()->back()->with('error', 'Data Tidak Berhasil Disimpan' . $e->getMessage());
    //     }
    // }

    // public function update($id, Request $request)
    // {
    //     try {
    //         DB::beginTransaction();

    //         $request->validate([
    //             'user_register_id' => 'required',
    //             'title' => 'required',
    //             'date' => 'required',
    //             'agenda' => 'required',
    //         ]);

    //         // Update Data
    //         $id = Crypt::decrypt($id);
    //         $user_register = UserRegister::find($id);

    //         $input = $request->all();

    //         // Decrypt
    //         $input['user_register_id'] = Crypt::decrypt($request->user_register_id);

    //         $user_register->update($input);

    //         // Save Data
    //         DB::commit();

    //         // Alert & Redirect
    //         Alert::toast('Data Berhasil Diperbarui', 'success');
    //         return redirect()->route('user_register.index');
    //     } catch (\Exception $e) {
    //         // If Data Error
    //         DB::rollBack();

    //         // Alert & Redirect
    //         Alert::toast('Data Tidak Tersimpan', 'error');
    //         return redirect()->back()->with('error', 'Data Tidak Berhasil Diperbarui' . $e->getMessage());
    //     }
    // }

    // public function destroy($id)
    // {
    //     try {
    //         DB::beginTransaction();

    //         $id = Crypt::decrypt($id);
    //         $user_register = UserRegister::find($id);

    //         // Delete Data
    //         $user_register->delete();

    //         // Save Data
    //         DB::commit();

    //         // Alert & Redirect
    //         Alert::toast('Data Berhasil Dihapus', 'success');
    //         return redirect()->route('user_register.index');
    //     } catch (\Exception $e) {
    //         // If Data Error
    //         DB::rollBack();

    //         // Alert & Redirect
    //         Alert::toast('Data Tidak Berhasil Dihapus', 'error');
    //         return redirect()->back()->with('error', 'Data Tidak Berhasil Dihapus' . $e->getMessage());
    //     }
    // }
}
