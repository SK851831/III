<?php
  // If the user is logged in, delete the session vars to log them out
  session_start();
  if (isset($_SESSION['email'])) {
    // Delete the session vars by clearing the $_SESSION array
    $_SESSION = array();

    // Delete the session cookie by setting its expiration to an hour ago (3600)
    if (isset($_COOKIE[session_name()])) {
      setcookie(session_name(), '', time() - 3600);
    }

    // Destroy the session
    session_destroy();
  }
    // Delete the user ID and username cookies by setting their expirations to an hour ago (3600)
    setcookie('username','', time() - (60 * 60 * 24 * 30 * 5), "/");    // expires in 30 days
          setcookie('email','', time() - (60 * 60 * 24 * 30 * 5), "/");  // expires in 30 days
          setcookie('auth','', time() - (60 * 60 * 24 * 30 * 5), "/");  // expires in 30 days
  
  
  // Redirect to the home page
  $home_url = '../index.php';
  header('Location: ' . $home_url);
?>
