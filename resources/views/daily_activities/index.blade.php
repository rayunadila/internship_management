@extends('layouts.app')

@section('css_after')
@endsection

@section('content')
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
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="iq-card-body">
                            <div id="table" class="table-editable">
                                <span class="table-add float-right mb-3 mr-2">
                                    <button class="btn btn-sm iq-bg-success"><i class="ri-add-fill"><span
                                                class="pl-1">Cetak PDF</span></i>
                                    </button>
                                </span>
                                <table class="table table-bordered table-responsive-md table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Catatan Kegiatan Harian</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @forelse ($daily_activity as $item)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>
                                                    <form action="{{ route('daily_activity.destroy', $item->id) }}"
                                                        method="post">
                                                        <a href="{{ route('daily_activity.show', $item->id) }}"
                                                            class="btn btn-info btn-sm">Lihat</a>
                                                        <a href="{{ route('daily_activity.edit', $item->id) }}"
                                                            class="btn btn-warning btn-sm">Edit</a>
                                                        @csrf
                                                        @method('delete')
                                                        <button onclick="return confirm('Yakin ingin menghapus data?')"
                                                            class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                                    </form>
                                                </td>
                                                <td>{{ $item->activity }}</td>
                                                <td>{{ $item->has_done }}</td>
                                                <td>{{ $item->file }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6">
                                                    <h5 class="text-center">Data Kosong</h5>
                                                </td>
                                            </tr>
                                        @endforelse --}}
                                    </tbody>
                                </table>
                                {{-- {{ $daily_activity->links() }} --}}
                            </div>
                        </div>
                    </div>
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
                    url: "{{ route('daily_activity.datatable') }}",
                },
                serverSide: true,
                destroy: true,
                order: [
                    [3, 'desc']
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
                        name: 'created_at',
                        data: 'created_at'
                    },
                    {
                        name: 'activity',
                        data: 'activity'
                    },
                    {
                        name: 'has_done',
                        data: 'has_done'
                    },

                ],
            });
        }
    </script>
@endsection
