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
                            <h4 class="card-title">Data Peserta PKL</h4>
                        </div>
                        {{-- <div class="float-right">
                        <a class="btn btn-sm bg-primary" href="{{ route('apprentince.create') }}"><i class="ri-add-fill"><span
                                    class="pl-1">Tambah
                                    Data</span></i>
                        </a>
                    </div> --}}
                    </div>
                    <div class="iq-card-body">
                        <table id="data-table" class="table table-bordered table-responsive-md table-striped text-center">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama Lengkap</th>
                                    <th>NIM/NISN</th>
                                    <th>Asal Instansi</th>
                                    <th>Tanggal Mulai PKL</th>
                                    <th>Tanggal Selesai PKL</th>
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
                        <h4 class="card-title">Data Peserta PKL</h4>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-sm bg-primary" href="{{ route('apprentince.create') }}"><i class="ri-add-fill"><span
                                    class="pl-1">Tambah
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
                                <th>Nama Lengkap</th>
                                <th>NIM/NISN</th>
                                <th>Asal Sekolah/Perguruan Tinggi</th>
                                <th>Tanggal Mulai PKL</th>
                                <th>Tanggal Selesai PKL</th>
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
                        url: "{{ route('apprentince.datatable') }}",
                    },
                    serverSide: true,
                    destroy: true,
                    order: [
                        [4, 'desc']
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
                            name: 'name',
                            data: 'name'
                        },
                        {
                            name: 'nisn_nim',
                            data: 'nisn_nim'
                        },
                        {
                            name: 'school',
                            data: 'school'
                        },
                        {
                            name: 'date_start',
                            data: 'date_start'
                        },
                        {
                            name: 'date_end',
                            data: 'date_end'
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
                        url: "{{ route('apprentince.datatable_student') }}",
                    },
                    serverSide: true,
                    destroy: true,
                    order: [
                        [4, 'desc']
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
                            name: 'name',
                            data: 'name'
                        },
                        {
                            name: 'nisn_nim',
                            data: 'nisn_nim'
                        },
                        {
                            name: 'school',
                            data: 'school'
                        },
                        {
                            name: 'date_start',
                            data: 'date_start'
                        },
                        {
                            name: 'date_end',
                            data: 'date_end'
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
