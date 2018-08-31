<?php 
                        if(isset($_COOKIE['IdofSpace']))
                                setcookie('IdofSpace', '', time() - 3600); ?>
    <div style="margin-top: 60px;" class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">
                    <p style="font-size: 35px;" class="workspace-head"><span class="first-word">Login</span> To EFIEWURA</p>
                    <form method="POST" action="?pg=log">
                        <div class="form-group">
                            <label class="text-secondary">Email</label>
                            <input class="form-control" type="text" required="" name="usern" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email" <?php echo (isset($_GET['email']))? 'value="'.$_GET['email'].'"':""; ?>>
                        </div>
                        <div class="form-group">
                            <label class="text-secondary">Password</label><?php if (isset($_GET['msg'])) { ?> <label class="text-danger">Wrong Password!!</label><?php } ?>
                        <input class="form-control" type="password" required="" name="pass"></div>
                        <button class="btn my-btn mt-2" type="submit">Log In</button></form>
                    <p class="mt-3 mb-0">
                        <a href="#" class="small" style="color: #00695C;">Forgot your email or password?</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end wow fadeIn" data-wow-delay="0.5s" id="bg-block" style="background: url(assets/img/login.jpg);background-size:cover;background-position:center center;"></div>
        </div>
    </div>
