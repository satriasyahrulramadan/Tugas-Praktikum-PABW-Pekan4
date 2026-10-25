@extends('layouts.app')

@section('content')
    <h2>Login Petugas</h2>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
        @error('email') <p class="error">{{ $message }}</p> @enderror

        <input type="password" name="password" placeholder="Password">
        @error('password') <p class="error">{{ $message }}</p> @enderror

        <button type="submit">Login</button>
    </form>
@endsection