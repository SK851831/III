<?php
	include('functions_core.php');
	$content = ($_POST['content']?$_POST['content'] :null);
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
	if($test)
	{
		echo "posted Successfully";
		header('location: index.php');
	}
	else {
		echo "cant";
	}
	

?>