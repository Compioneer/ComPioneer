<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:landing.php?Signing=Failed');
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Welcome | Compioneer </title>
  </head>
  <body>



      <a href="logout.php">Logout</a>

      <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>



  </body>
</html>
