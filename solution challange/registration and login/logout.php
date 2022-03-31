<?php
//start the session 
session_start();

// destroy the session.

if (session_destroy()) {
  //redorect to the login page 
  header("Location: login.php");
  exit;
}
?>