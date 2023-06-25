@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <a class="btn btn-info btn-sm mb-2" href="{{ route('apprentince.index') }}">Kembali</a>
                        <h4 class="card-title">Data Pengajuan</h4>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
