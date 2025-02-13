<div class="booking_form">
    <form action="#">
        <div class="form-row">
              <div class="form_colum">
                  <input type="text" placeholder="Your Name" >
             </div>
                <div class="form_colum">
                     <div class="input-group">
                        <select class="nc_select country-code">
                            <option data-countryCode="ID" value="+62" Selected>Indonesia (+62)</option>
                            <option data-countryCode="US" value="+1">USA (+1)</option>
                            <!-- Tambahkan kode negara lain di sini -->
                         </select>
                           <input type="number" placeholder="Phone Number"  >
                    </div>
               </div>
        </div>
        <div class="form-row">
           <div class="form_colum">
              <select class="nc_select" id="tour_type">
                <option selected disabled value="">Type Of Vehicle</option>
                <option value="car">Car</option>
                <option value="motorcycle">Motorcycle</option>
              </select>
            </div>
             <div class="form_colum">
                <input type="number" placeholder="Number Of People" id="tour_person">
             </div>
        </div>
         <div class="form-row">
             <div class="form_colum">
                 <select class="nc_select" id="tour_destination">
                    <option selected disabled value="">Choose Trip</option>
                    <option value="west">West Trip</option>
                    <option value="east">East Trip</option>
                     <option value="mix">Mix Tour</option>
                </select>
            </div>
         </div>
        <div class="form-row">
            <div class="form_btn">
                 <a href="#" class="btn_1">Book Now</a>
            </div>
        </div>
    </form>
</div>