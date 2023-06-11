@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">

            {{--  --}}
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Tambah Pengajuan PKL</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <p>Lengkapilah data-data dibawah ini.</p>
                    <form action="{{ route('user_register.store') }}" method="POST">
                        @csrf


                        <div class="form-group">
                            <label for="name">Nama Lengkap </label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{ old('name') }}" placeholder="Nama Lengkap" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputNumber1">NIM/NISN</label>
                            <input type="number" class="form-control" id="nisn_nim" value="{{ old('nisn_nim') }}"
                                placeholder="NIM/NISN" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Asal Instansi</label>
                            <input type="text" name="school" class="form-control" id="school"
                                value="{{ old('school') }}" placeholder="Asal Instansi" required>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputdate">Tanggal Mulai PKL</label>
                            <input type="date" class="form-control" id="date_start" value="{{ old('date_start') }}"
                                placeholder="Tanggal Mulai PKL"required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputdate">Tanggal Selesai PKL</label>
                            <input type="date" class="form-control" id="date_end" value="{{ old('date_end') }}"
                                placeholder="Tanggal Mulai PKL"required>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn iq-bg-danger">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
