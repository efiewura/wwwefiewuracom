<?php session_start();

$pass = $_POST['pass'];
$usern = $_POST['usern'];
//validate();
$_SESSION['id'] = /*$id*/1;

header('location: ./');
 ?>