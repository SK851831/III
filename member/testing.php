<?php
	include('post_core.php');
	if(!isset($_POST['Postcontent'])){
		die("");
	}
	$content=addslashes($_POST['Postcontent']?$_POST['Postcontent'] :null);
	$content=htmlspecialchars($content);
	$content=trim($content);
	if(!empty($content)&&!empty($_POST['t'])){
	include('includes/session.php');
	$uid=  $system->id;
	$auth = $system->authen;
	$new = new create_new_post;
	$new->setId($uid);
	$new->setAuth($auth);
	$new->setitems();
	$final = nl2br($content);
	$new->setContent($final);
	$test = $new->new_post();
	if($test){
		echo "success";
	}}
	else{
		echo "failure";
	}


?>
