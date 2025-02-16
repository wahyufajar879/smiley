@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Edit Data Rent Motorbike</h4>
    </div>
    <div class="pd-20">
        <form action="{{ route('data_rent_motorbikes.update', $dataRentMotorbike->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Category Motorbike</label>
                <input class="form-control" type="text" name="category_motorbike" value="{{ $dataRentMotorbike->category_motorbike }}" required>
                @error('category_motorbike')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Type Motorbike</label>
                <input class="form-control" type="text" name="type_motorbike" value="{{ $dataRentMotorbike->type_motorbike }}" required>
                @error('type_motorbike')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Price (Rupiah)</label>
                <input class="form-control" type="number" name="price" value="{{ $dataRentMotorbike->price }}" required>
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('data_rent_motorbikes.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection