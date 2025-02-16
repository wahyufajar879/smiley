@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Pemesanan Snorkling</h4>
        <a href="{{ route('snorklings.create') }}" class="btn btn-primary">Tambah Pemesanan</a>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>No Phone</th>
                    <th>Select Package</th>
                    <th>Destination</th>
                    <th>Person</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($snorklings as $snorkling)
                <tr>
                    <td>{{ $snorkling->name }}</td>
                    <td>{{ $snorkling->no_phone }}</td>
                    <td>{{ $snorkling->select_package }}</td>
                    <td>{{ $snorkling->destination }}</td>
                    <td>{{ $snorkling->person }} Pax</td>
                    <td>
                        <a href="{{ route('snorklings.show', $snorkling->id) }}" class="btn btn-sm btn-info">Lihat</a>
                        <a href="{{ route('snorklings.edit', $snorkling->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('snorklings.destroy', $snorkling->id) }}" method="POST" style="display: inline-block;">
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