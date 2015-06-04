<?php
//Database Connection Code
require_once('dbConnect.php');
$sql = dbConnect();
  // Start the session
  session_start();
$output_form = false;
  // Clear the error message
  $error_msg = "";
// If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['email'])) {
    if (isset($_COOKIE['email']) && isset($_COOKIE['username'])&& isset($_COOKIE['auth'])) {
      $_SESSION['email'] = $_COOKIE['email'];
      $_SESSION['username'] = $_COOKIE['username'];
      $_SESSION['auth'] = $_COOKIE['auth'];
    }
  }
  if (isset($_SESSION['email'])) {
	$home_url = 'member/index.php';
          header('Location: ' . $home_url);
}
  // If the user isn't logged in, try to log them in
  if (!isset($_SESSION['email'])) {
    if (isset($_POST['submit'])) {
      
    
      // Grab the user-entered log-in data
      $user_username = $_POST['email'];
      $user_password = $_POST['pass'];

      if (!empty($user_username) && !empty($user_password)) {
        // Look up the username and password in the database
       	 $query = "SELECT username,email,auth FROM users WHERE email = '$user_username' AND password = '$user_password'";
        $data = mysqli_query($sql,$query);

        if (mysqli_num_rows($data)== 1) {
          // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
          $row = mysqli_fetch_array($data);
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
			<h1>Login to <strong>Explore<br></strong></h1>
			<?php
  // If the session var is empty, show any error message and the log-in form; otherwise confirm the log-in
  if ($output_form == true) {
    echo '<h3>'.$error_msg.'<br>Thank u!!...</h3><br>';
}?>
 
			<div class="row">
				<div class="col-md-6 col-sm-12 col-md-offset-3">

					<form class="form-horizontal" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="subscribeForm" method="POST">
						<div class="form-group">
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input id="textbox"class="form-control input-lg" name="email" type="email" id="address" placeholder="Enter your email" data-validate="validate(required, email)" required="required">
							</div>
							<div class="col-md-5 col-sm-4">
								<input id="textbox"class="form-control input-lg" name="pass" type="password" id="pass" placeholder="Enter your Pass" required="required">
							</div>
						</div><br>
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-success btn-lg">GET ACCESS</button>
						</div>
					</form>
					
				</div>
				<div class="col-md-12 footerlinks">
					<p>&copy; 2015 III. All Rights Reserved</p>
				</div>
			
				
		</div><!--/container -->
	</main><!--/main -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/easing.js"></script>
<script src="assets/js/nicescroll.js"></script>

</body>
</html>
