@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Detail Pemesanan Ticket</h4>
    </div>
    <div class="pd-20">
        <p><strong>Name:</strong> {{ $ticket->name }}</p>
        <p><strong>No Phone:</strong> {{ $ticket->no_phone }}</p>
        <p><strong>Destination:</strong> {{ $ticket->destination }}</p>
        <p><strong>Select Boat:</strong> {{ $ticket->select_boat }}</p>
        <p><strong>Tanggal:</strong> {{ $ticket->tanggal }}</p>
        <p><strong>Time:</strong> {{ $ticket->time }}</p>
        <p><strong>Person:</strong> {{ $ticket->person }} Pax</p>
        <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection