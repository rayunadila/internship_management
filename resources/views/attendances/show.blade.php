@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Detail Presensi</h4>
                    </div>
                </div>
                <div class="card m-3">
                    <div class="card-header">
                        <h4 class="card-title text-center">Lokasi Presensi</h4>
                    </div>
                    <div class="card-body">
                        <iframe
                            src="https://maps.google.com/maps?q=+{{ $data['latitude'] }}+,+{{ $data['longitude'] }}+&hl=en&z=14&amp;output=embed"
                            width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="row">

                        <div class="col-md-6">
                            <label>Nama Mahasiswa/Siswa</label>
                            <input class="form-control" type="text" disabled>
                        </div>
                        <div class="col-md-6">
                            <label>Status Kehadiran</label>
                            @if ($data['status'] == App\Models\Attendance::STATUS_PRESENT)
                                <span class="badge bg-success">{{ $data['status'] }}</span>
                            @else
                                <span class="badge bg-danger">{{ $data['status'] }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
