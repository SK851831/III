<?php
/**
* 
*/
require_once('../dbConnect.php');
 $sql = dbConnect();
class profile
{
	var $id,$title,$uemail,$authen,$profilepic,$team,$uname;
	
	public function db(){
		$con = $GLOBALS['sql'];
		$query = "SELECT * FROM users WHERE email = \"".$_SESSION['email']."\"" ;
		$data = mysqli_query($con,$query);
		$row = mysqli_fetch_array($data);
		return $row;
	}
	public function dbt($authen){
		$con = $GLOBALS['sql'];
		$query = "SELECT auth FROM auth WHERE auth_no = ".$authen;
		$data = mysqli_query($con,$query);
		$row = mysqli_fetch_array($data);
		return $row['auth'];
	}
	public function profileinfo()
	{
		$col=$this->db();
 		$this->uemail=$col['email'];
 		$this->id = $col['id'];
 		$this->uname=$col['username'];
 		$this->authen=$col['auth'];	
 		$this->profilepic=$col['profilepic'];
 		$this->team=$this->dbt($this->authen);
 		if($this->authen>10){
 		$this->title=$this->team;
		}else{
			$this->title="Team ".$this->team;
		}
	}
}
?>