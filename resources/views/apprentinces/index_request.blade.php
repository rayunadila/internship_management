@extends('layouts.app')

@section('css_after')
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Data Pengajuan</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <table id="data-table" class="table table-bordered table-responsive-md table-striped text-center">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Asal Instansi</th>
                                <th>Surat Pengajuan</th>
                                <th>Diinputkan Pada</th>
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
                    url: "{{ route('apprentince.datatable_request') }}",
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
                        name: 'email',
                        data: 'email'
                    },
                    {
                        name: 'school',
                        data: 'school'
                    },
                    {
                        name: 'show_file',
                        data: 'show_file'
                    },
                    {
                        name: 'created_at',
                        data: 'created_at'
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
