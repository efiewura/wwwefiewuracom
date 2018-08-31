
    <!-- BOOK -->
    <?php $space = new space($_GET['id']); ?>

    <div style="padding-top: 60px;" class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="motto">
                    <span class="first-word">Found a <?php echo $space->gettype(); ?>?</span> Start the booking process here.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="card-shadow">
                    <img class="img-fluid" src="assets/img/21.jpg" alt="placeholder">
                    <div class="property-details">
                        <p>Name : <?php echo $space->getname(); ?></p>
                        <p>Type : <?php echo $space->gettype(); ?></p>
                        <p>Price : <?php echo $space->getprice(); ?></p>     
                    </div>
                </div>
            </div>

            <div class="col-md-6 offset-md-1">
                <form class="custom-form" action="./?pg=action" method="POST">
                        <p class="property-head first-word">Booking Form</p>
                    <div style="margin-top: 15px;" class="form-group">
                        <input class="form-control" type="text" placeholder="Name" value="<?php echo ($logged)? $user->getsurname()." ".$user->getfirstname()." ".$user->getothername():''; ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Email" value="<?php echo ($logged)? $user->getemail():''; ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Phone Number" value="<?php echo ($logged)? $user->getemail():''; ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Move-in Date" data-field="date" readonly >
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Move-out Date" data-field="date" readonly>
                    </div>
    
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Move-in Time" data-field="time" readonly>
                    </div>
    
                    <button style="margin: 40px auto; width: 150px; display: block;" class="btn my-btn mt-2" id="submit-button" href="#">
                        BOOK
                    </button>
                    <input type="hidden" name="space" value="<?php echo $space->getID(); ?>">
                    <input type="hidden" name="formtype" value="book">
                </form>
            </div>
        </div>
    </div>

    <div id="dtBox"></div>
    <!-- BOOK END -->

