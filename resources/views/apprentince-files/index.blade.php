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
                            <h4 class="card-title">Data Laporan PKL</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <table id="data-table" class="table table-bordered table-responsive-md table-striped text-center">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>Laporan PKL</th>
                                    <th>Status</th>
                                    <th>Diinputkan Pada</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endrole

    @hasrole('Mahasiswa')
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Data Laporan PKL</h4>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-sm bg-primary" href="{{ route('apprentince_file.create') }}"><i
                                    class="ri-add-fill"><span class="pl-1">Tambah
                                        Data</span></i>
                            </a>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <table id="data-table" class="table table-bordered table-responsive-md table-striped text-center">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>Laporan PKL</th>
                                    <th>Status</th>
                                    <th>Diinputkan Pada</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
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
                        url: "{{ route('apprentince_file.datatable') }}",
                    },
                    serverSide: true,
                    destroy: true,
                    order: [
                        [5, 'desc']
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
                            name: 'file',
                            data: 'file'
                        },
                        {
                            name: 'show_file',
                            data: 'show_file'
                        },
                        {
                            name: 'status',
                            data: 'status'
                        },
                        {
                            name: 'created_at',
                            data: 'created_at'
                        },
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
                        url: "{{ route('apprentince_file.datatable_student') }}",
                    },
                    serverSide: true,
                    destroy: true,
                    order: [
                        [5, 'desc']
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
                            name: 'file',
                            data: 'file'
                        },
                        {
                            name: 'show_file',
                            data: 'show_file'
                        },
                        {
                            name: 'status',
                            data: 'status'
                        },
                        {
                            name: 'created_at',
                            data: 'created_at'
                        },
                    ],
                });
            }
        </script>
    @endrole
@endsection
