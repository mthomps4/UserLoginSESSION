<?php
  session_start();
  unset($_SESSION['username']);
  session_destroy();// Destroying All Sessions
  header("Location: index.php"); // Redirecting To Home Page
?>
