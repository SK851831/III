<?php
	include('post_core.php');
	
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
		$styles = array('fa fa-apple bg-blue','fa fa-apple bg-yellow','fa fa-apple bg-red','fa fa-android bg-blue','fa fa-android bg-yellow','fa fa-android bg-red','fa fa-whatsapp bg-blue','fa fa-whatsapp bg-yellow','fa fa-whatsapp bg-red','fa fa-comments-o bg-blue','fa fa-comments bg-yellow','fa fa-comments bg-red','fa fa- fa-binoculars bg-blue','fa fa- fa-binoculars bg-yellow','fa fa- fa-binoculars bg-red','fa fa-wifi bg-blue','fa fa-wifi bg-yellow','fa fa-wifi bg-red','fa fa-gears bg-blue','fa fa-gears bg-yellow','fa fa-gears bg-red','fa fa-lightbulb-o bg-blue','fa fa-lightbulb-o bg-yellow','fa fa-lightbulb-o bg-red','fa fa-recycle bg-blue','fa fa-recycle
		 bg-yellow','fa fa-recycle bg-red','fa fa-tags bg-blue','fa fa-tags bg-yellow','fa fa-tags bg-red');
		$i = rand(0,20);
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