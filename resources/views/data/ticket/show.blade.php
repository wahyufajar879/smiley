@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Detail Data Ticket</h4>
    </div>
    <div class="pd-20">
        <p><strong>Type Fast Boot:</strong> {{ $dataTicket->type_fast_boot }}</p>
        <p><strong>Destination:</strong> {{ $dataTicket->destination }}</p>
        <p><strong>Time:</strong> {{ $dataTicket->time }}</p>
        <p><strong>Price:</strong> Rp. {{ number_format($dataTicket->price, 0, ',', '.') }}</p>
        <a href="{{ route('data_tickets.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection