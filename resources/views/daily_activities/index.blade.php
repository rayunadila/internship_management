@extends('layouts.app')

@section('css_after')
@endsection

@section('content')
    @hasrole('Admin')
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Aktivitas Harian Peserta PKL</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="iq-card-body">
                                <div id="table" class="table-editable">
                                    <table id="data-table"
                                        class="table table-bordered table-responsive-md table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Aksi </th>
                                                <th>Nama</th>
                                                <th>Tanggal</th>
                                                <th>Catatan Kegiatan Harian</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endrole

    @hasrole('Peserta Magang')
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Catatan Harian Kegiatan Peserta PKL</h4>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-sm bg-primary" href="{{ route('daily_activity.create') }}"><i
                                    class="ri-add-fill"><span class="pl-1">Tambah
                                        Data</span></i>
                            </a>
                            <a target="_blank" href="{{ route('daily_activity.report_pdf', Crypt::encrypt(Auth::user()->id)) }}"
                                class="btn btn-danger">Cetak
                                PDF</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="iq-card-body">
                                <div id="table" class="table-editable">
                                    <table id="data-table"
                                        class="table table-bordered table-responsive-md table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Aksi</th>
                                                <th>Tanggal</th>
                                                <th>Catatan Kegiatan Harian</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endrole
@endsection



@section('js_after')
    @hasrole('Admin')
        <script>
            $(document).ready(function() {
                getDatatable();
            });

            let data_table = "";

            function getDatatable() {
                data_table = $("#data-table").DataTable({
                    ajax: {
                        url: "{{ route('daily_activity.datatable') }}",
                    },
                    serverSide: true,
                    destroy: true,
                    columns: [{
                            "data": null,
                            "sortable": false,
                            searchable: false,
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            name: 'action',
                            data: 'action'
                        },
                        {
                            name: 'apprentince_name',
                            data: 'apprentince_name'
                        },
                        {
                            name: 'date',
                            data: 'date'
                        },
                        {
                            name: 'activity',
                            data: 'activity'
                        },
                        {
                            name: 'status',
                            data: 'status'
                        }
                    ],
                });
            }
        </script>
    @endrole

    @hasrole('Mahasiswa')
        <script>
            $(document).ready(function() {
                getDatatable();
            });

            let data_table = "";

            function getDatatable() {
                data_table = $("#data-table").DataTable({
                    ajax: {
                        url: "{{ route('daily_activity.datatable_student') }}",
                    },
                    serverSide: true,
                    destroy: true,
                    order: [
                        [2, 'desc']
                    ],
                    columns: [{
                            "data": null,
                            "sortable": false,
                            searchable: false,
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            name: 'action',
                            data: 'action'
                        },
                        {
                            name: 'date',
                            data: 'date'
                        },
                        {
                            name: 'activity',
                            data: 'activity'
                        },
                        {
                            name: 'status',
                            data: 'status'
                        }
                    ],
                });
            }
        </script>
    @endrole
@endsection
