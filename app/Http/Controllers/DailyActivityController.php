<?php

namespace App\Http\Controllers;

use App\Models\Apprentince;
use App\Models\DailyActivity;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DailyActivityController extends Controller
{
    public function index()
    {
        // Confirm Delete Alert
        $title = 'Hapus Data!';
        $text = "Apakah yakin ingin menghapus data?";
        confirmDelete($title, $text);

        return view('daily_activities.index');
    }

    public function datatable()
    {
        $model = DailyActivity::query();
        return DataTables::of($model)
            ->editColumn('date', function ($data) {
                $formatedDate = Carbon::parse($data['date'])->translatedFormat('d F Y');
                return $formatedDate;
            })
            ->editColumn('status', function ($data) {
                if ($data['status'] == DailyActivity::STATUS_NOT_CONFIRMED) {
                    $badge = "<span class ='badge bg-warning'>" . $data['status'] . "</span>";
                } elseif ($data['status'] == DailyActivity::STATUS_CONFIRMED) {
                    $badge = "<span class ='badge bg-success'>" . $data['status'] . "</span>";
                }

                return $badge;
            })
            ->addColumn('action', function ($data) {
                $url_edit = route('daily_activity.edit', Crypt::encrypt($data->id));
                $url_accepted = route('daily_activity.accepted', Crypt::encrypt($data->id));
                $url_delete = route('daily_activity.destroy', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";

                if (Auth::user()->hasRole('Admin')) {
                    if ($data['status'] == DailyActivity::STATUS_NOT_CONFIRMED) {
                        $btn .= "<a href='$url_accepted' onclick='return confirm(\" Validasi Data? \")' class = 'btn btn-success btn-sm text-nowrap'><i class='fas fa-check mr-2'></i> Konfirmasi</a>";
                    }
                }


                $btn .= "<a href='$url_edit' class = 'btn btn-outline-info btn-sm text-nowrap'><i class='fas fa-edit mr-2'></i> Edit</a>";
                $btn .= "<a href='$url_delete' class = 'btn btn-outline-danger btn-sm text-nowrap' data-confirm-delete='true'><i class='fas fa-trash mr-2'></i> Hapus</a>";
                $btn .= "</div>";

                return $btn;
            })


            ->rawColumns(['status', 'action'])
            ->toJson();
    }

    public function create()
    {

        return view('daily_activities.add');
    }


    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = DailyActivity::find($id);
        $daily_activities = DailyActivity::all();

        return view('daily_activities.edit', compact('data', 'daily_activities'));
    }

    public function show($id)
    {
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'activity' => 'required',
            ]);

            // Create Data
            $input = $request->all();

            $today = Carbon::today();
            $input['date'] = Carbon::parse($today)->format('Y-m-d');

            $user_id = Auth::user()->id;

            // $apprentince = Apprentince::where('user_id', $user_id)->first();
            // $apprentince_id = $apprentince->id;

            $input['apprentince_id'] = $user_id;
            $input['status'] = DailyActivity::STATUS_NOT_CONFIRMED;

            DailyActivity::create($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('daily_activity.index');
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
                'activity' => 'required',
            ]);

            // Update Data
            $id = Crypt::decrypt($id);
            $dailyActivity = DailyActivity::find($id);

            $input = $request->all();

            $today = Carbon::today();
            $input['date'] = Carbon::parse($today)->format('Y-m-d');


            $dailyActivity->update($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Diperbarui', 'success');
            return redirect()->route('daily_activity.index');
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
            $daily_activity = DailyActivity::find($id);

            $daily_activity->update([
                'status' => DailyActivity::STATUS_CONFIRMED
            ]);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Diperbarui', 'success');
            return redirect()->route('daily_activity.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Berhasil Diperbarui', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Diperbarui' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $id = Crypt::decrypt($id);
            $dailyActivity = DailyActivity::find($id);

            // Delete Data
            $dailyActivity->delete();

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Dihapus', 'success');
            return redirect()->route('daily_activity.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Berhasil Dihapus', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Dihapus' . $e->getMessage());
        }
    }
}
