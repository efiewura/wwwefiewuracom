<?php
//FUNCTIONS
include("./cls/functions.cls.php");

//MODEL CLASS
/*This class contains the basic 
 *functionalities for a table
 *ID , time_created , availability
 *variable table for extended table name.
 *
 */
include("./cls/lib.cls/model.lib.cls.php");

include("./cls/lib.cls/user.lib.cls.php");

include("./cls/lib.cls/space.lib.cls.php");

include("./cls/lib.cls/customer_space.lib.cls.php");

include("./cls/lib.cls/comment.lib.cls.php");

function getAmenity($value)
{
	switch ($value) {
    case 'T':
        echo 'Television';
        break;
    case 'P':
        echo 'Telephone';
        break;
    case 'Y':
        echo 'Wi-Fi';
        break;
    case 'K':
        echo 'Kitchen';
        break;
    case 'C':
        echo 'Computer';
        break;
    case 'A':
        echo 'Air Conditioner';
        break;
	} 
}


function escapeInputs($text){
	//reduce risk of injection
	$text = trim($text);
	$connection = $GLOBALS['con'];
	$text = mysqli_real_escape_string($connection,$text);
	return $text;
}

?>
