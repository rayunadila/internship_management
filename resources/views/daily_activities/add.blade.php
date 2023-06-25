@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Catatan Harian Pengajuan Praktek Kerja Lapangan</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    @if (session('error'))
                        <p>{{ session('error') }}</p>
                    @endif

                    <form action="{{ route('daily_activity.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="activity">Catatan Kegiatan Harian</label>
                            <input type="text" class="form-control" placeholder="Tambahkan Catatan Kegiatan Harian"
                                value="{{ old('activity') }}" id="activity" name="activity" required>
                            @error('activity')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 d-flex justify-content-end mt-3">
                            <a href="{{ route('daily_activity.index') }}"
                                class="btn btn-light-secondary me-3 mb-1">Kembali</a>
                            <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
