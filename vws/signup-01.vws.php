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
                <?php if(isset($_GET['msg'])){ ?>
                <div class="input-field">
                    Email Exits!!
                </div>
            <?php } ?>
                <div class="input-field">
                    <input class="form-control" type="email" required="" placeholder="Email" name="email">
                </div> 
                <div style="margin-top: 10px; margin-bottom: 30px;" class="form-check">
                    <input class="form-check-input" type="checkbox" required="" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        I hereby agree to the <a href="">Terms and Conditions</a> of EFIEWURA
                    </label>
                </div>
                <div>
                    <button style="display: block; margin: 20px auto;" class="btn my-btn mt-2" id="submit-button" type="submit">NEXT</button>
                </div>
                <input type="hidden" name="formtype" value="signup">
                <input type="hidden" name="n" value="emailcheck">
            </form>
        </div>
    </div>

    <!-- SIGN UP END -->

