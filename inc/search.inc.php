
    <!-- SEARCH -->

    
    <div style="padding-top: 130px;" class="row login-form">
        <div class="col-md-8 offset-md-2">
            <!-- <h2 class="text-center form-heading">Booking Form</h2> -->
            <form class="custom-form" action="./?pg=q" method="POST">
                <p class="property-head first-word">Find Homes, Hotels And Guest Houses</p>
                <div style="margin-top: 70px; margin-bottom: 70px;" class="input-field">
                    <input class="form-control" type="text" placeholder="Enter your search query here" name="query">
                </div>
                <button style="font-size: 18px;margin: 40px auto; width: 150px; display: block; border-radius: 30px;" class="btn my-btn mt-2" id="submit-button" href="#">
                    SEARCH
                </button>

                <p style="font-weight: bold;">Filters : </p>
                <p>Efie Type</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" value="hotel" id="hotel">
                    <label class="form-check-label" for="hotel">Hotel</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" value="home" id="home">
                    <label class="form-check-label" for="home">Home</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" value="guest-house" id="guest-house">
                    <label class="form-check-label" for="guest-house">Guest House</label>
                </div>

                <p>Region</p>
                <div class="form-check">
                    <input name="location[]" class="form-check-input" type="checkbox" value="greater-accra" id="greater-accra">
                    <label class="form-check-label" for="greater-accra">Greater Accra Region</label>
                </div>
                <div class="form-check">
                    <input name="location[]" class="form-check-input" type="checkbox" value="ashanti" id="ashanti">
                    <label class="form-check-label" for="ashanti">Ashanti Region</label>
                </div>
                <div class="form-check">
                    <input name="location[]" class="form-check-input" type="checkbox" value="volta" id="volta">
                    <label class="form-check-label" for="volta">Volta Region</label>
                </div>
                <div class="form-check">
                    <input name="location[]" class="form-check-input" type="checkbox" value="central" id="central">
                    <label class="form-check-label" for="central">Central Region</label>
                </div>
                <div class="form-check">
                    <input name="location[]" class="form-check-input" type="checkbox" value="eastern" id="eastern">
                    <label class="form-check-label" for="eastern">Eastern Region</label>
                </div>
                <div class="form-check">
                    <input name="location[]" class="form-check-input" type="checkbox" value="brong-ahafo" id="brong-ahafo">
                    <label class="form-check-label" for="brong-ahafo">Brong Ahafo Region</label>
                </div>
                <div class="form-check">
                    <input name="location[]" class="form-check-input" type="checkbox" value="western" id="western">
                    <label class="form-check-label" for="western">Western Region</label>
                </div>
                <div class="form-check">
                    <input name="location[]" class="form-check-input" type="checkbox" value="northern" id="northern">
                    <label class="form-check-label" for="northern">Northern Region</label>
                </div>
                <div class="form-check">
                    <input name="location[]" class="form-check-input" type="checkbox" value="upper-east" id="upper-east">
                    <label class="form-check-label" for="upper-east">Upper East Region</label>
                </div>
                <div class="form-check">
                    <input name="location[]" class="form-check-input" type="checkbox" value="upper-west" id="upper-west">
                    <label class="form-check-label" for="upper-west">Upper West Region</label>
                </div>
                <input type="hidden" name="search">
            </form>
        </div>
    </div>

    <!-- SEARCH END-->