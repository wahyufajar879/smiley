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
                <select class="nc_select" id="snorkling_package">
                    <option value="" selected disabled>Select Package</option>
                    <option value="sharing">Sharing</option>
                    <option value="private">Private</option>
                </select>
            </div>
             <div class="form_colum">
                <select class="nc_select" id="snorkling_person">
                    <option value="" selected disabled>Person</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                     <option value="6">6</option>
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