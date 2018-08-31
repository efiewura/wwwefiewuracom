
    <!-- HOMES -->
    <div style="margin-top: 120px;" class="container-fluid">
        <?php  

       

        $arr = space::getspacesbytype('home', 0);

        if(!empty($arr)){ ?>
        <div class="row">
            <div style="margin-left: 58px; margin-bottom: 20px;">
                <p class="workspace-head"><span class="first-word">Homes</span> around Ghana</p>
                <p class="workspace-paragraph">Find yourself a home that suits your exact needs</p>
            </div>
            <div class="owl-carousel owl-theme"><?php 
    foreach ($arr as $val) {
       // echo json_encode($arr);
 ?>
                    <div class="slide-item">
                    <div class="item-image">
                        <img class="img-fluid" src="assets/img/20.jpg" alt="house">
                    </div>
                    <div class="item-content">
                        <div class="item-location"><?php echo $val->getlocation();  ?>&#9679<?php echo $val->getcity();  ?></div>
                        <div class="item-name"><?php echo $val->getname();  ?></div>
                        <div class="item-price">Ghc <?php echo $val->getprice()  ?>&#9679 <span class="transaction-type"><?php echo ($val->getflag()=='r')? 'RENT':'SALE' ?></span></div>
                        <a class="workspace-link" href="?pg=view&q=<?php  echo $val->getID(); ?>">View Efie</a>
                        
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    </div>  
    <!-- HOMES END -->

    <!-- HOTELS -->
    <div style="margin-top: 60px;" class="container-fluid">
    <?php  
       
$arr = space::getspacesbytype('hotel', 0);
        if(!empty($arr)){ ?>
        <div class="row">
            <div style="margin-left: 58px; margin-bottom: 20px;">
                <p class="workspace-head"><span class="first-word">Hotels</span> around Ghana</p>
                <p class="workspace-paragraph">Find an exquisite hotel room that suits your tastes</p>
            </div>
            <div class="owl-carousel owl-theme">
               <?php 
    foreach ($arr as $val) {
       // echo json_encode($arr);
 ?>
                    <div class="slide-item">
                    <div class="item-image">
                        <img class="img-fluid" src="assets/img/20.jpg" alt="house">
                    </div>
                    <div class="item-content">
                        <div class="item-location"><?php echo $val->getlocation();  ?>&#9679<?php echo $val->getcity();  ?></div>
                        <div class="item-name"><?php echo $val->getname();  ?></div>
                        <div class="item-price">Ghc <?php echo $val->getprice()  ?>&#9679 <span class="transaction-type"><?php echo ($val->getflag()=='r')? 'RENT':'SALE' ?></span></div>
                        <a class="workspace-link" href="?pg=view&q=<?php  echo $val->getID(); ?>">View Efie</a>
                        
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    </div>
    <!-- HOTELS END -->


    <!-- GUEST HOUSES -->
    <div style="margin-top: 60px;" class="container-fluid">
        <?php 
       

    $arr = space::getspacesbytype('guest-house', 0);
        if(!empty($arr)){ ?>
        <div class="row">
            <div style="margin-left: 58px; margin-bottom: 20px;">
                <p class="workspace-head"><span class="first-word">Guest Houses</span> around Ghana</p>
                <p class="workspace-paragraph">Find yourself a guest house that suits your exact needs</p>
            </div>
            <div class="owl-carousel owl-theme">
                <?php 
    foreach ($arr as $val) {
       // echo json_encode($arr);
 ?>
                    <div class="slide-item">
                    <div class="item-image">
                        <img class="img-fluid" src="assets/img/20.jpg" alt="house">
                    </div>
                    <div class="item-content">
                        <div class="item-location"><?php echo $val->getlocation();  ?>&#9679<?php echo $val->getcity();  ?></div>
                        <div class="item-name"><?php echo $val->getname();  ?></div>
                        <div class="item-price">Ghc <?php echo $val->getprice()  ?>&#9679 <span class="transaction-type"><?php echo ($val->getflag()=='r')? 'RENT':'SALE' ?></span></div>
                        <a class="workspace-link" href="?pg=view&q=<?php  echo $val->getID(); ?>">View Efie</a>
                        
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    </div>
    <!-- GUEST HOUSES END -->


    <!-- WORKSPACES -->
    <div style="margin-top: 60px;" class="container-fluid">
        <?php  
       
$arr = space::getspacesbytype('workspace', 0);
        if(!empty($arr)){ ?>
        <div class="row">
            <div style="margin-left: 58px; margin-bottom: 20px;">
                <p class="workspace-head"><span class="first-word">Workspaces</span> around Ghana</p>
                <p class="workspace-paragraph">Find yourself a workspace for your business</p>
            </div>
            <div class="owl-carousel owl-theme">
                <?php 
    foreach ($arr as $val) {
       // echo json_encode($arr);
 ?>
                    <div class="slide-item">
                    <div class="item-image">
                        <img class="img-fluid" src="assets/img/20.jpg" alt="house">
                    </div>
                    <div class="item-content">
                        <div class="item-location"><?php echo $val->getlocation();  ?>&#9679<?php echo $val->getcity();  ?></div>
                        <div class="item-name"><?php echo $val->getname();  ?></div>
                        <div class="item-price">Ghc <?php echo $val->getprice()  ?>&#9679 <span class="transaction-type"><?php echo ($val->getflag()=='r')? 'RENT':'SALE' ?></span></div>
                        <a class="workspace-link" href="?pg=view&q=<?php  echo $val->getID(); ?>">View Efie</a>
                        
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    </div>
    <!-- WORKSPACES END -->