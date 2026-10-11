@extends('layouts.app')

@section('content')
    <x-alert type="success">
        Terima kasih, {{ $laporan->nama_pelapor }}! Laporan banjir di
        {{ $laporan->lokasi }} (setinggi {{ $laporan->tinggi_genangan }} cm) berhasil disimpan.
    </x-alert>

    <a href="{{ route('laporan.index') }}">Lihat daftar laporan</a>
@endsection