   <!-- start banner -->
    <?php include 'inc/banner.inc.php' ?>
<!-- end banner -->

<?php if(!isset($_POST['search'])) {
    header('location: ./');
}
 $arr = array(); 
 foreach ($_POST as $key => $value) {
    if(empty($value))
        continue;
    if($key == 'query')
        continue;
     $arr[$key] = $value;
 }?>
    <!-- searched -->
    <div style="margin-top: 60px;" class="container-fluid">
        <?php  $arr = space::getspacesbyArr($arr);
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
    <?php }else{
        ?>
        <h3>No Results</h3>
        <?php
    } ?>
    </div>
    <!-- searched END -->