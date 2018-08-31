<!-- DASHBOARD -->
    <div id="dashboard" class="container">
        <p class="property-head first-word">DASHBOARD</p>
        <div class="row">
            <!-- TRANSACTIONS -->
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <div style="text-align: center;" class="card-body">
                        <p><i class="fa fa-upload dash-icon"></i></p>
                        <div class="dash-text">
                            <p style="font-size: 20px;">Total Ads Uploaded</p>
                            <p style="font-size: 18px;"><?php echo sizeof($user->getspaces()); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <div style="text-align: center;" class="card-body">
                        <p><i class="fa fa-clock dash-icon"></i></p>
                        <div class="dash-text">
                            <p style="font-size: 20px;">Ads Pending</p>
                            <p style="font-size: 18px;"><?php echo sizeof($user->getspacesbookedAndPending()); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <div style="text-align: center;" class="card-body">
                        <p><i class="fa fa-users dash-icon"></i></p>
                        <div class="dash-text">
                            <p style="font-size: 20px;">Total Guests Hosted</p>
                            <p style="font-size: 18px;"><?php echo sizeof($user->getspacesbookedAndApproved()) ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TRANSACTIONS END -->
        </div>
        <p style="margin-top: 50px;" class="property-head first-word">CURRENT ADS</p>
          <?php  
       
$arr = $user->getspaces();
        if(!empty($arr)){ ?>
        <div class="row"> 
<?php 
    foreach ($arr as $val) {
       // echo json_encode($arr);
 ?>
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="assets/img/1.jpg" alt="Image 1">
                    <div class="card-body">
                        <div class="options">
                            <p><a class="options-link" href="#">Edit</a></p>
                            <p><a class="options-link" href="#">Delete</a></p>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Name: <?php echo $val->getname(); ?></li>
                        <li class="list-group-item">Type : <?php echo $val->gettype(); ?></li>
                        <li class="list-group-item">Uploaded : <?php echo $val->gettime_created(); ?></li>
                        <li class="list-group-item">Status : <?php echo ($user->checkAd($val->getID()))? (($user->checkPending($val->getID()))?  "Booked":"Pending"):"Not booked"; ?></li>
                        <li class="list-group-item">
                            <div style="text-align: center;" class="countdown">
                                <p class="countdown-nums" data-countdown="07/29/2018 01:12:32">
                                    <span class="number-days">00</span>&nbsp;<span style="font-size: 15px;">days</span> 
                                    <span class="number-hours">00</span>&nbsp;<span style="font-size: 15px;">hours</span>
                                    <span class="number-minutes">00</span>&nbsp;<span style="font-size: 15px;">minutes</span> 
                                    <span class="number-seconds">00</span>&nbsp;<span style="font-size: 15px;">seconds<br></span>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
<?php  } ?>
            </div>
<?php } ?>

</div>

    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive ">
                    <p style="margin-top: 50px;" class="property-head first-word">PREVIOUS GUESTS</p>
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Name Space</th>
                                <th scope="col">Check In</th>
                                <th scope="col">Check Out</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $arr = $user->getspacesbookedAndApproved(); 
                           foreach ($arr as $val) {
                                $cust = new user($val->getuser_id());
                                $space = new space($val->getuser_id());
                            ?> 
                            <tr>
                                <th scope="row">1</th>
                                <td><?php echo $cust->getfirstname()." ".$user->getsurname(); ?></td>
                                <td><?php echo $cust->getnumber(); ?></td>
                                <td><?php echo $space->getname(); ?></td>
                                <td><?php echo $val->getstart_date(); ?></td>
                                <td><?php echo $val->getend_date(); ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- DASHBOARD END -->
