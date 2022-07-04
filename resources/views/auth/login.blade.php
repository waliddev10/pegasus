@extends('layouts.guest')

@section('content')
<div>
    <div class="login-main">
        <form method="POST" action="{{ route('login') }}" class="theme-form">
            @csrf
            <div class="d-flex align-items-center mb-3">
                <img width="72" src="{{ asset('assets/img/logo.png') }}" alt="logo login">
                <div class="ms-2">
                    <h2 class="my-0">Pegasus</h2>
                    <span class="text-sm">Penugasan Bidang Khusus</span>
                </div>
            </div>
            <div class="form-group">
                <input autofocus required type="text" name="username" class="form-control" placeholder="Username"
                    value="{{ old('username') }}" />
                @error('username')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <input required type="password" name="password" class="form-control" placeholder="Password" />
                @error('password')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group mb-0">
                {{-- <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox" name="remember">
                    <label class="text-muted" for="checkbox1">Simpan Informasi Login</label>
                </div> --}}
                <div class="text-end mt-3">
                    <button class="btn btn-lg btn-primary btn-block w-100" type="submit">Login</button>
                </div>
            </div>
        </form>
    </div>
    <div class="text-center mt-3">
        <span class="d-block text-white">&copy; 2022 Bidang Khusus Inspektorat Prov. Kaltim</span>
        <object style="width:150px;" type="image/svg+xml" data="{{ asset('assets/images/digicert.svg') }}"></object>
    </div>
</div>
@endsection
