@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Tambah Pemesanan Snorkling</h4>
    </div>
    <div class="pd-20">
        <form action="{{ route('snorklings.store') }}" method="POST">
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
                <label>Select Package</label>
                <select class="form-control" name="select_package" id="select_package" required>
                    <option value="">Pilih Package</option>
                    @foreach($packages as $package)
                    <option value="{{ $package }}" {{ old('select_package') == $package ? 'selected' : '' }}>{{ $package }}</option>
                    @endforeach
                </select>
                @error('select_package')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Destination</label>
                <select class="form-control" name="destination" id="destination" required>
                    <option value="">Pilih Destination</option>
                </select>
                @error('destination')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Person (Pax)</label>
                <input class="form-control" type="number" name="person" value="{{ old('person') }}" required>
                @error('person')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('snorklings.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#select_package').change(function() {
            var package = $(this).val();
            $('#destination').empty();
            $('#destination').append('<option value="">Pilih Destination</option>');

            if (package) {
                $.ajax({
                    url: "{{ route('get.destinations') }}",
                    type: "GET",
                    data: {
                        package: package
                    },
                    dataType: "json",
                    success: function(data) {
                        $.each(data, function(key, value) {
                            $('#destination').append('<option value="' + value + '">' + value + '</option>');
                        });
                    }
                });
            }
        });
    });
</script>
@endsection