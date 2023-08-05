{{-- @extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Presensi Peserta PKL</h3>
@endsection

@section('content')
    @hasrole('Admin')
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Data Presensi</h4>
                        </div>
                        <div class="float-right">
                            <a target="_blank" href="{{ route('attendance.report_pdf') }}" class="btn btn-danger">Cetak
                                PDF</a>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <table id="data-table" class="table table-bordered table-responsive-md table-striped text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Diinputkan pada</th>
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
                            <h4 class="card-title">Data Presensi</h4>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-sm bg-primary" href="{{ route('attendance.create') }}"><i
                                    class="ri-add-fill"><span class="pl-1">Tambah
                                        Data</span></i>
                            </a>
                            <a target="_blank" href="{{ route('attendance.report_pdf') }}" class="btn btn-danger">Cetak
                                PDF</a>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <table id="data-table" class="table table-bordered table-responsive-md table-striped text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Lokasi</th>
                                    <th>Status</th>
                                    <th>Diinputkan pada</th>
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
                        url: "{{ route('attendance.datatable') }}",
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
                            name: 'apprentince_name',
                            data: 'apprentince_name'
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
                        url: "{{ route('attendance.datatable_student') }}",
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
                            name: 'latitude',
                            data: 'latitude'
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
@endsection --}}

@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Presensi Peserta PKL</h3>
@endsection

@section('content')
    <!-- Basic Tables start -->

    @hasrole('Admin')
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Presensi Siswa/Mahasiswa</h4>
                    </div>
                         <div class="float-right">
                            <a target="_blank" href="{{ route('attendance.report_pdf') }}" class="btn btn-danger">Cetak
                                PDF</a>
                                <br>
                     </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="data-table" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>Waktu Masuk</th>
                                    <th>Waktu Keluar</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    @endhasrole

    @hasrole('Mahasiswa')
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Presensi Siswa/Mahasiswa</h4>

                    </div>

                    @if ($absensiMasuk)
                        @if ($absensiKeluar)
                        @else
                            <form action="{{ route('attendance.store_present_out') }}" method="post">
                                @csrf
                                @method('put')

                                <input type="hidden" name="longitude" id="longitude">
                                <input type="hidden" name="latitude" id="latitude">
                                <button class="text-end btn btn-sm btn-outline-info" type="submit"
                                    onclick="return confirm('Simpan Data?')"><i class="fa fa-plus"></i>
                                    Presensi
                                    Keluar</button>

                            </form>
                        @endif
                    @else
                        <a class="text-end btn btn-sm btn-outline-info" href="{{ route('attendance.create_present') }}"><i
                                class="fa fa-plus"></i> Presensi Masuk</a>
                    @endif
                </div>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="data-table" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>Waktu Masuk</th>
                                    <th>Waktu Keluar</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    @endrole
@endsection

@section('js_after')
    @hasanyrole('Admin')
        <script>
            $(document).ready(function() {
                getDatatable();
            });

            let data_table = "";

            function getDatatable() {
                data_table = $("#data-table").DataTable({
                    ajax: {
                        url: "{{ route('attendance.datatable') }}",
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
                            name: 'present_in',
                            data: 'present_in'
                        },
                        {
                            name: 'present_out',
                            data: 'present_out'
                        },
                        {
                            name: 'status',
                            data: 'status'
                        },
                    ],
                });
            }
        </script>
    @endhasanyrole


    @hasrole('Mahasiswa')
        <script>
            $(document).ready(function() {
                getDatatable();
                initGeolocation();
            });

            let data_table = "";

            function getDatatable() {
                data_table = $("#data-table").DataTable({
                    ajax: {
                        url: "{{ route('attendance.datatable_student') }}",
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
                            name: 'present_in',
                            data: 'present_in'
                        },
                        {
                            name: 'present_out',
                            data: 'present_out'
                        },
                        {
                            name: 'status',
                            data: 'status'
                        },
                    ],
                });
            }

            function initGeolocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        $("#latitude").val(position.coords.latitude);
                        $("#longitude").val(position.coords.longitude);
                    });
                } else {
                    alert("Lokasi tidak dapat diperoleh.");
                }
            }
        </script>
    @endrole
@endsection
