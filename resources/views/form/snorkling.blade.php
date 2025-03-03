<div class="booking_form">
    <form action="{{ route('snorkling.submit') }}" method="POST">
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
                <select class="nc_select" name="select_package" id="select_package" required>
                    <option value="" selected disabled>Select Package</option>
                    @foreach($dataSnorklings as $dataSnorkling)
                    <option value="{{ $dataSnorkling->type_package }}">{{ $dataSnorkling->type_package }}</option>
                    @endforeach
                </select>
            </div>
             <div class="form_colum">
                <select class="nc_select" name="destination" id="destination" required>
                    <option value="" selected disabled>Destination</option>
                </select>
            </div>
        </div>
        <div class="form-row">
             <div class="form_colum">
                <input type="number" name="person" placeholder="People" required>
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
        $('#select_package').change(function() {
            var package = $(this).val();
            $('#destination').empty();
            $('#destination').append('<option value="" selected disabled>Destination</option>');

            if (package) {
                $.ajax({
                    url: "{{ route('get.destinations') }}",
                    type: "GET",
                    data: {
                        package: package
                    },
                    dataType: "json",
                    success: function(data) {
            if (Array.isArray(data)) {
                $.each(data, function(key, value) {
                    $('#destination').append('<option value="' + value + '">' + value + '</option>');
                });
            } else {
                console.error("Data yang diterima bukan array:", data);
            }

            // Coba update atau refresh nice-select
            $('#destination').niceSelect('update'); // Atau $('#destination').niceSelect('refresh');
        },  
                    error: function(xhr, status, error) {
                        console.error("AJAX error: " + status + " - " + error);
                        console.log(xhr.responseText); // Tambahkan ini untuk melihat response dari server
                    }
                });
            }
        });
    });
</script>