@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Detail Data Snorkling</h4>
    </div>
    <div class="pd-20">
        <p><strong>Type Package:</strong> {{ $dataSnorkling->type_package }}</p>
        <p><strong>Destination:</strong> {{ $dataSnorkling->destination }}</p>
        <p><strong>Price:</strong> Rp. {{ number_format($dataSnorkling->price, 0, ',', '.') }}</p>
        <a href="{{ route('data_snorklings.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection