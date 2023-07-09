@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Input Laporan PKL</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    @if (session('error'))
                        <p>{{ session('error') }}</p>
                    @endif

                    <form action="{{ route('apprentince_file.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="file">File Laporan PKL (*File Ekstensi PDF Maks 3MB)</label>
                            <input type="file" class="form-control" placeholder="Tambahkan Catatan Kegiatan Harian"
                                value="{{ old('file') }}" id="file" name="file" required>
                            @error('file')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 d-flex justify-content-end mt-3">
                            <a href="{{ route('apprentince_file.index') }}"
                                class="btn btn-light-secondary me-3 mb-1">Kembali</a>
                            <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
