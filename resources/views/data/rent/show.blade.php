@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Detail Data Rent Motorbike</h4>
    </div>
    <div class="pd-20">
        <p><strong>Category Motorbike:</strong> {{ $dataRentMotorbike->category_motorbike }}</p>
        <p><strong>Type Motorbike:</strong> {{ $dataRentMotorbike->type_motorbike }}</p>
        <p><strong>Price:</strong> Rp. {{ number_format($dataRentMotorbike->price, 0, ',', '.') }}</p>
        <a href="{{ route('data_rent_motorbikes.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection