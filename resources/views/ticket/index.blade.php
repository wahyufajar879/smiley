@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Pemesanan Ticket</h4>
        <a href="{{ route('tickets.create') }}" class="btn btn-primary">Tambah Pemesanan</a>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>No Phone</th>
                    <th>Destination</th>
                    <th>Select Boat</th>
                    <th>Tanggal</th>
                    <th>Time</th>
                    <th>Person</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->name }}</td>
                    <td>{{ $ticket->no_phone }}</td>
                    <td>{{ $ticket->destination }}</td>
                    <td>{{ $ticket->select_boat }}</td>
                    <td>{{ $ticket->tanggal }}</td>
                    <td>{{ $ticket->time }}</td>
                    <td>{{ $ticket->person }} Pax</td>
                    <td>
                        <a href="{{ route('tickets.show', $ticket->id) }}" class="btn btn-sm btn-info">Lihat</a>
                        <a href="{{ route('tickets.edit', $ticket->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pemesanan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection