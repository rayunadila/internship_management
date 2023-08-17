@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Data Pengajuan PKL</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    @if (session('error'))
                        <span class="bg-danger">{{ session('error') }}</span>
                    @endif
                    <form id="form-wizard1" action="{{ route('apprentince.store_request') }}" class="text-center mt-4"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        <ul id="top-tab-list" class="p-0">
                            <li class="active" id="account">
                                <a href="javascript:void();">
                                    <i class="ri-user-fill"></i><span>Isi Data</span>
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
                                        <h3 class="mb-4">Data Pengajuan PKL:</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="school">Asal Sekolah/Perguruan Tinggi</label>
                                            <input type="text" name="school" class="form-control" id="school"
                                                value="{{ old('school') }}" placeholder="Asal Sekolah/Perguruan Tinggi"
                                                required>
                                            @error('school')
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

                                    <div class="col-md-6">
                                        <div class="form-group has-icon-left">
                                            <label for="file">File Pengajuan Magang</label>
                                            <div class="position-relative">
                                                <input type="file" class="form-control"
                                                    placeholder="File Pengajuan Magang" value="{{ old('file') }}"
                                                    id="file" name="file" required>
                                                @error('file')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="form-control-icon">
                                                    <span class="fa-fw select-all fas"></span>
                                                </div>
                                                <p><span class="text-danger">*</span>File Ekstensi PDF (Maks 3 MB)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
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
