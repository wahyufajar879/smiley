@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Detail Pemesanan Rent Motorbike</h4>
    </div>
    <div class="pd-20">
        <p><strong>Name:</strong> {{ $rent->name }}</p>
        <p><strong>No Phone:</strong> {{ $rent->no_phone }}</p>
        <p><strong>Type Motorbike:</strong> {{ $rent->type_motorbike }}</p>
        <p><strong>Date:</strong> {{ $rent->date }}</p>
        <p><strong>Rent Day:</strong> {{ $rent->rent_day }} Hari</p>
        <a href="{{ route('rents.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection