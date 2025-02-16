@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Tambah Data Ticket</h4>
    </div>
    <div class="pd-20">
        <form action="{{ route('data_tickets.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Type Fast Boot</label>
                <input class="form-control" type="text" name="type_fast_boot" value="{{ old('type_fast_boot') }}" required>
                @error('type_fast_boot')
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
                <label>Time</label>
                <input class="form-control" type="text" name="time" value="{{ old('time') }}" required>
                @error('time')
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
            <a href="{{ route('data_tickets.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection