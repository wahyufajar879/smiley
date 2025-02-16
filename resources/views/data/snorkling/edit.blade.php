@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Edit Data Snorkling</h4>
    </div>
    <div class="pd-20">
        <form action="{{ route('data_snorklings.update', $dataSnorkling->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Type Package</label>
                <input class="form-control" type="text" name="type_package" value="{{ $dataSnorkling->type_package }}" required>
                @error('type_package')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Destination</label>
                <input class="form-control" type="text" name="destination" value="{{ $dataSnorkling->destination }}" required>
                @error('destination')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Price (Rupiah)</label>
                <input class="form-control" type="number" name="price" value="{{ $dataSnorkling->price }}" required>
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