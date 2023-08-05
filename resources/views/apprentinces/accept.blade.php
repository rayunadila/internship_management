@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Konfirmasi Penerimaan Magang</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    @if (session('error'))
                        <p>{{ session('error') }}</p>
                    @endif

                    <form action="{{ route('apprentince.accepted', Crypt::encrypt($data['id'])) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="file_email">File Surat Balasan (File Ekstensi PDF Maks 3MB)</label>
                            <input type="file" class="form-control" value="{{ old('file_email') }}" id="file_email"
                                name="file_email" required>
                            @error('file_email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subject_email">Isi Email</label>
                            <textarea class="form-control" name="subject_email" rows="8">{{ old('subject_email') }}</textarea>
                            @error('subject_email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 d-flex justify-content-end mt-3">
                            <a href="{{ route('apprentince.index_request') }}"
                                class="btn btn-light-secondary me-3 mb-1">Kembali</a>
                            <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
