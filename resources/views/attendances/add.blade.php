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
                    <div class="row">
                        <div class="col-md-12">
                            @if (session('error'))
                                <span class="bg-danger">{{ session('error') }}</span>
                            @endif
                            <div class="text-center">
                                <div class="btn-group">
                                    <form action="{{ route('attendance.store') }}" method="post" class="m-3">
                                        @csrf
                                        <input type="hidden" name="description" value="Hadir">
                                        <input type="hidden" name="latitude" id="latitude">
                                        <input type="hidden" name="longitude" id="longitude">
                                        <button type="submit" class="btn btn-success"
                                            onclick="return confirm('Konfirmasi Data')">Hadir</button>
                                    </form>

                                    <form action="{{ route('attendance.store') }}" method="post" class="m-3">
                                        @csrf
                                        <input type="hidden" name="description" value="Tidak Hadir">
                                        <input type="hidden" name="latitude" id="latitude2">
                                        <input type="hidden" name="longitude" id="longitude2">
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Konfirmasi Data')">Tidak Hadir</button>
                                    </form>
                                </div>

                            </div>
                            <div class="col-12 d-flex justify-content-end mt-3">
                                <a href="{{ route('attendance.index') }}"
                                    class="btn btn-light-secondary me-3 mb-1">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
@endsection

@section('js_after')
    <script type="text/javascript">
        function initGeolocation() {
            if (navigator.geolocation) {
                // Call getCurrentPosition with success and failure callbacks
                navigator.geolocation.getCurrentPosition(success, fail);
            } else {
                alert("Sorry, your browser does not support geolocation services.");
            }
        }

        function success(position) {

            document.getElementById('longitude').value = position.coords.longitude;
            document.getElementById('latitude').value = position.coords.latitude;

            document.getElementById('longitude2').value = position.coords.longitude;
            document.getElementById('latitude2').value = position.coords.latitude
        }

        function fail() {
            // Could not obtain location
        }

        initGeolocation();
    </script>
@endsection
