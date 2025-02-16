@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Detail Data Trip</h4>
    </div>
    <div class="pd-20">
        <p><strong>Type Vehicle:</strong> {{ $dataTrip->type_vehicle }}</p>
        <p><strong>Destination:</strong> {{ $dataTrip->destination }}</p>
        <p><strong>Place To Go:</strong> {{ $dataTrip->place_to_go }}</p>
        <p><strong>Price:</strong> Rp. {{ number_format($dataTrip->price, 0, ',', '.') }}</p>
        <a href="{{ route('data_trips.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection