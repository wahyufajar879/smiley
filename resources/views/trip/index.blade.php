@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Pemesanan Trip</h4>
        <a href="{{ route('trips.create') }}" class="btn btn-primary">Tambah Pemesanan</a>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>No Phone</th>
                    <th>Type Vehicle</th>
                    <th>People</th>
                    <th>Destination</th>
                    <th>Place To Go</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trips as $trip)
                <tr>
                    <td>{{ $trip->name }}</td>
                    <td>{{ $trip->no_phone }}</td>
                    <td>{{ $trip->type_vehicle }}</td>
                    <td>{{ $trip->people }}</td>
                    <td>{{ $trip->destination }}</td>
                    <td>{{ $trip->place_to_go }}</td>
                    <td>
                        <a href="{{ route('trips.show', $trip->id) }}" class="btn btn-sm btn-info">Lihat</a>
                        <a href="{{ route('trips.edit', $trip->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('trips.destroy', $trip->id) }}" method="POST" style="display: inline-block;">
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