@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Tambah Data Snorkling</h4>
    </div>
    <div class="pd-20">
        <form action="{{ route('data_snorklings.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Type Package</label>
                <input class="form-control" type="text" name="type_package" value="{{ old('type_package') }}" required>
                @error('type_package')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Destination</label>
                <input class="form-control" type="text" name="destination" value="{{ old('destination') }}" required>
                @error('destination')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Price (Rupiah)</label>
                <input class="form-control" type="number" name="price" value="{{ old('price') }}" required>
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('data_snorklings.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection