<?php 


class user extends Model{


	private $surname;
	private $firstname;
	private $othername;
	private $date_of_birth;
	private $gender;
	private $number;
	private $email;
	private $city;
	private $passwrod;
	private $session_ID;
	public $table = "user";


	public function __construct($id){
		Model::__construct($id);
		if($id != 0){
			$this->surname();
			$this->firstname();
			$this->othername();
			$this->date_of_birth();
			$this->gender();
			$this->number();
			$this->email();
			$this->city();
			$this->password();
			$this->session_ID();

		}
	}

	public function setsurname($surname){
			$this->update("surname = '$surname'");
			$this->surname();
		}


	private function surname(){
			$this->surname = $this->read('surname');
		}


	public function getsurname(){
			return $this->surname;
		}


	public function setfirstname($firstname){
			$this->update("firstname = '$firstname'");
			$this->firstname();
		}


	private function firstname(){
			$this->firstname = $this->read('firstname');
		}


	public function getfirstname(){
			return $this->firstname;
		}

	public function setothername($othername){
			$this->update("othername = '$othername'");
			$this->othername();
		}


	private function othername(){
			$this->othername = $this->read('othername');
		}


	public function getothername(){
			return $this->othername;
		}

	public function setdate_of_birth($date_of_birth){
			$this->update("date_of_birth = '$date_of_birth'");
			$this->date_of_birth();
		}


	private function date_of_birth(){
			$this->date_of_birth = $this->read('date_of_birth');
		}


	public function getdate_of_birth(){
			return $this->date_of_birth;
		}

	public function setgender($gender){
			$this->update("gender = '$gender'");
			$this->gender();
		}


	private function gender(){
			$this->gender = $this->read('gender');
		}


	public function getgender(){
			return $this->gender;
		}

	public function setpassword($password){
			$this->update("password = '$password'");
			$this->password();
		}

	private function password(){
			$this->password = $this->read('password');
		}


	public function getpassword(){
			return $this->password;
		}

	public function setsession_ID($session_ID){
			if($session_ID=='NULL')
				$this->update("session_ID = NULL");
			else
				$this->update("session_ID = '$session_ID'");
			$this->session_ID();
		}

	private function session_ID(){
			$this->session_ID = $this->read('session_ID');
		}


	public function getsession_ID(){
			return $this->session_ID;
		}

	public function setnumber($number){
			$this->update("number = '$number'");
			$this->number();
		}


	private function number(){
			$this->number = $this->read('number');
		}


	public function getnumber(){
			return $this->number;
		}

	public function setemail($email){
			$this->update("email = '$email'");
			$this->email();
		}


	private function email(){
			$this->email = $this->read('email');
		}


	public function getemail(){
			return $this->email;
		}

	public function setcity($city){
			$this->update("city = '$city'");
			$this->city();
		}

	private function city(){
			$this->city = $this->read('city');
		}

	public function getcity(){
			return $this->city;
		}

	public function getusers()
	{
		$memarr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT id
				FROM `user`";
		$result = $con->query($sql);
		
			while($row = $result->fetch_assoc()){
			$user = new user($row['id']);
			array_push($memarr , $user);
		   }
		   return $memarr;
	}

	public function getspaces()
	{
		$arr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT id 
				FROM `space` 
				WHERE `space`.`holder` = ".$this->getID();
		$result = $con->query($sql);
		
			while($row = $result->fetch_assoc()){
			$space = new space($row['id']);
			array_push($arr , $space);
		   }
		   return $arr;
	}

	public function getspacesbookedAndPending()
	{
		$arr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `customer_space`.`id`
				FROM `space` , `customer_space`
				WHERE `space`.`id` = `customer_space`.`space_id`
				AND `customer_space`.`approved` = 0
				AND `space`.`holder` = ".$this->getID();
		$result = $con->query($sql);
		
		while($row = $result->fetch_assoc()){
			$space = new customer_space($row['id']);
			array_push($arr , $space);
		   }
		   return $arr;
	}

public function getspacesbookedAndApproved()
	{
		$arr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `customer_space`.`id`
				FROM `space` , `customer_space`
				WHERE `space`.`id` = `customer_space`.`space_id`
				AND `customer_space`.`approved` = 1
				AND `space`.`holder` = ".$this->getID();
		$result = $con->query($sql);
		
		while($row = $result->fetch_assoc()){
			$space = new customer_space($row['id']);
			array_push($arr , $space);
		   }
		   return $arr;
	}

public function getspacesbooked()
	{
		$arr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `customer_space`.`id`
				FROM `space` , `customer_space`
				WHERE `space`.`id` = `customer_space`.`space_id`
				AND `space`.`holder` = ".$this->getID();
		$result = $con->query($sql);
		
		while($row = $result->fetch_assoc()){
			$space = new customer_space($row['id']);
			array_push($arr , $space);
		   }
		   return $arr;
	}

	public function checkuser($email)
	{
		$memarr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT id
				FROM `user`
				WHERE email = '$email'";
		$result = $con->query($sql);
			while($row = $result->fetch_assoc()){
			if(isset($row['id']))
				return True;
			else
				return False;
		   }
	}

	public function checkAd($space_id)
	{
		$memarr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `customer_space`.`id`
				FROM `space` , `customer_space`
				WHERE `customer_space`.`availability` = 1
				AND `space`.`id` = `customer_space`.`space_id`
				AND `space`.`id` = '$space_id'
				AND `space`.`holder` = ".$this->getID();
		$result = $con->query($sql);

			while($row = $result->fetch_assoc()){
			if(isset($row['id']))
				return True;
			else
				return False;
		   }
	}

	public function checkPending($space_id)
	{
		$memarr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `customer_space`.`id`
				FROM `space` , `customer_space`
				WHERE `customer_space`.`approved` = 1
				AND `space`.`id` = `customer_space`.`space_id`
				AND `space`.`id` = '$space_id'
				AND `space`.`holder` = ".$this->getID();
		$result = $con->query($sql);
			while($row = $result->fetch_assoc()){
			if(isset($row['id']))
				return True;
			else
				return False;
		   }
	}

	public function checkpass($email , $pass)
	{
		$memarr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT id
				FROM `user`
				WHERE email = '$email'
				AND password = '$pass'";
		$result = $con->query($sql);
			while($row = $result->fetch_assoc()){
			if(isset($row['id']))
				return $row['id'];
			else
				return False;
		   }
	}

}
?>