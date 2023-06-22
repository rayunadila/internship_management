@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <a class="btn btn-info btn-sm mb-2" href="{{ route('attendance.index') }}">Kembali</a>
                        <h4 class="card-title">Data Pengajuan</h4>
                    </div>
                </div>
                <div class="card-body">
                    {{-- MENAMPILKAN FILE --}}
                    <div class="card">
                        <div class="card-header text-center mb-3">
                            <h4 class="card-title mb-3">{{ $attendance['longitude'] }}</h4>

                        </div>

                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>
                                        <h4>Lokasi</h4>
                                    </td>
                                    <td>
                                        <h4>:</h4>
                                    </td>
                                    <td>
                                        <h4>{{ $attendance['longitude'] }}</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>Waktu</h4>
                                    </td>
                                    <td>
                                        <h4>:</h4>
                                    </td>
                                    <td>
                                        <h4>{{ $attendance['laitude'] }}</h4>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
