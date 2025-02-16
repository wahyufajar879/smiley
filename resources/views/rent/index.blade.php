@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Pemesanan Rent Motorbike</h4>
        <a href="{{ route('rents.create') }}" class="btn btn-primary">Tambah Pemesanan</a>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>No Phone</th>
                    <th>Type Motorbike</th>
                    <th>Date</th>
                    <th>Rent Day</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rents as $rent)
                <tr>
                    <td>{{ $rent->name }}</td>
                    <td>{{ $rent->no_phone }}</td>
                    <td>{{ $rent->type_motorbike }}</td>
                    <td>{{ $rent->date }}</td>
                    <td>{{ $rent->rent_day }} Hari</td>
                    <td>
                        <a href="{{ route('rents.show', $rent->id) }}" class="btn btn-sm btn-info">Lihat</a>
                        <a href="{{ route('rents.edit', $rent->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('rents.destroy', $rent->id) }}" method="POST" style="display: inline-block;">
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