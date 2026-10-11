@php
    if ($item->tinggi_genangan >= 100) {
        $status = 'Awas';
    } elseif ($item->tinggi_genangan >= 50) {
        $status = 'Siaga';
    } else {
        $status = 'Waspada';
    }
@endphp

<div class="card">
    <h3>{{ $item->lokasi }}</h3>
    <p>Pelapor: {{ $item->nama_pelapor }}</p>
    <p>Tinggi genangan: {{ $item->tinggi_genangan }} cm</p>
    <p>Tanggal: {{ \Carbon\Carbon::parse($item->tanggal_kejadian)->format('d-m-Y') }}</p>
    <span class="badge {{ $status }}">{{ $status }}</span>
</div>