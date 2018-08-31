 <!-- SIGNUP -->
<?php $user = new user($_GET['id']); ?>
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
                    <input class="form-control" type="text" required="" value="<?php echo $user->getemail(); ?>" disabled name="email">
                </div>
                <?php /*if(isset($_GET['msg'])){ ?>
                <div class="input-field">
                    Passwords should be more than 8!!
                </div>
                <?php } */?>
                <div class="input-field">
                    <input class="form-control" type="password" required="" placeholder="Password" name="pass">
                </div>
                <?php if(isset($_GET['msg'])){ ?>
                <div class="input-field">
                    Passwords does not match!!
                </div>
                <?php }?>
                <div class="input-field">
                    <input class="form-control" type="password" required="" placeholder="Confirm Password" name="cpass">
                </div>
                <div>
                    <button style="display: block; margin: 20px auto;" class="btn my-btn mt-2" id="submit-button" type="submit">DONE</button>
                </div>
                <input type="hidden" name="formtype" value="signup">
                <input type="hidden" name="n" value="details2">
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            </form>
        </div>
    </div>

    <!-- SIGN UP END -->

