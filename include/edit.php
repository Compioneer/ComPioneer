<?php
include ("../db.php");


if(!isset($_POST['edit_tag'])){
  header("Location: ../home.php");
}else{

  $tag_id= $_POST['edit_tag'];
  $tag_title = $_POST['tag_title'];

  $sql="UPDATE tags SET tag_title='$tag_title' WHERE tag_id=$tag_id";
  $update_query= mysqli_query($con, $sql);

  if(!$update_query){
    die("Error: ".mysqli_error($con));
  }else{
    header("Location: ../setting.php");
  }
}
?>
