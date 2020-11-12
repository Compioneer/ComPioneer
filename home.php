<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:landing.php?Signing=Failed');
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="utf-8">
    <title> Welcome | Compioneer </title>
  </head>
  <body>

<p>
  testing </p>
    <a href="logout.php">
       <i class="fa fa-cloud"></i>
                  </a>

      <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
      <p>hello99</p>



  </body>
</html>
