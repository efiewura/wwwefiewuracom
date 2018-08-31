<?php 


class comment extends Model{


	private $user_id;
	private $space_id;
	private $content;
	private $likes;
	private $approved;
	private $datetime;
	public $table = "comments";


	public function __construct($id){
		Model::__construct($id);
		if($id != 0){
			$this->user_id();
			$this->space_id();
			$this->content();
			$this->likes();
			//$this->approved();
			$this->datetime();
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

	public function setcontent($content){
			$this->update("`content` = '$content'");
			$this->content();
		}


	private function content(){
			$this->content = $this->read('content');
		}


	public function getcontent(){
			return $this->content;
		}

	public function setlikes($likes){
			$this->update("`likes` = '$likes'");
			$this->likes();
		}


	private function likes(){
			$this->likes = $this->read('likes');
		}


	public function getlikes(){
			return $this->likes;
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

	public function setdatetime($datetime){
			$this->update("`datetime` = '$datetime'");
			$this->datetime();
		}

	private function datetime(){
			$this->datetime = $this->read('datetime');
		}

	public function getdatetime(){
			return $this->datetime;
		}

	public function getcomments()
	{
		$commentsarr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `id` 
				FROM `comments` 
				WHERE `availability` = 1";
		$result = $con->query($sql);
		
			while($row = $result->fetch_assoc()){
			$comments = new comment($row['id']);
			array_push($commentsarr , $comments);
		   }
		   return $commentsarr;
	}
}

 ?>