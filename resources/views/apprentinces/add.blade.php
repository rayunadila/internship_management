@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            {{-- <div class="iq-card-body">
                    <p>Lengkapilah data-data dibawah ini.</p>
                    <form action="{{ route('apprentince.store') }}" method="POST">
                        @csrf


                        <div class="form-group">
                            <label for="name">Nama Lengkap </label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{ old('name') }}" placeholder="Nama Lengkap" required>
                                @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                        </div>

                        <div class="form-group">
                            <label for="nisn_nim">NISN/NIM</label>
                            <input type="number" class="form-control" id="nisn_nim" value="{{ old('nisn_nim') }}"
                                placeholder="NIM/NISN" required>
                                @error('nisn_nim')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                        </div>


                        <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <input type="option" name="gender" class="form-control" id="gender"
                                value="{{ old('gender') }}" placeholder="Jenis Kelamin" required>
                                @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                        </div>

                        <div class="form-group">
                            <label for="birth_date">Tanggal Lahir</label>
                            <input type="date" name="birth_date" class="form-control" id="birth_date"
                                value="{{ old('birth_date') }}" placeholder="Tanggal Lahir" required>
                                @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                            </div>

                        <div class="form-group">
                            <label for="birth_place">Tempat Lahir</label>
                            <input type="text" name="birth_place" class="form-control" id="birth_place"
                                value="{{ old('birth_place') }}" placeholder="Tanggal Lahir" required>
                            @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                            </div>

                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <input type="text" name="address" class="form-control" id="address"
                                value="{{ old('address') }}" placeholder="Alamat" required>
                            @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                            </div>

                        <div class="form-group">
                            <label for="phone_number">No. Handphone</label>
                            <input type="number" name="phone_number" class="form-control" id="phone_number"
                                value="{{ old('phone_number') }}" placeholder=" No. Handphone" required>
                            @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                            </div>

                        <div class="form-group">
                            <label for="school">Asal Instansi</label>
                            <input type="text" name="school" class="form-control" id="school"
                                value="{{ old('school') }}" placeholder="Asal Instansi" required>
                            @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                            </div>

                        <div class="form-group">
                            <label for="department">Jurusan </label>
                            <input type="text" name="department" class="form-control" id="department"
                                value="{{ old('department') }}" placeholder="Jurusan" required>
                            @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                            </div>

                        <div class="form-group">
                            <label for="date_start">Tanggal Mulai PKL</label>
                            <input type="date" class="form-control" id="date_start" value="{{ old('date_start') }}"
                                placeholder="Tanggal Mulai PKL"required>
                            @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                            </div>

                        <div class="form-group">
                            <label for="file">Tanggal Selesai PKL</label>
                            <input type="date" class="form-control" id="date_end" value="{{ old('date_end') }}"
                                placeholder="Tanggal Selesai PKL"required>
                            @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                            </div>

                        <label for="file">File Pengajuan PKL</label>
                        <input type="file" class="form-control" id="file" value="{{ old('file') }}"
                            placeholder="Pilih File..."required>
                            @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn iq-bg-danger">Cancel</button>
                    </form>
                </div> --}}
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Tambah Data Siswa/Mahasiswa</h4>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Form</button>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email1">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="checkbox mb-3">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn iq-bg-danger">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
