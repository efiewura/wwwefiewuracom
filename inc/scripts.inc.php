<!-- JS FILES -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/materialize.js"></script>
<?php if($pg=='efie'||$pg=='workspace'){ ?>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/DateTimePicker.js"></script>
<script src="assets/js/DateTimePicker-i18n.js"></script>
<?php } ?>
<script src="assets/js/main.js"></script>
<?php if($pg!='home'&&$pg!='q'){
		if($pg == 'login' || $pg == 'signup'){ ?>
<script src="assets/js/wow.min.js"></script>
<?php } ?>
<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.modal').modal();
<?php if($pg == 'login' || $pg == 'signup'){ ?>
            // Initialize WOW.js Scrolling Animations
            new WOW().init();
        <?php } ?>
        
     
  });
</script>
<?php }else{?>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/index.js"></script>
<?php } ?>
<script src="assets/js/validate.js" type="text/javascript"></script>
