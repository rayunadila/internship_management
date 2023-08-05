@extends('layouts.app')

@section('content-header')
    <h3>Presensi Masuk</h3>
@endsection


@section('content')

    {{--  --}}
    <section class="section">
        <div class="col-lg-12">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Data Kehadiran Peserta PKL</h4>
                    </div>
                </div>

                    {{-- Error Message --}}
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <form action="{{ route('attendance.store_present_in') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                <label>Nama Peserta PKL</label>
                                <input type="text" value="{{ Auth::user()->name }}" class="form-control" disabled>
                            </div>
                                <div class="col-md-6">
                                    <div class="form-group has-icon-left">
                                        <label for="foto">Status Kehadiran</label>
                                        <div class="position-relative">
                                               <select name="status" class="form-control" required>
                                    <option value="">Pilih Kehadiran</option>

                                                @foreach (App\Models\Attendance::STATUS_CHOICE as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <p class="text-muted"></p>
                                    </div>

                                    <input type="hidden" name="longitude" id="longitude">
                                    <input type="hidden" name="latitude" id="latitude">

                                    <div class="col-12 d-flex justify-content-end mt-4">
                                        <a href="{{ route('attendance.index') }}"
                                            class="btn btn-warning mr-2">Kembali</a>
                                        <button type="submit" onclick="return confirm('Simpan Data?')"
                                            class="btn btn-primary me-1 mb-1">Simpan</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('js_after')
    <script>
        function initGeolocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    $("#latitude").val(position.coords.latitude);
                    $("#longitude").val(position.coords.longitude);
                });
            } else {
                alert("Lokasi tidak dapat diperoleh.");
            }
        }

        initGeolocation();
    </script>


@endsection
