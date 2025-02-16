@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Tambah Pemesanan Rent Motorbike</h4>
    </div>
    <div class="pd-20">
        <form action="{{ route('rents.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" required>
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>No Phone</label>
                <input class="form-control" type="text" name="no_phone" value="{{ old('no_phone') }}" required>
                @error('no_phone')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Type Motorbike</label>
                <select class="form-control" name="type_motorbike" id="type_motorbike" required>
                    <option value="">Pilih Type Motorbike</option>
                    @foreach($typeMotorbikes as $typeMotorbike)
                    <option value="{{ $typeMotorbike }}" {{ old('type_motorbike') == $typeMotorbike ? 'selected' : '' }}>{{ $typeMotorbike }}</option>
                    @endforeach
                </select>
                @error('type_motorbike')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Date</label>
                <input class="form-control date-picker" type="date" name="date" value="{{ old('date') }}" required>
                @error('date')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Rent Day</label>
                <input class="form-control" type="number" name="rent_day" value="{{ old('rent_day') }}" required>
                @error('rent_day')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('rents.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection