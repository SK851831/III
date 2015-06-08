<?php
$pid=addslashes($_GET['post_id']?$_GET['post_id'] :null);
	if(!empty($pid)&&is_numeric($pid)){
		require_once("../dbConnect.php");
		$sql = dbConnect();
		$cmtary=array();
		$users=array();
		$uid=array();
		$name=array();
		if($query=mysqli_query($sql, "SELECT * FROM iii.users"))
		{
			while($row=mysqli_fetch_array($query)){
				array_push($uid,$row['id']);
				array_push($name,$row['username']);
			}
			$users=array_combine($uid,$name);
		}
		if($query=mysqli_query($sql, "SELECT * FROM iii_posts.".$pid.""))
		{	
			while($row = mysqli_fetch_array($query)){
				$userid=$row['uid'];
				$uname=$users[$userid];
				$comments=$row['comments'];
				$posted=$row['posted_on'];
				array_push($cmtary,$userid,$uname,$comments,$posted);
			}
			
			echo $cmtary;
		}	
	}
	else{
		return null;
		
	}
?>