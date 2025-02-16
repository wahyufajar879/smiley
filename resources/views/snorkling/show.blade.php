@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Detail Pemesanan Snorkling</h4>
    </div>
    <div class="pd-20">
        <p><strong>Name:</strong> {{ $snorkling->name }}</p>
        <p><strong>No Phone:</strong> {{ $snorkling->no_phone }}</p>
        <p><strong>Select Package:</strong> {{ $snorkling->select_package }}</p>
        <p><strong>Destination:</strong> {{ $snorkling->destination }}</p>
        <p><strong>Person:</strong> {{ $snorkling->person }} Pax</p>
        <a href="{{ route('snorklings.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection