@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <a class="btn btn-info btn-sm mb-2" href="{{ route('apprentince.index') }}">Kembali</a>
                        <h4 class="card-title">Data Pengajuan</h4>
                    </div>
                </div>
                <div class="card-body">
                    {{-- MENAMPILKAN FILE --}}
                    <div class="card">
                        <div class="card-header text-center mb-3">
                            <h4 class="card-title mb-3">{{ $apprentince['name'] }}</h4>

                        </div>

                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>
                                        <h4>Nama Lengkap</h4>
                                    </td>
                                    <td>
                                        <h4>:</h4>
                                    </td>
                                    <td>
                                        <h4>{{ $apprentince['name'] }}</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>NIM/NISN</h4>
                                    </td>
                                    <td>
                                        <h4>:</h4>
                                    </td>
                                    <td>
                                        <h4>{{ $apprentince['nim/nisn'] }}</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>Asal Instansi</h4>
                                    </td>
                                    <td>
                                        <h4>:</h4>
                                    </td>
                                    <td>
                                        <h4>{{ $apprentince['school'] }}</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>Tanggal Mulai PKL</h4>
                                    </td>
                                    <td>
                                        <h4>:</h4>
                                    </td>
                                    <td>
                                        <h4>{{ $apprentince['date_start'] }}</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>Tanggal Selesai PKL</h4>
                                    </td>
                                    <td>
                                        <h4>:</h4>
                                    </td>
                                    <td>
                                        <h4>{{ $apprentince['date_end'] }}</h4>
                                    </td>
                                </tr>


                                @if (!empty($apprentince['file']))
                                    <iframe width="100%" height="500px"
                                        src="{{ asset('apprentinces/' . $apprentince['file']) }}"
                                        alt="{{ $apprentince['file'] }}"></iframe>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
