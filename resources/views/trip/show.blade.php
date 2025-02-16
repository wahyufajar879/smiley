@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Detail Pemesanan Trip</h4>
    </div>
    <div class="pd-20">
        <p><strong>Name:</strong> {{ $trip->name }}</p>
        <p><strong>No Phone:</strong> {{ $trip->no_phone }}</p>
        <p><strong>Type Vehicle:</strong> {{ $trip->type_vehicle }}</p>
        <p><strong>People:</strong> {{ $trip->people }}</p>
        <p><strong>Destination:</strong> {{ $trip->destination }}</p>
        <p><strong>Place To Go:</strong> {{ $trip->place_to_go }}</p>
        <a href="{{ route('trips.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection