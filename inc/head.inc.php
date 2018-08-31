	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efiewura - Home</title>
    
    <!-- CSS FILES -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<?php if($pg == 'efie'||$pg =='workspace'){ ?>
    <link rel="stylesheet" href="assets/css/DateTimePicker.css">
<?php } ?>
<?php if($pg != 'search'){ ?> 
    <link rel="stylesheet" href="assets/css/animate.min.css">
<?php } ?>
    <link rel="stylesheet" href="assets/css/image-card-materialize.css">
    <link rel="stylesheet" href="assets/css/image-card-materialize1.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
<?php if($pg == 'login' || $pg == 'signup'){ ?>
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
<?php }else if($pg != 'search' && $pg != 'efie' && $pg != 'workspace'){ ?>
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.css">
<?php } ?>
    <link rel="stylesheet" href="assets/css/styles.css">