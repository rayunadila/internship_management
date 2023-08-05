{{-- @extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-6 col-lg-6">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Detail Presensi</h4>
                    </div>
                    <div class="text-end">
                        <a href="{{ route('attendance.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nama Mahasiswa/Siswa</label>
                            <input class="form-control" type="text" value="{{ $data['apprentince']['user']['name'] }}"
                                disabled>
                        </div>
                        <div class="col-md-6">
                            <label>Status Kehadiran</label>
                            <br>
                            @if ($data['status'] == App\Models\Attendance::STATUS_PRESENT)
                                <button type="button" class="btn btn-success">{{ $data['status'] }}</button>
                            @else
                                <button type="button" class="btn btn-danger">{{ $data['status'] }}</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-6">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Lokasi Presensi</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <iframe
                        src="https://maps.google.com/maps?q=+{{ $data['latitude'] }}+,+{{ $data['longitude'] }}+&hl=en&z=14&amp;output=embed"
                        width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@extends('layouts.app')

@section('content-header')
    <h3>Detail Presensi</h3>
@endsection


@section('content')
    <section class="section">
        <div class="row">
            <div class="col-sm-6 col-lg-6">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Detail Presensi</h4>
                        </div>
                        <div class="text-end">
                            <a href="{{ route('attendance.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nama</label>
                                <input type="text" class="form-control" value="{{ $data['apprentince']['name'] }}"
                                    disabled>
                            </div>
                            <div class="col-md-6">
                                <label>Status Kehadiran</label>
                                <input type="text" class="form-control" value="{{ $data['status'] }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label>Waktu Masuk</label>
                                <input type="text" class="form-control" value="{{ $data['present_in'] }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label>Waktu Keluar</label>
                                <input type="text" class="form-control" value="{{ $data['present_out'] }}" disabled>
                            </div>
                            <div class="col-sm-6 col-lg-6">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Lokasi Presensi</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <iframe
                            src="https://maps.google.com/maps?q=+{{ $data['latitude'] }}+,+{{ $data['longitude'] }}+&hl=en&z=14&amp;output=embed"
                            width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
    </section>
@endsection

@section('js_after')
    <script>
        function initGeolocation() {
            if (navigator.geolocation) {
                let options = {
                    enableHighAccuracy: true,
                    timeout: 5000,
                };
                // Call getCurrentPosition with success and failure callbacks
                navigator.geolocation.getCurrentPosition(success, fail, options);
            } else {
                alert("Sorry, your browser does not support geolocation services.");
            }
        }

        function success(position) {
            $("#longitude").val(position.coords.longitude);
            $("#latitude").val(position.coords.latitude);
        }

        function fail() {
            // Could not obtain location
        }

        initGeolocation();
    </script>
@endsection
