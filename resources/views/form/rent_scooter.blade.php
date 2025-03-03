<div class="booking_form">
    <form action="{{ route('rent_scooter.submit') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form_colum">
                <input type="text" name="name" placeholder="Your Name" required>
            </div>
             <div class="form_colum">
                <div class="input-group">
                  
                      <input type="number"  name="no_phone" placeholder="Phone Number" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form_colum">
               <input type="date" name="date" id="rent_date" placeholder="Rent Date" required>
            </div>
            <div class="form_colum">
                <select class="nc_select" name="type_motorbike" id="motor_type" required>
                   <option value="" selected disabled>Motor Type</option>
                    @foreach($dataRentMotorbikes as $dataRentMotorbike)
                        <option value="{{ $dataRentMotorbike->type_motorbike }}">{{ $dataRentMotorbike->type_motorbike }}</option>
                    @endforeach
                </select>
            </div>
             <div class="form_colum">
                <input type="number" name="rent_day" placeholder="Rent Days" id="rent_days" required>
            </div>
        </div>
          <div class="form-row">
            <div class="form_btn">
                <button type="submit" class="btn_1">Book Now</button>
            </div>
        </div>
    </form>
</div>