<?php 


class space extends Model{


	private $name;
	private $type;
	private $location;
	private $flag;
	private $price;
	private $holder;
	private $email;
	private $city;
	private $amenities;
	private $description;
	public $table = "space";


	public function __construct($id){
		Model::__construct($id);
		if($id != 0){
			$this->name();
			$this->type();
			$this->location();
			$this->flag();
			$this->price();
			$this->holder();
			$this->city();
			$this->amenities();
			$this->description();

		}
	}

	public function setname($name){
			$this->update("`name` = '$name'");
			$this->name();
		}


	private function name(){
			$this->name = $this->read('name');
		}


	public function getname(){
			return $this->name;
		}

	public function setdescription($description){
			$this->update("`description` = '$description'");
			$this->description();
		}

	private function description(){
			$this->description = $this->read('description');
		}


	public function getdescription(){
			return $this->description;
		}

	public function settype($type){
			$this->update("`type` = '$type'");
			$this->type();
		}


	private function type(){
			$this->type = $this->read('type');
		}


	public function gettype(){
			return $this->type;
		}

	public function setlocation($location){
			$this->update("`location` = '$location'");
			$this->location();
		}


	private function location(){
			$this->location = $this->read('location');
		}


	public function getlocation(){
			return $this->location;
		}

	public function setflag($flag){
			$this->update("`flag` = '$flag'");
			$this->flag();
		}


	private function flag(){
			$this->flag = $this->read('flag');
		}


	public function getflag(){
			return $this->flag;
		}

	public function setprice($price){
			$this->update("`price` = '$price'");
			$this->price();
		}


	private function price(){
			$this->price = $this->read('price');
		}


	public function getprice(){
			return $this->price;
		}

	public function setholder($holder){
			$this->update("`holder` = '$holder'");
			$this->holder();
		}


	private function holder(){
			$this->holder = $this->read('holder');
		}


	public function getholder(){
			return $this->holder;
		}

	public function setemail($email){
			$this->update("`email` = '$email'");
			$this->email();
		}


	private function email(){
			$this->email = $this->read('email');
		}


	public function getemail(){
			return $this->email;
		}

	public function setcity($city){
			$this->update("`city` = '$city'");
			$this->city();
		}

	private function city(){
			$this->city = $this->read('city');
		}

	public function getcity(){
			return $this->city;
		}

	public function setamenities($amenities){
			$this->update("`amenities` = '$amenities'");
			$this->amenities();
		}

	private function amenities(){
			$this->amenities = $this->read('amenities');
		}

	public function getamenities(){
			return $this->amenities;
		}
	public function getspaces()
	{
		$spacearr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `id` 
				FROM `space` 
				WHERE `availability` = 1";
		$result = $con->query($sql);
		
			while($row = $result->fetch_assoc()){
			$space = new space($row['id']);
			array_push($spacearr , $space);
		   }
		   return $spacearr;
	}

	public function getspacesbytype($type, $Uid)
	{
		$spacearr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `id` 
				FROM `space` 
				WHERE `availability` = 1
				AND `type` = '$type'";
				
		$sql = $sql.(($Uid==0)?"":"AND `holder` = '$Uid'");
		$result = $con->query($sql);

		
			while($row = $result->fetch_assoc()){
			$space = new space($row['id']);
			array_push($spacearr , $space);
		   }	
		   return $spacearr;
	}

	public function getspacesbyArr($arr)
	{
		$spacearr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `id` 
				FROM `space` 
				WHERE `availability` = 1";
				foreach ($arr as $key => $value) {
					if (is_array($value)) {
						$cnt = 0;
						$str = "";
						foreach ($value as $val) {
							$str = ($cnt==0)? $str."":$str." OR ";
							$str = $str.$key." LIKE '%$val%'";
							$cnt++;
						}
						// 	$str = substr($str,0,-1);
						$sql =$sql." AND ".$str;
						continue;
					}
					$sql = $sql." AND `".$key."` LIKE '%".$value."%'";
				}
				$result = $con->query($sql);
		
			while($row = $result->fetch_assoc()){
			$space = new space($row['id']);
			array_push($spacearr , $space);
		   }
		   return $spacearr;
	}

	public function getcomments()
	{
		$spacearr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `comments`.`id` 
				FROM `space`, `comments` 
				WHERE `space`.`id` = `comments`.`space_id`
				AND `comments`.`availability` = 1";

				$result = $con->query($sql);
		
			while($row = $result->fetch_assoc()){
			$space = new comment($row['id']);
			array_push($spacearr , $space);
		   }
		   return $spacearr;
	}

	public function getspacesbyStr($str)
	{
		$spacearr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `id` 
				FROM `space` 
				WHERE `availability` = 1";
				$sql = $sql.$str;
		/*		$sql;/*
		$result = $con->query($sql);
		
			while($row = $result->fetch_assoc()){
			$space = new space($row['id']);
			array_push($spacearr , $space);
		   }
		   return $spacearr;*/
	}
}

 ?>