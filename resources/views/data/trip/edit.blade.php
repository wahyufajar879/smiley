@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Edit Data Trip</h4>
    </div>
    <div class="pd-20">
        <form action="{{ route('data_trips.update', $dataTrip->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Type Vehicle</label>
                <input class="form-control" type="text" name="type_vehicle" value="{{ $dataTrip->type_vehicle }}" required>
                @error('type_vehicle')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Destination</label>
                <input class="form-control" type="text" name="destination" value="{{ $dataTrip->destination }}" required>
                @error('destination')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Place To Go</label>
                <input class="form-control" type="text" name="place_to_go" value="{{ $dataTrip->place_to_go }}" required>
                @error('place_to_go')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Price (Rupiah)</label>
                <input class="form-control" type="number" name="price" value="{{ $dataTrip->price }}" required>
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('data_trips.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection