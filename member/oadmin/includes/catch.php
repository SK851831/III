<?php
/**
* 
*/
class profile
{
	var $title,$uemail,$authen,$profilepic,$team,$uname;
	public function db(){
		$connect=mysql_connect('localhost','login','test','iii')
		or die('Error connection_aborted');
 		$dbc=mysql_select_db('iii', $connect)
		or die("Error selection_aborted");
		$query = "SELECT * FROM users WHERE email = \"".$_SESSION['email']."\"" ;
		$data = mysql_query( $query);
		$row = mysql_fetch_array($data);
		return $row;
	}
	public function dbt($authen){
		$connect=mysql_connect('localhost','login','test','iii')
		or die('Error connection_aborted');
 		$dbc=mysql_select_db('iii', $connect)
		or die("Error selection_aborted");
		$query = "SELECT auth FROM auth WHERE auth_no = ".$authen;
		$data = mysql_query( $query);
		$row = mysql_fetch_array($data);
		return $row['auth'];
	}
	public function profileinfo()
	{
		$col=$this->db();
 		$this->uemail=$col['email'];
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