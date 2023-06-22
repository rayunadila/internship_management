@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Presensi Peserta PKL</h3>
@endsection

@section('content')
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
                    </div>
                </div>
                <div class="iq-card-body">
                    <table id="data-table" class="table table-bordered table-responsive-md table-striped text-center">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Lokasi</th>
                                <th>Waktu</th>
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
@endsection

@section('js_after')
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
                        name: 'longtitude',
                        data: 'longtitude'
                    },
                    {
                        name: 'latitude',
                        data: 'latitude'
                    },
                    {
                        name: 'status',
                        data: 'status'
                    },

                ],
            });
        }
    </script>
@endsection
