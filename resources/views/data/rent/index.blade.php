@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Rent Motorbike</h4>
        <a href="{{ route('data_rent_motorbikes.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th>Category Motorbike</th>
                    <th>Type Motorbike</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataRentMotorbikes as $dataRentMotorbike)
                <tr>
                    <td>{{ $dataRentMotorbike->category_motorbike }}</td>
                    <td>{{ $dataRentMotorbike->type_motorbike }}</td>
                    <td>Rp. {{ number_format($dataRentMotorbike->price, 0, ',', '.') }}</td> <!-- Format harga -->
                    <td>
                        <a href="{{ route('data_rent_motorbikes.show', $dataRentMotorbike->id) }}" class="btn btn-sm btn-info">Lihat</a>
                        <a href="{{ route('data_rent_motorbikes.edit', $dataRentMotorbike->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('data_rent_motorbikes.destroy', $dataRentMotorbike->id) }}" method="POST" style="display: inline-block;">
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