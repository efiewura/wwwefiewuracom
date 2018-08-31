<?php 
var_dump($_POST);
function escapeInputs($text){
	//reduce risk of injection
	$text = trim($text);
	$connection = $GLOBALS['con'];
	$text = mysqli_real_escape_string($connection,$text);
	return $text;
}


echo escapeInputs("Hello ")."world";
?>