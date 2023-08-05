{{-- @extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Data Presensi</h3>
@endsection


@section('content')
    <section class="section">
        <div class="col-lg-12">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Kehadiran</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form action="{{ route('attendance.store') }}" method="post">
                        <div class="row">
                            @csrf
                            <div class="col-md-6">
                                <label>Nama</label>
                                <input type="text" value="{{ Auth::user()->name }}" class="form-control" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="attendance_type">Status Kehadiran</label>
                                <select name="attendance_type" id="attendance_type" class="form-control" required>
                                    <option value="">Pilih Kehadiran</option>
                                    @foreach (App\Models\Attendance::STATUS_CHOICE as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="longitude" id="longitude">
                            <input type="hidden" name="latitude" id="latitude">
                            <div class="col-md-12 mt-4">
                                <div class="text-center">
                                    <a href="{{ route('attendance.index') }}" class="btn btn-warning mr -3">Kembali</a>
                                    <button onclick="return confirm('Kirim Data?')" type="submit"
                                        class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js_after')
    <script type="text/javascript">
        function initGeolocation() {
            if (navigator.geolocation) {
                let options = {
                    enableHighAccuracy: true,
                    timeout: 5000,
                    maximumAge: 0
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
@endsection --}}
