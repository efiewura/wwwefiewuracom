<?php 
$user = new user($_SESSION['id']);
$user->setsession_ID('NULL');
session_destroy();

header('location: ./');
 ?>