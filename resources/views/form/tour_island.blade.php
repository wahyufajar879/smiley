<div class="booking_form">
    <form action="{{ route('trip.submit') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form_colum">
                <input type="text" name="name" placeholder="Your Name" required>
            </div>
            <div class="form_colum">
                <div class="input-group">
                    <input type="number" name="no_phone" placeholder="Phone Number" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form_colum">
                <select class="nc_select" name="type_vehicle" id="tour_type" required>
                    <option selected disabled value="">Type Of Vehicle</option>
                    @if(isset($typeVehicles))
                        @foreach($typeVehicles as $typeVehicle)
                            <option value="{{ $typeVehicle }}">{{ $typeVehicle }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form_colum">
                <input type="number" name="people" placeholder="Number Of People" id="tour_person" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form_colum">
                <select class="nc_select" name="destination" id="tour_destination" required>
                    <option selected disabled value="">Choose Trip</option>
                    @if(isset($tourDestinations))
                        @foreach($tourDestinations as $destination)
                            <option value="{{ $destination }}">{{ $destination }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form_colum">
                <input type="text" name="place_to_go" id="place_to_go" placeholder="Place To Go" readonly required>
            </div>
        </div>
        <div class="form-row">
            <div class="form_btn">
                <button type="submit" class="btn_1">Book Now</button>
            </div>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // $('.nc_select').niceSelect(); // Inisialisasi Nice Select

        $('#tour_destination').change(function() {
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
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX error: " + status + " - " + error);
                    }
                });
            } else {
                $('#place_to_go').val(''); // Kosongkan jika destination tidak dipilih
            }
        });
    });
</script>