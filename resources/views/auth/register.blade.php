@extends('layouts.app')

@section('content')
    <h2>Register Petugas</h2>

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Nama">
        @error('name') <p class="error">{{ $message }}</p> @enderror

        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
        @error('email') <p class="error">{{ $message }}</p> @enderror

        <input type="password" name="password" placeholder="Password">
        @error('password') <p class="error">{{ $message }}</p> @enderror

        <input type="password" name="password_confirmation" placeholder="Konfirmasi password">

        <button type="submit">Daftar</button>
    </form>
@endsection