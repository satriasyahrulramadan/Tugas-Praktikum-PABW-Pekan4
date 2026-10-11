@extends('layouts.app')

@section('content')
    <h2>Form Pelaporan Banjir</h2>

    @if ($errors->any())
        <x-alert type="danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </x-alert>
    @endif

    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf
        <input type="text" name="nama_pelapor" value="{{ old('nama_pelapor') }}" placeholder="Nama pelapor">
        <input type="text" name="lokasi" value="{{ old('lokasi') }}" placeholder="Lokasi (kecamatan)">
        <input type="number" name="tinggi_genangan" value="{{ old('tinggi_genangan') }}" placeholder="Tinggi genangan (cm)">
        <input type="date" name="tanggal_kejadian" value="{{ old('tanggal_kejadian') }}">
        <button type="submit">Kirim Laporan</button>
    </form>
@endsection