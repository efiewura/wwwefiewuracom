<?php 
$var = $_POST['formtype'];
switch ($var) {
	case 'addefie':
		$name = $_POST['name'];
		$city = $_POST['city'];
		$type = $_POST['type'];
		$price = $_POST['price'];
		$flag = $_POST['flag'];
		$desc = $_POST['description'];
		$amenities = (isset($_POST['amenities']))? implode('-',$_POST['amenities']):"";
		$location = $_POST['area'].', '.$_POST['region'];
		$space = (isset($_POST['space']))? $_POST['space']:"";
		$numGuest = (isset($_POST['numGuest']))? $_POST['numGuest']:"";
		$numRoom = (isset($_POST['numRoom']))? $_POST['numRoom']:"";
		$numBed = (isset($_POST['numBed']))? $_POST['numBed']:"";
		$per = (isset($_POST['per']))? $_POST['per']:"";
		$desc = $space.'|'.$numGuest.'|'.$numRoom.'|'.$numBed.'|'.$desc.'|'.$per;
		$efie = new space(0);
		$efie->setholder($Uid);
		$efie->setname($name);
		$efie->settype($type);
		$efie->setlocation($location);
		$efie->setflag($flag);
		$efie->setprice($price);
		$efie->setcity($city);
		$efie->setamenities($amenities);
		$efie->setdescription($desc);
		header('location: ./?pg=dashboard');
		break;
	case 'addwspace':
		$name = (isset($_POST['name']))? $_POST['name']:"";
		$description = (isset($_POST['description']))? $_POST['description']:"";
		$city = $_POST['city'];
		$type = 'workspace';
		$price = $_POST['price'];
		$flag = $_POST['flag'];
		$location = $_POST['area'].', '.$_POST['region'];
		$per = (isset($_POST['per']))? $_POST['per']:"";
		$desc = $_POST['workspace-type'].'|'.$_POST['workspace-space'].'|'.$description.'|'.$per;
		$efie = new space(0);
		$efie->setholder($Uid);
		$efie->setname($name);
		$efie->settype($type);
		$efie->setlocation($location);
		$efie->setflag($flag);
		$efie->setprice($price);
		$efie->setcity($city);
		$efie->setdescription($desc);
		header('location: ./?pg=dashboard');

		break;
	case 'signup':
		/*print_r($_POST);*/
		$n = $_POST['n'];
			switch ($n) {
				case 'emailcheck':
					$email = $_POST['email'];
					if(user::checkuser($email))
						header('location: ./?pg=signup&n=email&msg=111');
					else
						$user = new user(0);
						$user->setemail($email);
						$user->unavail();
						$id = $user->getID();
						header('location: ./?pg=signup&n=Step-2&id='.$id);
					break;
				case 'details1':
					$name = $_POST['name'];
					$dob = $_POST['dob'];
					$gender = $_POST['gender'];
					$user = new user($_POST['id']);
					$user->setsurname($name[1]);
					$user->setfirstname($name[0]);
					$user->setothername($name[2]);
					$user->setdate_of_birth($dob);
					$user->setgender($gender);
					$id = $user->getID();
					header('location: ./?pg=signup&n=Step-3&id='.$id);
					break;
				case 'details2':
					$pass = $_POST['pass'];
					$cpass = $_POST['cpass'];
					if ($pass!=$cpass) {
						header('location: ./?pg=signup&n=Step-3&id='.$id.'&msg');
					}
					$user = new user($_POST['id']);
					$user->setpassword($pass);
					$user->avail();
					$id = $user->getID();
					header('location: ./?pg=log&id='.$id);
					break;
				default:
						header('location: ./?pg=signup');
					break;
			}
		break;
		case 'comment':
			$comment = new comment(0);
			$comment->setuser_id($user->getID());
			$comment->setcontent($_POST['content']); 
			$comment->setspace_id($_POST['space_id']); 
			//$comment->setlikes($_POST['likes']); 
			$comment->setdatetime($_POST['datetime']); 
					header('location: ./?pg=view&q='.$_POST['space']);
		break;
		case 'book':
			$cs = new customer_space(0);
			$cs->setuser_id($user->getID());
			 
					header('location: ./?pg=view&q='.$_POST['space']);
		break;
	
	default:
	header("location: ./");
		break;
}
 ?>