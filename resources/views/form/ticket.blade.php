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
                <select class="nc_select" id="ticket_destination">
                    <option selected disabled value="">Choose Destination</option>
                    <option value="gili">Gili (Wonderlast)</option>
                    <option value="sanur">Sanur (Semabu)</option>
                    <option value="lombok">Lombok (Wonderlast)</option>
                </select>
            </div>
            <div class="form_colum">
                 <input type="date" placeholder="Date" id="ticket_date" >
            </div>
        </div>
        <div class="form-row">
            <div class="form_colum">
                <select class="nc_select" id="ticket_time">
                    <option selected disabled value="">Choose Departure Time</option>
                </select>
               </div>
        </div>
          <div class="form-row">
                <div class="form_colum">
                    <p class="text-left">Note: You have to arrive 30 minutes before departure time.</p>
                </div>
          </div>
         <div class="form-row">
                <div class="form_btn">
                    <a href="#" class="btn_1">Book Now</a>
                </div>
           </div>
    </form>
</div>