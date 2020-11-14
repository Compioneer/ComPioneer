<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:landing.php?Signing=Failed');
}
require 'include\header.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Welcome | Compioneer </title>
  </head>
  <body>

<p>
  testing  </p>

      <a href="logout.php">Logout</a>

      <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
      <p>hello 9</p>
<a href="post_question.php">
<button type="button" class="btn-class" id="btn-id">+</button>
</a>


  </body>
</html>
