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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
