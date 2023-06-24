@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Pengajuan PKL</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    @if (session('error'))
                        <span class="bg-danger">{{ session('error') }}</span>
                    @endif
                    <form id="form-wizard1" action="{{ route('apprentince.store') }}" class="text-center mt-4" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <ul id="top-tab-list" class="p-0">
                            <li class="active" id="account">
                                <a href="javascript:void();">
                                    <i class="ri-user-fill"></i><span>Data Ketua</span>
                                </a>
                            </li>
                            <li id="personal">
                                <a href="javascript:void();">
                                    <i class="ri-user-add-fill"></i><span>Data Anggota</span>
                                </a>
                            </li>
                            <li id="payment">
                                <a href="javascript:void();">
                                    <i class="ri-file-fill"></i><span>File Pengajuan</span>
                                </a>
                            </li>
                            <li id="confirm">
                                <a href="javascript:void();">
                                    <i class="ri-check-fill"></i><span>Selesai</span>
                                </a>
                            </li>
                        </ul>
                        <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card text-left">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mb-4">Data Ketua:</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="school">Asal Instansi</label>
                                            <input type="text" name="school[]" class="form-control" id="school"
                                                value="{{ old('school') }}" placeholder="Asal Instansi" required>
                                            @error('school')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="department">Jurusan </label>
                                            <input type="text" name="department[]" class="form-control" id="department"
                                                value="{{ old('department') }}" placeholder="Jurusan" required>
                                            @error('department')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nama Lengkap </label>
                                            <input type="text" name="name[]" class="form-control" id="name"
                                                value="{{ old('name') }}" placeholder="Nama Lengkap" required>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nisn_nim">NISN/NIM</label>
                                            <input type="number" class="form-control" id="nisn_nim" name="nisn_nim"
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
                                            <input type="number" name="phone_number" class="form-control"
                                                id="phone_number" value="{{ old('phone_number') }}"
                                                placeholder=" No. Handphone" required>
                                            @error('phone_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="address">Alamat</label>
                                            <textarea class="form-control" name="address" id="address" rows="1" placeholder="Alamat" required>{{ old('address') }}</textarea>
                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date_start">Tanggal Mulai PKL</label>
                                            <input type="date" class="form-control" id="date_start" name="date_start"
                                                value="{{ old('date_start') }}" placeholder="Tanggal Mulai PKL"required>
                                            @error('date_start')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="file">Tanggal Selesai PKL</label>
                                            <input type="date" class="form-control" id="date_end" name="date_end"
                                                value="{{ old('date_end') }}" placeholder="Tanggal Selesai PKL"required>
                                            @error('date_end')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" name="next" class="btn btn-primary next action-button float-right"
                                value="Next">Selanjutnya</button>
                        </fieldset>
                        <fieldset>
                            <div class="form-card text-left">
                                <div class="row">
                                    <div class="col-7">
                                        <h3>Tambah Anggota:</h3>
                                        <h6 class="mb-4">*Isi jika terdapat anggota</h6>
                                    </div>
                                </div>
                                <div id="form-item">
                                </div>
                            </div>
                            <button type="button" id="btn_add" class="btn btn-primary float-left">Tambah
                                Anggota</button>
                            <button type="button" name="next" class="btn btn-primary next action-button float-right"
                                value="Next">Selanjutnya</button>
                            <button type="button" name="previous"
                                class="btn btn-dark previous action-button-previous float-right mr-3"
                                value="Previous">Kembali</button>
                        </fieldset>
                        <fieldset>
                            <div class="form-card text-left">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mb-4">File Pengajuan PKL :</h3>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>File Pengajuan PKL:</label>
                                    <input type="file" class="form-control" name="file">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                            <button type="button" name="previous"
                                class="btn btn-dark previous action-button-previous float-right mr-3"
                                value="Previous">Previous</button>
                        </fieldset>
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

        // Add New Form
        function initForm() {
            let rowIndex = 0;

            $("#btn_add").click(function() {
                $("#form-item").append(`
                            <div class="row">
                                <div class="col-md-12">
                                    <button class='btn btn-danger remove'>Hapus Form</button>
                                </div>
                                <br>
                                <br>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="department">Jurusan </label>
                                        <input type="text" name="department_detail[]" class="form-control" id="department"
                                            value="{{ old('department') }}" placeholder="Jurusan">
                                        @error('department')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap </label>
                                        <input type="text" name="name_detail[]" class="form-control" id="name"
                                            value="{{ old('name') }}" placeholder="Nama Lengkap">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nisn_nim">NISN/NIM</label>
                                        <input type="number" name="nisn_nim_detail[]" class="form-control" id="nisn_nim"
                                            value="{{ old('nisn_nim') }}" placeholder="NIM/NISN">
                                        @error('nisn_nim')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birth_date">Tanggal Lahir</label>
                                        <input type="date" name="birth_date_detail[]" class="form-control" id="birth_date"
                                            value="{{ old('birth_date') }}" placeholder="Tanggal Lahir">
                                        @error('birth_date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birth_place">Tempat Lahir</label>
                                        <input type="text" name="birth_place_detail[]" class="form-control" id="birth_place"
                                            value="{{ old('birth_place') }}" placeholder="Tanggal Lahir">
                                        @error('birth_place')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Jenis Kelamin</label>
                                        <select class="form-control" name="gender_detail[]" id="gender">
                                            <option value="gender" selected>Jenis Kelamin</option>
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
                                        <input type="number" name="phone_number_detail[]" class="form-control" id="phone_number"
                                            value="{{ old('phone_number') }}" placeholder=" No. Handphone">
                                        @error('phone_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Alamat</label>
                                        <textarea class="form-control" name="address_detail[]" id="address" rows="1" placeholder="Alamat">{{ old('address') }}</textarea>
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                `);
            });

            $("#form-item").on('click', '.remove', function() {
                $(this).closest('.row').remove();
            });
        }
    </script>
@endsection
