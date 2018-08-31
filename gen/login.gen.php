<?php 
if (isset($_POST['pass'])) {
$pass = $_POST['pass'];
$usern = $_POST['usern'];
$bool = user::checkuser($usern);
if(!$bool){
	header('location: ./?pg=signup&email='.$usern);
}

$Id = user::checkpass($usern, $pass);

if(($Id==FALSE)&&$bool){
	header('location: ./?pg=login&msg=111&email='.$usern);
}

//validate();
}elseif(isset($_GET['id'])){
	$bool=true;
	$Id = $_GET['id'];

}else{

	header('location: ./');

}
if($bool){
if(isset($Id)){
$_SESSION['id'] = $Id;
$user = new user($Id);
$user->setsession_ID(session_id());
}
	
	$nextP = '?pg='.$prev;
	if ($prev=='view'&&isset($_COOKIE['IdofSpace']))
		$nextP = $nextP."&q=".$_COOKIE['IdofSpace'];

header('location: ./'.$nextP);
}
 ?>