<?php   $id = $_GET['q'];
        $val = new space($id);
        $holder = new user($val->getholder()); 
         if (!$logged) {
                        setcookie('IdofSpace', $_GET['q'], time() + (86400 * 30), "/");
                    }else{
                        if(isset($_COOKIE['IdofSpace']))
                                setcookie('IdofSpace', '', time() - 3600);
                    }?>

    <!-- WORKSPACE -->

    <section style="padding-top: 70px;" class="portfolio-block project">
        <div class="container">
            <div class="heading">
                <h2><span class="first-word">EFIE</span> <?php echo $val->getname(); ?> </h2>

            </div>
            <div class="image" style="background-image:url(&quot;assets/img/1.jpg&quot;);"></div>
            <div class="row">
                <div class="col-12 col-md-6 offset-md-1 info">
                    <div class="description">
                        <h3 class="first-word">Description</h3>
                        <p><?php //echo $val->getdescription(); ?></p>
                        <p>Lorem ipsum dapibus dolor non, malesuada mauris. Aliquam eleifend mauris non odio mattis auctor. Aenean sit amet elementum tellus, a facilisis ligula. Pellentesque ac vehicula mauris.</p>
                    </div>
                    <div style="display: flex; flex-direction: row; justify-content: space-between;margin-bottom: 30px;">
                        <div style="text-align: center;" class="type">
                            <h3 class="first-word">Type</h3>
                            <p style="font-weight: bold;"><?php echo $val->gettype(); ?></p>
                        </div>
                        <!-- 
                        <div style="text-align: center;" class="room">
                            <h3 class="first-word">Room(s)</h3>
                            <p style="font-weight: bold;">2</p>
                        </div>
                    -->
                        <div style="text-align: center;" class="price">
                            <h3 class="first-word">Price</h3>
                            <p style="font-weight: bold;">GHc <?php echo $val->getprice(); echo ($val->getflag()=='r')? 'per night':"";?></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 offset-md-1 meta">
                    <div class="tags">
                        <span style="font-weight: bold;" class="first-word">Tags</span>
                        <a href="#">Tema</a>
                        <a href="#">Greater Accra</a>
                        <a href="#">Hotel</a>
                        <span style="font-weight: bold; margin-top: 20px;" class="first-word">Holder (Efiewura) </span>
                        <span><?php echo $holder->getfirstname(); ?></span>
                        <span style="font-weight: bold; margin-top: 20px;" class="first-word">Date Uploaded</span>
                        <span><?php echo $val->gettime_created(); ?></span>
                    </div>
                </div>
                <hr style="width: 100%;height: 0.01rem; background-color:rgba(10, 10, 10, 0.10);">
                <p style="width: 100%; margin-top: 50px;" class="property-head first-word">Amenities</p>
                <div class="amenities col-sm-12 col-lg-12">
                    <?php $amens = explode('-', $val->getamenities());
                    foreach ($amens as $amen) { ?>
                    <div class="items">
                        <p><i class="fa fa-2x fa-tv"></i></p>
                        <p><?php getAmenity($amen); ?></p>
                    </div>
                <?php } ?>
                </div>
        </div>
    </section>

    <!-- WORKSPACE END -->


    <!-- COMMENT SECTION -->
    <div id="comment-section" class="container">
        <div class="row">
            <div class="col-xs-12">
                <p class="workspace-head first-word">Comments</p>
                <p style="font-size: 19px;">Let the public know how your stay went. Tell us about your likes,
                    dislikes, as well as any commendations and advice you may have for
                    the host or potential guests
                </p>
                <?php if ($logged) {
                    ?>
                <div id="comment-form">
                    <div class="comment-img">
                        <img class="user-profile-img img-responsive" src="assets/img/profile.png" alt="user-picture">
                    </div>      
                
                    <form style="flex-grow: 1;" action="./?pg=action" method="POST">
                        <div class="form-check">
                            <textarea style="height: 30px;" id="description" name="content" class="materialize-textarea comment-textarea" placeholder="Add a public comment..."></textarea>
                        </div>
                        <input type="submit" name="Add">
                        <input type="hidden" name="formtype" value="comment">
                        <input type="hidden" name="space" value="<?php echo $val->getID(); ?>">
                    </form>
                </div>
                    <?php
                }else{?>
               <div id="comment-form">      
                
                        <div class="form-check"> <div class="text-warning display-3 center"> <a class="text-warning" style="text-decoration: none !important;" href="?pg=login">LOGIN</a>!!
                        </div> to comment
                        </div>
                        
                </div>
               <?php }?>
                <div id="comments">
                   
                    <?php $comments = $val->getcomments(); ?>
                     <p style="font-weight: bold; font-size: 16px;">Public comments &#9679 <?php echo sizeof($comments); ?></p>
                    <?php
                    foreach ($comments as $comment) {
                        $commentUser = new user($comment->getuser_id());?>
                    <div class="comment-item">
                        <div class="comment-img">
                            <img class="user-profile-img img-responsive" src="assets/img/profile.png" alt="user-picture">
                        </div>
                        <div class="main-comment">
                            <div class="comment-username"><?php echo $commentUser->getsurname()." ".$commentUser->getfirstname()." ".$commentUser->getothername(); ?></div>
                            <div class="comment-date-time"><?php echo $comment->getdatetime();//do this in future ->May 25, 2018 @ 6:00pm ?></div>
                            <div class="comment-text">
                                <p><?php echo $comment->getcontent(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>


    <!-- COMMENT SECTION END -->

    <!-- Gallery -->
    <div style="margin-top: 70px;" class="photo-gallery">
        <div class="container">
            <p style="margin-bottom: 10px;" class="workspace-head"><span class="first-word">More</span> images</p>
            <p style="margin-bottom: 40px; text-align: left;font-size: 19px;">
                Click on image to view. You can click on left or right side of image 
                to view the previous or next image respectively
            </p>
            <div class="row photos">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 item">
                    <a href="assets/img/20.jpg" data-lightbox="photos">
                        <img class="img-fluid img-height" src="assets/img/20.jpg">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 item">
                    <a href="assets/img/18.jpg" data-lightbox="photos">
                        <img class="img-fluid img-height" src="assets/img/16.jpg">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 item">
                    <a href="assets/img/10.jpg" data-lightbox="photos">
                        <img class="img-fluid img-height" src="assets/img/10.jpg">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 item">
                    <a href="assets/img/1.jpg" data-lightbox="photos">
                        <img class="img-fluid img-height" src="assets/img/1.jpg">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 item">
                    <a href="assets/img/2.jpg" data-lightbox="photos">
                        <img class="img-fluid img-height" src="assets/img/2.jpg">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 item">
                    <a href="assets/img/3.jpg" data-lightbox="photos">
                        <img class="img-fluid img-height" src="assets/img/3.jpg">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery END -->

    <hr style="width: 100%;height: 0.01rem; background-color:rgba(10, 10, 10, 0.10);">

    <!-- BOOK -->
    <div class="container">
        <div style="margin-bottom: 60px;" class="row login-form">
            <div class="col-md-8 offset-md-2">
                <form>
                    <div id="btn-holder">
                        <a style="margin: 20px auto; width: 150px;" class="btn my-btn mt-2" id="host-submit-button" disabled href="?pg=profile">VIEW HOST</a>
                        <a style="margin: 20px auto; width: 150px;" class="btn my-btn mt-2" id="book-submit-button" href="?pg=book&id=<?php echo $val->getID();  ?>";>BOOK</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- BOOK END -->
