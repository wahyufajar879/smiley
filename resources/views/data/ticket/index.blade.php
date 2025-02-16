@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Ticket</h4>
        <a href="{{ route('data_tickets.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th>Type Fast Boot</th>
                    <th>Destination</th>
                    <th>Time</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataTickets as $dataTicket)
                <tr>
                    <td>{{ $dataTicket->type_fast_boot }}</td>
                    <td>{{ $dataTicket->destination }}</td>
                    <td>{{ $dataTicket->time }}</td>
                    <td>Rp. {{ number_format($dataTicket->price, 0, ',', '.') }}</td> <!-- Format harga -->
                    <td>
                        <a href="{{ route('data_tickets.show', $dataTicket->id) }}" class="btn btn-sm btn-info">Lihat</a>
                        <a href="{{ route('data_tickets.edit', $dataTicket->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('data_tickets.destroy', $dataTicket->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection