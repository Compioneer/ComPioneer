<?php
if (isset($_POST['submit']))	{
require 'db.php';

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];
$confirmPass = $_POST['conpass'];

if($pass !== $confirmPass){
  header("Location:landing.php?error=passwordcheck&user=".$name."&email=".$email);
  exit();
} else {
  $sql = "SELECT * FROM users WHERE username = '$name'";

   //count number of rows how many times this name apper in this databasee
  $result = mysqli_query($con,$sql);
  $resultCheck = mysqli_num_rows($result);

      if($resultCheck>0){
        header("Location:landing.php?error=invalidUid&email=".$email);
        exit();
      } else {
      $passHash = password_hash($pass, PASSWORD_DEFAULT);

        $reg="INSERT INTO users(username,email,password) VALUES ('$name','$email','$passHash')";
        mysqli_query($con,$reg);
        header("Location:home.php?signup=success");
        echo "Registrarion successful";
      }
}
}

else {
  header("location:landing.php");
  exit();
}
