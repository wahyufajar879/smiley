@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Tambah Pemesanan Trip</h4>
    </div>
    <div class="pd-20">
        <form action="{{ route('trips.store') }}" method="POST">
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
                <label>Type Vehicle</label>
                <select class="form-control" name="type_vehicle" required>
                    <option value="">Pilih Type Vehicle</option>
                    @foreach($typeVehicles as $typeVehicle)
                    <option value="{{ $typeVehicle }}" {{ old('type_vehicle') == $typeVehicle ? 'selected' : '' }}>{{ $typeVehicle }}</option>
                    @endforeach
                </select>
                @error('type_vehicle')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>People</label>
                <input class="form-control" type="number" name="people" value="{{ old('people') }}" required>
                @error('people')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Destination</label>
                <select class="form-control" name="destination" id="destination" required>
                    <option value="">Pilih Destination</option>
                    @foreach($destinations as $destination)
                    <option value="{{ $destination }}" {{ old('destination') == $destination ? 'selected' : '' }}>{{ $destination }}</option>
                    @endforeach
                </select>
                @error('destination')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Place To Go</label>
                <input class="form-control" type="text" name="place_to_go" id="place_to_go" readonly>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('trips.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#destination').change(function() {
            var destination = $(this).val();

            if (destination) {
                $.ajax({
                    url: "{{ route('get.place-to-go') }}",
                    type: "GET",
                    data: {
                        destination: destination
                    },
                    dataType: "json",
                    success: function(data) {
                        $('#place_to_go').val(data);
                    }
                });
            } else {
                $('#place_to_go').val(''); // Kosongkan jika destination tidak dipilih
            }
        });
    });
</script>
@endsection