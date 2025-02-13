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
               <input type="date" id="rent_date" placeholder="Rent Date"  >
            </div>
            <div class="form_colum">
                <select class="nc_select" id="motor_type">
                   <option value="" selected disabled>Motor Type</option>
                    <option value="scoopy">Scoopy <img src="{{asset('assets/img/scoopy.png')}}" alt="scoopy"></option>
                     <option value="vario">Vario  <img src="{{asset('assets/img/vario.png')}}" alt="vario"></option>
                     <option value="nmax">Nmax  <img src="{{asset('assets/img/nmax.png')}}" alt="nmax"></option>
                     <option value="pcx">PCX  <img src="{{asset('assets/img/pcx.png')}}" alt="pcx"></option>
                     <option value="adv">ADV  <img src="{{asset('assets/img/adv.png')}}" alt="adv"></option>
                </select>
            </div>
             <div class="form_colum">
                <input type="number" placeholder="Rent Days" id="rent_days"  >
            </div>
        </div>
          <div class="form-row">
            <div class="form_btn">
                <a href="#" class="btn_1">Book Now</a>
            </div>
        </div>
    </form>
</div>