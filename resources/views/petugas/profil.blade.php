@extends('layouts.app')

@section('content')
    <h2>Profil Petugas</h2>

    <div class="card">
        <p>Nama: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Akun dibuat: {{ $user->created_at->format('d-m-Y H:i') }}</p>
    </div>
@endsection