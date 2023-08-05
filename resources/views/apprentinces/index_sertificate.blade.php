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
                        <h4 class="card-title">Input Sertifikat Peserta PKL</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <table id="data-table" class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Mulai Magang</th>
                                <th>Selesai Magang</th>
                                <th>Asal Instansi</th>
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
                        <h4 class="card-title">Unduh Sertifikat PKL</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <table id="data-table" class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Sertifikat</th>
                                <th>Nama</th>
                                <th>Mulai Magang</th>
                                <th>Selesai Magang</th>
                                <th>Asal Instansi</th>
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
                        url: "{{ route('apprentince.datatable_sertificate') }}",
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
                            name: 'date_start',
                            data: 'date_start'
                        },
                        {
                            name: 'date_end',
                            data: 'date_end'
                        },
                        {
                            name: 'school',
                            data: 'school'
                        },
                        {
                            name: 'created_at',
                            data: 'created_at'
                        },
                    ],
                });
            }
        </script>
    @endhasrole

    @hasrole('Mahasiswa')
        <script>
            $(document).ready(function() {
                getDatatable();
            });

            let data_table = "";

            function getDatatable() {
                data_table = $("#data-table").DataTable({
                    ajax: {
                        url: "{{ route('apprentince.datatable_sertificate_student') }}",
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
                            name: 'date_start',
                            data: 'date_start'
                        },
                        {
                            name: 'date_end',
                            data: 'date_end'
                        },
                        {
                            name: 'school',
                            data: 'school'
                        },
                        {
                            name: 'created_at',
                            data: 'created_at'
                        },
                    ],
                });
            }
        </script>
    @endhasrole
@endsection
