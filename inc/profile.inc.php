
    <!-- USER PROFILE -->

    <div style="padding-top: 150px; padding-bottom: 100px;" class="container">
        <div class="row">
            <div class="col-xs-12 offset-xs-0 col-md-8 offset-md-2">
                <div class="profile">
                    <div class="profile-top">
                        <div class="profile-img">
                            <img class="img-fluid" src="assets/img/profile.png" alt="alfred's profile">
                        </div>
                        <div class="profile-username">
                            <p><?php echo $user->getsurname()." ".$user->getfirstname()." ".$user->getothername(); ?></p>
                        </div>
                        <div class="profile-occupation">
                            <p></p>
                        </div>
                    </div>
                    <div class="profile-bottom">
                        <div class="profile-content">
                            <div class="single-item">
                                <div class="item-left">Joined</div>
                                <div class="item-right"><?php echo $user->gettime_created(); ?></div>
                            </div>
                            <hr>
                            <div class="single-item">
                                <div class="item-left">City Of Residence</div>
                                <div class="item-right"><?php echo $user->getcity(); ?></div>
                            </div>
                            <hr>
                            <div class="single-item">
                                <div class="item-left">Successful Hostings</div>
                                <div class="item-right"><?php echo sizeof($user->getspacesbookedAndApproved()); ?></div>
                            </div>
                            <hr>
                            <div class="single-item">
                                <div class="item-left">Email</div>
                                <div class="item-right"><?php echo $user->getemail(); ?></div>
                            </div>
                            <hr>
                            <div class="single-item">
                                <div class="item-left">Contact</div>
                                <div class="item-right"><?php echo $user->getnumber(); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

