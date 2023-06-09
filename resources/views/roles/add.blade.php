@extends('layouts.app')

@section('css_after')
@endsection

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Tambah Role</h4>
            </div>
        </div>

        {{-- Error Message --}}
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="card-body">
            <form action="{{ route('role.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Pengguna </label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}"
                        placeholder="Nama Pengguna..." required>
                </div>
                <hr>
                <div class="form-group">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Hak Akses</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($permissions as $item)
                                    <div class="col-md-4">
                                        <input type="checkbox" class="checkbox-input" name="permission[]"
                                            id="{{ $item->id }}" value="{{ $item->id }}">
                                        <label for="{{ $item->id }}">{{ $item->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('role.index') }}" class="btn btn-warning">Kembali</a>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('js_after')
@endsection
