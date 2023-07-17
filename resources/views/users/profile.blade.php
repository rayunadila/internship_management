@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-11 offset-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Profil</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="event-post position-relative">
                                        @if (empty(Auth::user()->photo))
                                            <img src="{{ asset('images/user.png') }}" alt="User"
                                                class="img-fluid rounded">
                                        @else
                                            <img src="{{ asset('assets/images/' . Auth::user()->photo) }}"
                                                class="img-fluid rounded" alt="{{ Auth::user()->name }}">
                                        @endif
                                        <div class="iq-card-body text-center">
                                            <h5>{{ $user['name'] }}</h5>
                                            @if (!empty($user->getRoleNames()))
                                                @foreach ($user->getRoleNames() as $item)
                                                    <span class="badge badge-info ml-2">{{ $item }}</span>
                                                @endforeach
                                            @endif
                                        </div>
                                        <form action="{{ route('user.update_profile', Crypt::encrypt($user['id'])) }}"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Ubah Foto Profil (Jpg, Jpeg,
                                                    Png (Max 1MB))</label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                                    name="photo">
                                                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#changePasswordModal">
                                        Ubah Password
                                    </button>

                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="changePasswordModal" data-backdrop="static"
                                    data-keyboard="false" tabindex="-1" aria-labelledby="changePasswordModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="changePasswordModalLabel">Ubah Password</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form
                                                action="{{ route('user.update_password', Crypt::encrypt(Auth::user()->id)) }}"
                                                method="post">
                                                @csrf
                                                @method('put')
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="current_password">Password Sekarang</label>
                                                                <input type="password" class="form-control"
                                                                    name="current_password" id="current_password" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="new_password">Password Baru</label>
                                                                <input type="password" class="form-control"
                                                                    name="new_password" id="new_password" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="confirm_new_password">Konfirmasi Password
                                                                    Baru</label>
                                                                <input type="password" class="form-control"
                                                                    name="confirm_new_password" id="confirm_new_password"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Tutup</button>
                                                    <button onclick="return confirm('Simpan Data?')" type="submit"
                                                        class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
