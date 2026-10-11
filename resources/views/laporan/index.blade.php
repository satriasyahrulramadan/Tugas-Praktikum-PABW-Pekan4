@extends('layouts.app')

@section('content')
    <h2>Daftar Laporan Banjir</h2>

    @forelse ($laporan as $item)
        @include('partials.laporan-card', ['item' => $item])
    @empty
        <x-alert type="info">Belum ada laporan.</x-alert>
    @endforelse
@endsection