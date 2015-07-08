<?php
	include('cmt_core.php');
	if(!isset($_POST['Cmttcontent'])&&!isset($_POST['pcid'])){
		die("");
	}
	$content=addslashes($_POST['Cmtcontent']?$_POST['Cmtcontent'] :null);
	$content=htmlspecialchars($content);
	$content=trim($content);
	$pcid=$_POST['pcid'];
	if(!empty($content)&&!empty($_POST['t'])&&!empty($pcid)){
	include('includes/session.php');
	$uid=  $system->id;
	$auth = $system->authen;
	$new = new create_new_cmt;
	$new->setId($uid);
	$new->setAuth($auth);
	$new->setitems();
	$final = nl2br($content);
	$new->setContent($final);
	$new->setPid($pcid);
	$test = $new->new_cmt();
	if($test){
		echo "success";
	}else{
		echo "failure";
	}}
	else{
		echo "failure";
	}


?>
<?php // XXX: \';/ ?>
