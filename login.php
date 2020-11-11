<?php
if (isset($_POST['submit']))	{
   require 'db.php';

$nameemail = $_POST['user_or_email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username  = '$nameemail'";
$result = mysqli_query($con,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck<1) {
  header("Location:landing.php?error=sqlerror");
  exit();
}
 else {
    while($row=mysqli_fetch_assoc($result)){
      $conditional_pass = password_verify($pass, $row['password']);
      if(!$conditional_pass){

       
       header("Location:landing.php?error=$conditional_pass");
       echo "string";
       exit();
    }
    else{

      session_start();
      $_SESSION['username'] = $row['username'];
      header("Location:home.php?login=success");
      exit();
      }
    }
  }

} else {
  header("Location:landing.php?isset=error");
  exit();
}


 ?>
