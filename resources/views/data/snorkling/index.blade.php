@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Snorkling</h4>
        <a href="{{ route('data_snorklings.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th>Type Package</th>
                    <th>Destination</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataSnorklings as $dataSnorkling)
                <tr>
                    <td>{{ $dataSnorkling->type_package }}</td>
                    <td>{{ $dataSnorkling->destination }}</td>
                    <td>Rp. {{ number_format($dataSnorkling->price, 0, ',', '.') }}</td> <!-- Format harga -->
                    <td>
                        <a href="{{ route('data_snorklings.show', $dataSnorkling->id) }}" class="btn btn-sm btn-info">Lihat</a>
                        <a href="{{ route('data_snorklings.edit', $dataSnorkling->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('data_snorklings.destroy', $dataSnorkling->id) }}" method="POST" style="display: inline-block;">
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