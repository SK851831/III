<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['email'])) {
    if (isset($_COOKIE['email']) && isset($_COOKIE['username'])&& isset($_COOKIE['auth'])) {
      $_SESSION['email'] = $_COOKIE['email'];
      $_SESSION['username'] = $_COOKIE['username'];
      $_SESSION['auth'] = $_COOKIE['auth'];
    }
  }
  if (!isset($_SESSION['email'])) {
    echo '<p>Please <a href="../../index.php">log in</a> to access this page.</p>';
    exit();
  }
  if (isset($_SESSION['email'])) {
    include_once('catch.php');
    $system=new profile;
    $system->profileinfo();
  }
?>