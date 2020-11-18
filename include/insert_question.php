<?php
include("../db.php");
if (isset($_POST['post']))	{

   session_start();
    if(isset($_SESSION['username'])){

      $question=$_POST['question'];
      $pic_path=$_POST['pic_path'];

      $sql=" INSERT INTO questions (question,pic_path) VALUES ('$question','$pic_path')";
      $insert_q_query=mysqli_query($con,$sql);
       if(!$insert_q_query){
          die("Error: ". mysqli_error($con));
       } else {
          header("Location:../post_question.php?insert_q_status=success");
       }
}else{
   header("Location:../post_question.php?insert_q_status=failed");
}
} else {
  header("location:landing.php");
  exit();
    }

?>
