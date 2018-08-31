<?php 


class customer_space extends Model{


	private $user_id;
	private $space_id;
	private $start_date;
	private $sold_rent_flag;
	private $approved;
	private $end_date;
	public $table = "customer_space";


	public function __construct($id){
		Model::__construct($id);
		if($id != 0){
			$this->user_id();
			$this->space_id();
			$this->start_date();
			$this->sold_rent_flag();
			$this->approved();
			$this->end_date();
		}
	}

	public function setuser_id($user_id){
			$this->update("`user_id` = '$user_id'");
			$this->user_id();
		}


	private function user_id(){
			$this->user_id = $this->read('user_id');
		}


	public function getuser_id(){
			return $this->user_id;
		}

	public function setspace_id($space_id){
			$this->update("`space_id` = '$space_id'");
			$this->space_id();
		}


	private function space_id(){
			$this->space_id = $this->read('space_id');
		}


	public function getspace_id(){
			return $this->space_id;
		}

	public function setstart_date($start_date){
			$this->update("`start_date` = '$start_date'");
			$this->start_date();
		}


	private function start_date(){
			$this->start_date = $this->read('start_date');
		}


	public function getstart_date(){
			return $this->start_date;
		}

	public function setsold_rent_flag($sold_rent_flag){
			$this->update("`sold_rent_flag` = '$sold_rent_flag'");
			$this->sold_rent_flag();
		}


	private function sold_rent_flag(){
			$this->sold_rent_flag = $this->read('sold_rent_flag');
		}


	public function getsold_rent_flag(){
			return $this->sold_rent_flag;
		}

	public function setapproved($approved){
			$this->update("`approved` = '$approved'");
			$this->approved();
		}


	private function approved(){
			$this->approved = $this->read('approved');
		}


	public function getapproved(){
			return $this->approved;
		}

	public function setend_date($end_date){
			$this->update("`end_date` = '$end_date'");
			$this->end_date();
		}

	private function end_date(){
			$this->end_date = $this->read('end_date');
		}

	public function getend_date(){
			return $this->end_date;
		}

	public function getcustomer_spaces()
	{
		$customer_spacearr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `id` 
				FROM `customer_space` 
				WHERE `availability` = 1";
		$result = $con->query($sql);
		
			while($row = $result->fetch_assoc()){
			$customer_space = new customer_space($row['id']);
			array_push($customer_spacearr , $customer_space);
		   }
		   return $customer_spacearr;
	}
}

 ?>