<div id="ticketForm" class="booking_form">
    <form action="{{ route('ticket.submit') }}" method="POST">
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
                <select class="nc_select" name="destination" id="destination" required>
                    <option selected disabled value="">Choose Destination</option>
                    @foreach($dataTickets as $dataTicket)
                    <option value="{{ $dataTicket->destination }}">{{ $dataTicket->destination }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form_colum">
                <select class="nc_select" name="select_boat" id="select_boat" required>
                    <option selected disabled value="">Choose Boat</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form_colum">
                <input type="date" name="tanggal" placeholder="Date" id="ticket_date" required>
            </div>
            <div class="form_colum">
                <select class="nc_select" name="time" id="time" required>
                    <option selected disabled value="">Choose Departure Time</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form_colum">
                <input type="number" name="person" placeholder="Jumlah Orang" required>
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
        // Inisialisasi nice-select hanya pada form ticket
        // $('#ticketForm .nc_select').niceSelect();

        // Menggunakan event delegation dan pastikan selector benar
        $(document).on('change', '#ticketForm #destination', function() {
            console.log('Destination changed!');
            var destination = $(this).val();
            console.log('Selected destination:', destination);

            // Kosongkan dan reset select boat
            $('#select_boat').empty();
            $('#select_boat').append('<option value="">Choose Boat</option>');
            $('#select_boat').niceSelect('update');

            // Kosongkan dan reset select time
            $('#time').empty();
            $('#time').append('<option value="">Choose Departure Time</option>');
            $('#time').niceSelect('update');

            if (destination) {
                // Ambil data boats
                $.ajax({
                    url: "{{ route('get.boats') }}",
                    type: "GET",
                    data: {
                        destination: destination
                    },
                    dataType: "json",
                    success: function(data) {
                        console.log("Data boats diterima dari server:", data);
                        if (Array.isArray(data)) {
                            $.each(data, function(key, value) {
                                $('#select_boat').append('<option value="' + value + '">' + value + '</option>');
                            });
                            $('#select_boat').niceSelect('update');
                        } else {
                            console.error("Data boats yang diterima bukan array:", data);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX error (getBoats): " + status + " - " + error);
                        console.log(xhr.responseText);
                    }
                });

                // Ambil data times
                $.ajax({
                    url: "{{ route('get.times') }}",
                    type: "GET",
                    data: {
                        destination: destination,
                    },
                    dataType: "json",
                    success: function(data) {
                        console.log("Data times diterima dari server:", data);
                        if (Array.isArray(data)) {
                            $.each(data, function(key, value) {
                                $('#time').append('<option value="' + value + '">' + value + '</option>');
                            });
                        } else {
                            console.error("Data times yang diterima bukan array:", data);
                        }
                        $('#time').niceSelect('update');
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX error (getTimes): " + status + " - " + error);
                        console.log(xhr.responseText);
                    }
                });
            }
        });
    });
</script>
