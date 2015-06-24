<?php
	include('cmt_core.php');
	
	$content=addslashes($_POST['content']?$_POST['content'] :null);
	if(!empty($content)){
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

	?>
	<li id="pt">
	<!-- timeline icon -->
	    <i class="<?php echo $styles[$i]; ?>"></i>
	    <div class="timeline-item">
	        <span class="time" style="font-size:12px;"><i class="fa fa-clock-o" >Now</i></span>
	        <h1 class="timeline-header"  style="font-size:25px;"><a href="#"><?php echo $system->uname; ?></a></h1>
	        <div class="timeline-body">
	            <p style="word-wrap:break-word"><?php echo $content; ?></p>
	        </div>
	        <div class='timeline-footer' id="cmtbtn0">
	            <button class="btn bg-blue btn-xs" >Comments</button><br><br>
	        </div>
	        <div class='timeline-footer' id="cmt0">
	            <form action="testing1.php" method="post">
	            <textarea name="content" class="textarea" placeholder="Message" style="width: 100%; border-radius: 20px !important; height: 75px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
	            <div class='timeline-footer'>
	                <button type="submit" class="btn bg-green btn-xs">Comment <i class="fa fa-mail-reply"></i></button>
	            </div>
	        </form>
	        </div>
	    </div>
	</li>
	<!-- END timeline item -->
	<?php	
	}}	else{
		?>

		<?php
	}
	

?>