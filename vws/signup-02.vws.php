 <!-- SIGNUP -->

    <div style="margin-bottom: 60px;" class="row login-form">
        <div class="col-md-6 offset-md-3">
            <p style="margin-top: 100px;" class="property-head wow fadeInUp" data-wow-delay="0.3s"><span class="first-word">Sign</span> Up to EFIEWURA</p>
            <div style="text-align: justify; font-size: 18px; margin-bottom: 50px;">
            <p class="wow fadeInUp" data-wow-delay="0.5s">
                Sign up to EFIEWURA so you can have access to more functionality and also, so that we 
                can connect with you.
            </p>
            <p class="wow fadeInUp" data-wow-delay="0.7s">Already have an account? Just <a id="login-link" href="?pg=login">login</a></p>
            </div>
            <form class="custom-form wow fadeIn" data-wow-delay="1.0s" action='?pg=action' method='POST'>
                <div class="input-field">
                    <input class="form-control" type="text" required="" placeholder="firstname" name="name[]">
                </div>
                <div class="input-field">
                    <input class="form-control" type="text" required="" placeholder="surname" name="name[]">
                </div>
                <div class="input-field">
                    <input class="form-control" type="text" placeholder="othername (optional)" name="name[]">
                </div>
                <p>Gender</p>
                <div class="form-check">
                    <input required="" class="form-check-input" type="radio" name="gender" value="Male" id="male">
                    <label class="form-check-label" for="male">Male</label>

                    <input required="" class="form-check-input" type="radio" name="gender" value="Female" id="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="input-field date">
                    <input class="form-control" type="text" required="" placeholder="Date of Birth(yyyy-mm-dd)" name="dob">
                </div>
                <div>
                    <button style="display: block; margin: 20px auto;" class="btn my-btn mt-2" id="submit-button" type="submit">CONTINUE</button>
                </div>
                <input type="hidden" name="formtype" value="signup">
                <input type="hidden" name="n" value="details1">
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            </form>
        </div>
    </div>

    <!-- SIGN UP END -->

