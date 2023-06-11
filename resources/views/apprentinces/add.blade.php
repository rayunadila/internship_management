@extends('layouts.app')

@section('css_after')
    {{-- Select 2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Tambah Data Siswa/Mahasiswa</h4>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary" id="add_form"><i class="fa fa-plus"></i> Tambah Form</button>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form action="{{ route('apprentince.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_id">Nama Akun</label>
                                    <select class="form-control select_user" name="user_id" id="user_id" required>
                                        <option value="" selected>Pilih Akun</option>
                                        @foreach ($users as $item)
                                            <option value="{{ Crypt::encrypt($item->id) }}">{{ $item->name }}</option>
                                        @endforeach
                                        @error('user_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="school">Asal Instansi</label>
                                        <input type="text" name="school" class="form-control" id="school"
                                            value="{{ old('school') }}" placeholder="Asal Instansi" required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="department">Jurusan </label>
                                        <input type="text" name="department" class="form-control" id="department"
                                            value="{{ old('department') }}" placeholder="Jurusan" required>
                                        @error('department')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap </label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            value="{{ old('name') }}" placeholder="Nama Lengkap" required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nisn_nim">NISN/NIM</label>
                                        <input type="number" class="form-control" id="nisn_nim"
                                            value="{{ old('nisn_nim') }}" placeholder="NIM/NISN" required>
                                        @error('nisn_nim')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birth_date">Tanggal Lahir</label>
                                        <input type="date" name="birth_date" class="form-control" id="birth_date"
                                            value="{{ old('birth_date') }}" placeholder="Tanggal Lahir" required>
                                        @error('birth_date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birth_place">Tempat Lahir</label>
                                        <input type="text" name="birth_place" class="form-control" id="birth_place"
                                            value="{{ old('birth_place') }}" placeholder="Tanggal Lahir" required>
                                        @error('birth_place')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Jenis Kelamin</label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option value="" selected>Jenis Kelamin</option>
                                            @foreach (App\Models\Apprentince::GENDER_CHOICE as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                        @error('gender')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone_number">No. Handphone</label>
                                        <input type="number" name="phone_number" class="form-control" id="phone_number"
                                            value="{{ old('phone_number') }}" placeholder=" No. Handphone" required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Alamat</label>
                                        <textarea class="form-control" name="address" id="address" rows="1" placeholder="Alamat" required>{{ old('address') }}</textarea>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_start">Tanggal Mulai PKL</label>
                                        <input type="date" class="form-control" id="date_start"
                                            value="{{ old('date_start') }}" placeholder="Tanggal Mulai PKL"required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="file">Tanggal Selesai PKL</label>
                                        <input type="date" class="form-control" id="date_end"
                                            value="{{ old('date_end') }}" placeholder="Tanggal Selesai PKL"required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <div id="form-item" class="col-md-12">
                                </div>
                                <hr>
                                <div class="col-md-12 mt-2">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">File Pengajuan PKL</label>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <a href="{{ route('apprentince.index') }}" class="btn iq-bg-danger mr-2">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_after')
    <script>
        $(() => {
            initForm();
        })

        // Option Question
        function initForm() {
            let rowIndex = 0;

            $("#add_form").click(function() {
                $("#form-item").append(`
                <div class="col-md-12">
                                <div class="form-group">
                                    <label for="school">Asal Instansi</label>
                                    <input type="text" name="school" class="form-control" id="school"
                                        value="{{ old('school') }}" placeholder="Asal Instansi" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="department">Jurusan </label>
                                    <input type="text" name="department" class="form-control" id="department"
                                        value="{{ old('department') }}" placeholder="Jurusan" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap </label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        value="{{ old('name') }}" placeholder="Nama Lengkap" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nisn_nim">NISN/NIM</label>
                                    <input type="number" class="form-control" id="nisn_nim" value="{{ old('nisn_nim') }}"
                                        placeholder="NIM/NISN" required>
                                    @error('nisn_nim')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="birth_date">Tanggal Lahir</label>
                                    <input type="date" name="birth_date" class="form-control" id="birth_date"
                                        value="{{ old('birth_date') }}" placeholder="Tanggal Lahir" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="birth_place">Tempat Lahir</label>
                                    <input type="text" name="birth_place" class="form-control" id="birth_place"
                                        value="{{ old('birth_place') }}" placeholder="Tanggal Lahir" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="gender">Jenis Kelamin</label>
                                    <select class="form-control" name="gender" id="gender">
                                        <option value="" selected>Jenis Kelamin</option>
                                        @foreach (App\Models\Apprentince::GENDER_CHOICE as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phone_number">No. Handphone</label>
                                    <input type="number" name="phone_number" class="form-control" id="phone_number"
                                        value="{{ old('phone_number') }}" placeholder=" No. Handphone" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">Alamat</label>
                                    <textarea class="form-control" name="address" id="address" rows="1" placeholder="Alamat" required>{{ old('address') }}</textarea>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="date_start">Tanggal Mulai PKL</label>
                                    <input type="date" class="form-control" id="date_start"
                                        value="{{ old('date_start') }}" placeholder="Tanggal Mulai PKL"required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="file">Tanggal Selesai PKL</label>
                                    <input type="date" class="form-control" id="date_end"
                                        value="{{ old('date_end') }}" placeholder="Tanggal Selesai PKL"required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                `);
            });

            $("#tbody").on('click', '.remove', function() {
                $(this).closest('row').remove();
            });
        }
    </script>
@endsection

@section('js_after')
    {{-- Select 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".select_user").select2();

        });
    </script>
