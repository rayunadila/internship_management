@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <a class="btn btn-info btn-sm mb-2" href="{{ route('daily_activity.index') }}">Kembali</a>
                        <h4 class="card-title">Data Kegiatan Harian Peserta PKL</h4>
                    </div>
                </div>
                <div class="card-body">
                    {{-- MENAMPILKAN FILE --}}
                    <div class="card">
                        <div class="card-header text-center mb-3">
                            <h4 class="card-title mb-3">{{ $daily_activity['activity'] }}</h4>

                        </div>

                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>
                                        <h4>Kegiatan Harian</h4>
                                    </td>
                                    <td>
                                        <h4>:</h4>
                                    </td>
                                    <td>
                                        <h4>{{ $daily_activity['activity'] }}</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>Paraf</h4>
                                    </td>
                                    <td>
                                        <h4>:</h4>
                                    </td>
                                    <td>
                                        <h4>{{ $daily_activity['has_done'] }}</h4>
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
