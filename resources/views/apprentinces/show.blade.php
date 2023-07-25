@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <a class="btn btn-info btn-sm mb-2" href="{{ route('apprentince.index') }}">Kembali</a>
                        <h4 class="card-title">Data Peserta PKL</h4>
                    </div>
                </div>
                <div class="card-body">
                    {{-- MENAMPILKAN FILE --}}
                    <div class="card">
                        <div class="card-header mb-3">
                            <h4 class="card-title mb-3">Data Pengajuan PKL</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">Nama Lengkap</label>
                                    <input id="name" type="text" class="form-control" value="{{ $data['name'] }}"
                                        disabled>
                                </div>

                                <div class="col-md-6">
                                    <label for="school">Asal Instansi</label>
                                    <input id="school" type="text" class="form-control" value="{{ $data['school'] }}"
                                        disabled>
                                </div>

                                <div class="col-md-6">
                                    <label for="department">Jurusan</label>
                                    <input id="department" type="text" class="form-control"
                                        value="{{ $data['department'] }}" disabled>
                                </div>

                                <div class="col-md-6">
                                    <label for="nisn_nim">NISN/NIM</label>
                                    <input id="nisn_nim" type="text" class="form-control"
                                        value="{{ $data['nisn_nim'] }}" disabled>
                                </div>

                                <div class="col-md-6">
                                    <label for="birth_place">Tempat Lahir</label>
                                    <input id="birth_place" type="text" class="form-control"
                                        value="{{ $data['birth_place'] }}" disabled>
                                </div>

                                <div class="col-md-6">
                                    <label for="birth_date">Tanggal Lahir</label>
                                    <input id="birth_date" type="text" class="form-control"
                                        value="{{ $data['birth_date'] }}" disabled>
                                </div>

                                <div class="col-md-6">
                                    <label for="gender">Jenis Kelamin</label>
                                    <input id="gender" type="text" class="form-control" value="{{ $data['gender'] }}"
                                        disabled>
                                </div>

                                <div class="col-md-6">
                                    <label for="phone_number">No. Handphone</label>
                                    <input id="phone_number" type="text" class="form-control"
                                        value="{{ $data['phone_number'] }}" disabled>
                                </div>

                                <div class="col-md-12">
                                    <label for="address">Alamat</label>
                                    <input id="address" type="text" row="1" class="form-control"
                                        value="{{ $data['address'] }}" disabled>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
