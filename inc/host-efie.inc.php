
    <!-- HOST -->

    <div style= "padding-top: 120px;" class="row login-form">
        <div class="col-md-6 offset-md-3">
            <p class="property-head first-word wow fadeInUp" data-wow-delay="0.3s">Have An Efie To Host?</p>
            <p class="wow fadeInUp" data-wow-delay="0.5s" style="text-align: justify; margin-bottom: 40px; font-size: 18px;">
                Fill the form below with the details of the 
                particular Efie you want to host. To make transactions easy make
                sure you input accurate information about the Efie
            </p>
            <form class="custom-form wow fadeIn" data-wow-delay="0.8s" action='?pg=action' method='POST'>

                <h5>1. What type of place is it ?</h5>
                
                <p style="font-weight: bold;">Choose Efie type</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" required="" value="hotel" id="hotel">
                    <label class="form-check-label" for="hotel">Hotel</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" required="" value="home" id="home">
                    <label class="form-check-label" for="home">Home</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" required="" value="guest-house" id="guest-house">
                    <label class="form-check-label" for="guest-house">Guest House</label>
                </div>

                <p style="font-weight: bold; margin-top: 20px;">What will the guests have?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="space" value="entire-place" id="entire-place">
                    <label class="form-check-label" for="entire-place">Entire place</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="space" value="private-room" id="private-room">
                    <label class="form-check-label" for="private-room">Private room</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="space" value="shared-room" id="shared-room">
                    <label class="form-check-label" for="shared-room">Shared room</label>
                </div>
                <!-- <div class="form-group"><input class="form-control" type="text" placeholder="Name"></div> -->


                <h5 style="margin-top: 30px;">2. How many guests can stay ?</h5>

                <p style="font-weight: bold; margin-top: 20px;">Total number of guests</p>
                <div style="margin-top: -8px;" class="form-check">
                    <select class="form-check-input" name="numGuest">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="Above 10">Above 10</option>
                    </select>
                </div> 


                <p style="font-weight: bold;">Bedrooms for guests</p>
                <div style="margin-top: -8px;" class="form-check">
                    <select class="form-check-input" name="numRoom">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="Above 10">Above 10</option>
                    </select>
                </div>

                <p style="font-weight: bold;">Beds for guests</p>
                <div style="margin-top: -8px;" class="form-check">
                    <select class="form-check-input" name="numBed">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="Above 10">Above 10</option>
                    </select>
                </div>
                             
                <h5 style="margin-top: 30px;">3. Where's your place located ?</h5>
                <p style="font-weight: bold;">Region</p>
                <div style="margin-top: -8px;" class="form-check">
                    <select class="form-check-input" name="region" required="">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="greater-accra">Greater Accra Region</option>
                        <option value="ashanti">Ashanti Region</option>
                        <option value="volta">Volta Region</option>
                        <option value="central">Central Region</option>
                        <option value="eastern">Eastern Region</option>
                        <option value="brong-ahafo">Brong-Ahafo Region</option>
                        <option value="western">Western Region</option>
                        <option value="northern">Northern Region</option>
                        <option value="upper-east">Upper-East Region</option>
                        <option value="upper-west">Upper-West Region</option>
                    </select>
                </div>

                <p style="font-weight: bold;">Name of city / town</p>  
                <div class="form-check">
                    <div class="form-group"><input class="form-control" type="text" placeholder="City / Town name" name="city" required=""></div>
                </div>              

                <p style="font-weight: bold;">Area</p>  
                <div class="form-check">
                    <div class="form-group"><input class="form-control" type="text" placeholder="Area" name="area" required=""></div>
                </div> 
                <h5 style="margin-top: 30px;">4. Amenities ?</h5>
                <p style="font-weight: bold;">Accessible Amenities</p>
                <div class="form-check">
                    <input class="form-check-input" name="amenities[]" type="checkbox" value="T" id="tv">
                    <label class="form-check-label" for="tv">Television</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="amenities[]" type="checkbox" value="P" id="telephone">
                    <label class="form-check-label" for="telephone">Telephone</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="amenities[]" type="checkbox" value="Y" id="wifi">
                    <label class="form-check-label" for="wifi">Wi-Fi</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="amenities[]" type="checkbox" value="K" id="kitchen">
                    <label class="form-check-label" for="kitchen">Kitchen</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="amenities[]" type="checkbox" value="C" id="computer">
                    <label class="form-check-label" for="computer">Computer</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="amenities[]" type="checkbox" value="A" id="ac">
                    <label class="form-check-label" for="ac">Air Conditioner</label>
                </div>

                <h5 style="margin-top: 30px;">5. Show off your Efie </h5>

                <p style="font-weight: bold;">Upload cover picture of your Efie</p>
                <div class="form-check">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>File</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload an image">
                        </div>
                    </div>
                </div>

                <p style="font-weight: bold;">Upload other pictures of your Efie</p>
                <div class="form-check">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Files</span>
                            <input type="file" multiple>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload images">
                        </div>
                    </div>
                </div>

                <h5 style="margin-top: 30px;">6. Describe your Efie </h5>

                <p style="font-weight: bold;">Name</p>  
                <div class="form-check">
                    <div class="form-group"><input class="form-control" type="text" placeholder="Name" name="name" required=""></div>
                </div> 

                <p style="font-weight: bold;"> Give a short desription of the Efie</p>
                <div class="form-check">
                    <textarea id="description" class="materialize-textarea" placeholder="Description" name="description" required=""></textarea>
                </div>

                <h5 style="margin-top: 30px;">7. For sale or rent ? </h5>
                <p style="font-weight: bold;">Do you want to sell or rent your Efie?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flag" required="" value="s" id="sell">
                    <label class="form-check-label" for="sell">Sell</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flag" required="" value="r" id="rent">
                    <label class="form-check-label" for="rent">Rent</label>
                </div>

                <h5 style="margin-top: 30px;">8. Price of your Efie </h5>
                <p style="font-weight: bold;">Name the price of your Efie in <span style="text-decoration: underline;">cedis</span></p>

                <div style="margin-top: 15px; margin-bottom: 40px;" class="form-check">
                    <input class="form-control" type="number" placeholder="Price" name="price" required="">
                </div>

                <p style="font-weight: bold;">Per </p>
                <div style="margin-top: -8px;" class="form-check">
                    <select class="form-check-input" name="per" required="">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="day">Day</option>
                        <option value="month">Month</option>
                        <option value="year">Year</option>
                        <option value="year">None(choose if for sale)</option>
                    </select>
                </div>

                <button style="margin: 40px auto; width: 150px; display: block;" class="btn my-btn mt-2" id="submit-button" type="submit">
                    UPLOAD AD
                </button>
                <input type="hidden" name="formtype" value="addefie">
            </form>
        </div>
    </div>

    <div id="dtBox"></div>
    <!-- HOST END -->