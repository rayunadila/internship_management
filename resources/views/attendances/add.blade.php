@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Tambah Data Presensi</h3>
@endsection


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Presensi</h4>

            </div>
            <div class="iq-card-body">

                <div class="card-body">
                    <form action="{{ route('attendance.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group has-icon-left">
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                        <label for="foto">Upload Foto</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control"
                                            placeholder="Upload Foto Selfie di lokasi magang..."
                                            value="{{ old('longitude') }}" id="longitude" name="longitude" required>
                                        @error('longitude')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group has-icon-left">
                                        <div class="form-control-icon">
                                            <span class="fa-fw select-all fas"></span>
                                            <label for="description">Keterangan</label>
                                        </div>

                                        <div class="position-relative">
                                            <input type="text" class="form-control"
                                                placeholder="Tambahkan keterangan (Hadir/Izin/Sakit)..."
                                                value="{{ old('latitude') }}" id="latitude" name="latitude" required>
                                            @error('latitude')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end mt-3">
                                    <a href="{{ route('attendance.index') }}"
                                        class="btn btn-light-secondary me-3 mb-1">Kembali</a>
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
    </section>
@endsection

@section('js_after')
@endsection
