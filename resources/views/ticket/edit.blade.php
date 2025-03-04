@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Edit Pemesanan Ticket</h4>
    </div>
    <div class="pd-20">
        <form action="{{ route('tickets.update', $ticket->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="name" value="{{ $ticket->name }}" required>
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>No Phone</label>
                <input class="form-control" type="text" name="no_phone" value="{{ $ticket->no_phone }}" required>
                @error('no_phone')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Destination</label>
                <select class="form-control" name="destination" id="destination" required>
                    <option value="">Pilih Destination</option>
                    @foreach($destinations as $destination)
                    <option value="{{ $destination }}" {{ $ticket->destination == $destination ? 'selected' : '' }}>{{ $destination }}</option>
                    @endforeach
                </select>
                @error('destination')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Select Boat</label>
                <select class="form-control" name="select_boat" id="select_boat" required>
                    <option value="">Pilih Boat</option>
                </select>
                @error('select_boat')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

             <div class="form-group">
                <label>Tanggal</label>
                <input class="form-control date-picker" type="date" name="tanggal" value="{{ $ticket->tanggal }}" required>
                @error('tanggal')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Time</label>
                <select class="form-control" name="time" id="time" required>
                    <option value="">Pilih Time</option>
                </select>
                @error('time')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Person (Pax)</label>
                <input class="form-control" type="number" name="person" value="{{ $ticket->person }}" required>
                @error('person')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#destination').change(function() {
            var destination = $(this).val();
            $('#select_boat').empty();
            $('#select_boat').append('<option value="">Pilih Boat</option>');
            $('#time').empty();
             $('#time').append('<option value="">Pilih Time</option>');

            if (destination) {
                $.ajax({
                    url: "{{ route('get.boats') }}",
                    type: "GET",
                    data: {
                        destination: destination
                    },
                    dataType: "json",
                    success: function(data) {
                        $.each(data, function(key, value) {
                            $('#select_boat').append('<option value="' + value + '">' + value + '</option>');
                        });
                    }
                });
            }
        });

        $('#select_boat').change(function() {
            var destination = $('#destination').val();
            var boat = $(this).val();
            $('#time').empty();
            $('#time').append('<option value="">Pilih Time</option>');
            if (destination && boat) {
                $.ajax({
                    url: "{{ route('get.times') }}",
                    type: "GET",
                    data: {
                        destination: destination,
                        boat: boat
                    },
                    dataType: "json",
                    success: function(data) {
                        $.each(data, function(key, value) {
                            $('#time').append('<option value="' + value + '">' + value + '</option>');
                        });
                    }
                });
            }
        });

        // Inisialisasi select boat dan time saat halaman dimuat
        var initialDestination = $('#destination').val();
        var initialBoat = "{{ $ticket->select_boat }}";

        if (initialDestination) {
            // Load boats
            $.ajax({
                url: "{{ route('get.boats') }}",
                type: "GET",
                data: {
                    destination: initialDestination
                },
                dataType: "json",
                success: function(data) {
                    $('#select_boat').empty();
                    $('#select_boat').append('<option value="">Pilih Boat</option>');
                    $.each(data, function(key, value) {
                        var selected = (value == initialBoat) ? 'selected' : '';
                        $('#select_boat').append('<option value="' + value + '" ' + selected + '>' + value + '</option>');
                    });

                     // Load times setelah boat di load
                     var initialTime = "{{ $ticket->time }}";
                     loadTimes(initialDestination, initialBoat, initialTime);
                }
            });
        }

           // Function untuk load times dan set selected value
           function loadTimes(destination, boat, initialTime) {
            $.ajax({
                url: "{{ route('get.times') }}",
                type: "GET",
                data: {
                    destination: destination,
                    boat: boat
                },
                dataType: "json",
                success: function(data) {
                    $('#time').empty();
                    $('#time').append('<option value="">Pilih Time</option>');
                    $.each(data, function(key, value) {
                        var selected = (value == initialTime) ? 'selected' : '';
                        $('#time').append('<option value="' + value + '" ' + selected + '>' + value + '</option>');
                    });
                }
            });
        }

          $('#select_boat').change(function() {
             var destination = $('#destination').val();
            var boat = $(this).val();
            $('#time').empty();
            $('#time').append('<option value="">Pilih Time</option>');
            if (destination && boat) {
                $.ajax({
                    url: "{{ route('get.times') }}",
                    type: "GET",
                    data: {
                        destination: destination,
                        boat: boat
                    },
                    dataType: "json",
                    success: function(data) {
                        $.each(data, function(key, value) {
                            $('#time').append('<option value="' + value + '">' + value + '</option>');
                        });
                    }
                });
            }
        });
    });
</script>
@endsection