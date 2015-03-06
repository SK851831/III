<?php
  // Start the session
  session_start();
$output_form = false;
  // Clear the error message
  $error_msg = "";
if (isset($_SESSION['email'])) {
	$home_url = 'member/index.php';
          header('Location: ' . $home_url);
}
  // If the user isn't logged in, try to log them in
  if (!isset($_SESSION['email'])) {
    if (isset($_POST['submit'])) {
      // Connect to the database
      $connect=mysql_connect('localhost','root','delta2345','iii')
		or die('Error connection_aborted');
	$dbc=mysql_select_db('iii', $connect)
		or die("Error selection_aborted");
      // Grab the user-entered log-in data
      $user_username = $_POST['email'];
      $user_password = $_POST['pass'];

      if (!empty($user_username) && !empty($user_password)) {
        // Look up the username and password in the database
       	 $query = "SELECT username,email,auth FROM users WHERE email = '$user_username' AND password = '$user_password'";
        $data = mysql_query( $query);

        if (mysql_num_rows($data)== 1) {
          // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
          $row = mysql_fetch_array($data);
          $_SESSION['username'] = $row['username'];
          $_SESSION['email'] = $row['email'];
          $_SESSION['auth'] = $row['auth'];
          setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30), "/");    // expires in 30 days
          setcookie('email', $row['email'], time() + (60 * 60 * 24 * 30), "/");  // expires in 30 days
          setcookie('auth', $row['auth'], time() + (60 * 60 * 24 * 30), "/");  // expires in 30 days
          $home_url = 'member/index.php';
          header('Location: ' . $home_url);
        }
        else {
        	$output_form = true;
          // The username/password are incorrect so set an error message
          $error_msg = 'Sorry, you must enter a valid username and password to log in.';
        }
      }
      else {
      	$output_form = true;
        // The username/password weren't entered so set an error message
        $error_msg = 'Sorry, you must enter your username and password to log in.';
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>Login &middot; III - Inspire Initiate Innovate</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	 
	<link href="assets/css/main.css" rel="stylesheet">
 
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	<![endif]-->
 
	<link rel="shortcut icon" href="assets/img/favicon.png">
	<script src="assets/js/pace.js"></script>
 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="preloader"></div>
	
    <!-- ******************** MASTHEAD SECTION ******************** -->	
	<main id="top" class="masthead" role="main">
		<div class="container">
			<div class="logo"> <a href="#"><img src="assets/img/logo.png" alt="logo"></a>
			</div>
 
			<h1>The Most Handsome and <strong>Powerful Way</strong> <br>
			to <strong>Proving</strong> your Efficiency in K(C)oding.</h1>
			<?php
  // If the session var is empty, show any error message and the log-in form; otherwise confirm the log-in
  if ($output_form == true) {
    echo '<h3>You are not a member.Pls contact the respective organiser..!!!<br>'.$error_msg.'<br>Thank u!!...</h3><br>';
}?>
 
			<div class="row">
				<div class="col-md-6 col-sm-12 col-md-offset-3">

					<form class="form-horizontal" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="subscribeForm" method="POST">
						<div class="form-group">
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input id="textbox"class="form-control input-lg" name="email" type="email" id="address" placeholder="Enter your email" data-validate="validate(required, email)" required="required">
							</div>
							<div class="col-md-5 col-sm-4">
								<br><br><br><input id="textbox"class="form-control input-lg" name="pass" type="password" id="pass" placeholder="Enter your Pass" required="required">
							</div>
						</div><br>
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-success btn-lg">GET ACCESS</button>
						</div>
					</form>
					<span id="result" class="alertMsg"></span> </div>
				</div>
 
				<a href="index.php#explore" class="scrollto">
				<p>SCROLL DOWN TO EXPLORE</p>
				<p class="scrollto--arrow"><img src="assets/img/scroll_down.png" alt="scroll down arrow"></p>
				</a>
		</div><!--/container -->
	</main><!--/main -->
 

    <!-- ******************** FEATURES SECTION ******************** -->	
	<div class="container" id="explore">
 
		<div class="section-title">
			<h2>Showcase your product with style.</h2>
			<h4>This site is ideal for Projects or your Programming Development.</h4>
		</div>

		<section class="row heroimg breath">
			<div class="col-md-12 text-center"> 
				<img src="assets/img/flat-mockup-template.png" alt="flat-mockup-template">
			</div>
		</section><!--/section -->
 
		<div class="section-title">
			<h2>More information about III.</h2>
			<h4>Always Inspire Initiate Innovate.</h4>
		</div>
		
		<section class="row features">
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="assets/img/service_01.png" alt="analytics-icon">
					<div class="caption">
						<h3>Improve K(C)oding Skills</h3>
						<p>Your K(C)oding Skills are improved by performing projects.</p>
					</div>
				</div><!--/thumbnail -->
			</div><!--/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="assets/img/service_02.png" alt="analytics-icon">
					<div class="caption">
						<h3>Evolve UIs</h3>
						<p>The next level on UIs are performed here.</p>
					</div>
				</div><!--/thumbnail -->
			</div><!--/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="assets/img/service_03.png" alt="analytics-icon">
					<div class="caption">
						<h3>"Take" Action.</h3>
						<p>The fast level for k(c)oding can be achieved by Experience.</p>
					</div>
				</div><!--/thumbnail -->
			</div><!--/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="assets/img/service_04.png" alt="analytics-icon">
					<div class="caption">
						<h3>Checklist.</h3>
						<p>Check up your list of "Learned Programming Skills" after you joined here.</p>
					</div>
				</div><!--/thumbnail -->
			</div><!--/col-sm-6-->
		</section><!--/section -->
	</div><!--/container -->
 

	    <!-- ******************** TESTIMONIALS SECTION ******************** -->	 
		<div class="highlight testimonials">
			<div class="container">
				<div class="section-title">
					<h2>What our community members said</h2>
					<h4>Don't take our word just. Experience it. </h4>
				</div>
				
				<section class="row breath">
					<div class="col-md-6">
						<div class="testblock">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
						<div class="clientblock"> 
							<img src="assets/img/find_user.png" alt=".">
							<p><strong>AAAA AAAA</strong> <br>
								Member of <a href="index.php#">III</a>
							</p>
						</div>
					</div><!--/col-md-6 -->
					
					<div class="col-md-6">
						<div class="testblock">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
						<div class="clientblock"> 
							<img src="assets/img/find_user.png" alt=".">
							<p><strong>AAAA AAAA</strong> <br>
								Member of <a href="index.php#">III</a>
							</p>
						</div>
					</div><!--/col-md-6 -->
				</section><!--/section -->
 
			</div><!--/container -->
		</div><!--/highlight Testimonials -->
 
	    <!-- ******************** FAQ ******************** -->	  
 
		<div class="section-title">
			<h5>Frequently Asked Questions</h5>
		</div>
		
		<section class="row faq breath">
			<div class="col-md-6">
				<h6>How does III Functions?</h6>
				<p>III functions in a way that built the projects helped by others, so that others too get helped by experience.</p>
				<h6>I dont-know programming languages to built app? Can I join III?</h6>
				<p>Absolutely. You can join III, where anyone can learn anything required to built an app or management too.</p>
			</div><!--/col-md-6 -->
			
			<div class="col-md-6">
				<h6>Do I need to do only specific projects allocated by III?</h6>
				<p>No. You get the any projects that you have interested to built. Any help including the requirements are available.</p>
				<h6>What is expansion of III?</h6>
				<p>Inspire Inititate Innovative.</p>
			</div><!--/col-md-6 -->
		</section><!--/section faq -->
 
	</div><!--/container -->
		<div class="container">
			<section class="row breath">
				<div class="col-md-12 footerlinks">
					<p>&copy; 2015 III. All Rights Reserved</p>
				</div>
			</section><!--/section -->
		</div><!--/container -->
 
 
 
 
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/easing.js"></script>
<script src="assets/js/nicescroll.js"></script>
 
 
<script>


 $(function() {
    $('.scrollto, .gototop').bind('click',function(event){
		 var $anchor = $(this);
		 $('html, body').stop().animate({
         scrollTop: $($anchor.attr('href')).offset().top
          }, 1500,'easeInOutExpo');
     event.preventDefault();
      });
  });
        

</script>
 
</body>
</html>
