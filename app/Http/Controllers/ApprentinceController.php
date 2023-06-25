<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Apprentince;
use App\Models\ApprentinceDetail;
use App\Models\ApprentinceRequest;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class ApprentinceController extends Controller
{
    public function index()
    {
        // Confirm Delete Alert
        $title = 'Hapus Data!';
        $text = "Apakah yakin ingin menghapus data?";
        confirmDelete($title, $text);

        return view('apprentinces.index');
    }

    public function index_request()
    {
        return view('apprentinces.index_request');
    }

    public function datatable()
    {
        $model = Apprentince::query();
        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->translatedFormat('d F Y - H:i');
                return $formatedDate;
            })

            ->addColumn('action', function ($data) {
                $url_show = route('apprentince.show', Crypt::encrypt($data->id));
                $url_delete = route('apprentince.destroy', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_show' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Lihat</a>";
                $btn .= "<a href='$url_delete' class = 'btn btn-outline-danger btn-sm text-nowrap' data-confirm-delete='true'><i class='fas fa-trash mr-2'></i> Hapus</a>";
                $btn .= "</div>";

                return $btn;
            })
            ->toJson();
    }

    public function datatable_request()
    {
        $model = ApprentinceRequest::query();
        return DataTables::of($model)
            ->editColumn('status', function ($data) {
                if ($data['status'] == ApprentinceRequest::STATUS_NOT_CONFIRMED) {
                    $badge  = "<span class='badge bg-warning'>" . $data['status'] . "</span>";
                } elseif ($data['status'] == ApprentinceRequest::STATUS_ACCEPTED) {
                    $badge  = "<span class='badge bg-success'>" . $data['status'] . "</span>";
                } elseif ($data['status'] == ApprentinceRequest::STATUS_REJECTED) {
                    $badge  = "<span class='badge bg-danger'>" . $data['status'] . "</span>";
                }
                return $badge;
            })
            ->editColumn('created_at', function ($data) {
                $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->translatedFormat('d F Y - H:i');
                return $formatedDate;
            })
            ->addColumn('show_file', function ($data) {
                $file = asset('assets/pengajuan/' . $data['file']);
                return "<a href='$file' target='_blank' class='btn btn-primary'><i class='fa fa-info'></i> Lihat File</a>";
            })
            ->addColumn('action', function ($data) {
                $url_accepted = route('apprentince.accepted', Crypt::encrypt($data->id));
                $url_rejected = route('apprentince.rejected', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                if ($data['status'] == ApprentinceRequest::STATUS_NOT_CONFIRMED) {
                    $btn .= "<a href='$url_accepted' onclick='return confirm(\" Validasi Data? \")' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Diterima</a>";
                    $btn .= "<a href='$url_rejected' onclick='return confirm(\" Validasi Data? \")' class = 'btn btn-outline-danger btn-sm text-nowrap'><i class='fas fa-trash mr-2'></i> Ditolak</a>";
                }
                $btn .= "</div>";

                return $btn;
            })

            ->rawColumns(['status', 'show_file', 'action'])
            ->toJson();
    }

    public function create()
    {

        return view('apprentinces.add');
    }


    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = Apprentince::find($id);
        $apprentinces = Apprentince::all();

        return view('apprentinces.edit', compact('data', 'apprentinces'));
    }

    public function show($id)
    {
        $id = Crypt::decrypt($id);
        $data = Apprentince::find($id);

        return view('apprentinces.show', compact('data'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'nisn_nim' => 'required',
                'name' => 'required',
                'department' => 'required',
                'gender' => 'required',
                'birth_date' => 'required',
                'birth_place' => 'required',
                'address' => 'required',
                'phone_number' => 'required',
                'date_start' => 'required',
                'date_end' => 'required',
            ]);

            $input = $request->all();

            $input['user_id'] = Auth::user()->id;
            $input['status'] = Apprentince::STATUS_ON_APPRENTINCE;

            // Create Apprentince
            Apprentince::create($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('home');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Tersimpan', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Disimpan' . $e->getMessage());
        }
    }

    public function store_request(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'school' => 'required',
                'file' => 'mimes:pdf|max:3000',
            ]);

            $input = $request->all();

            // Save file
            if ($file = $request->file('file')) {
                $destinationPath = 'assets/pengajuan/';
                $fileName = "Pengajuan" . "_" . date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName);
                $input['file'] = $fileName;
            }

            $input['status'] = ApprentinceRequest::STATUS_NOT_CONFIRMED;

            ApprentinceRequest::create($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Tersimpan', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Diperbarui' . $e->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'apprentince_id' => 'required',
                'title' => 'required',
                'date' => 'required',
                'agenda' => 'required',
            ]);

            // Update Data
            $id = Crypt::decrypt($id);
            $apprentince = Apprentince::find($id);

            $input = $request->all();

            // Decrypt
            $input['apprentince_id'] = Crypt::decrypt($request->apprentince_id);

            $apprentince->update($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Diperbarui', 'success');
            return redirect()->route('apprentince.index');
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
            $apprentince = Apprentince::find($id);

            // Delete Data
            $apprentince->delete();

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Dihapus', 'success');
            return redirect()->route('apprentince.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Berhasil Dihapus', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Dihapus' . $e->getMessage());
        }
    }

    public function accepted($id)
    {
        try {
            DB::beginTransaction();

            $id = Crypt::decrypt($id);
            $apprentince_request = ApprentinceRequest::find($id);

            $apprentince_request->update([
                'status' => ApprentinceRequest::STATUS_ACCEPTED
            ]);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Diperbarui', 'success');
            return redirect()->route('apprentince.index_request');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Berhasil Diperbarui', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Diperbarui' . $e->getMessage());
        }
    }

    public function rejected($id)
    {
        try {
            DB::beginTransaction();

            $id = Crypt::decrypt($id);
            $apprentince_request = ApprentinceRequest::find($id);

            $apprentince_request->update([
                'status' => ApprentinceRequest::STATUS_REJECTED
            ]);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Diperbarui', 'success');
            return redirect()->route('apprentince.index_request');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Berhasil Diperbarui', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Diperbarui' . $e->getMessage());
        }
    }
}
