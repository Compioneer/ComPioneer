<?php
    include ("../db.php");

    session_start();
    $timestamp = date('Y-m-d H:i:s');

    if(!isset($_SESSION['username'])){
        header("Location: ../landing.php");
    }else{
        if(!isset($_POST['submit'])){
            header("Location: ../home.php");
        }else{
            $answer= $_POST['answer'];
            $q_id= $_POST['q_id'];
            $username = $_SESSION['username'];

            $sql="INSERT INTO answers (answer, q_id, username, timestamp) VALUES ('$answer',$q_id,'$username',now())";
            $addAnswer_query= mysqli_query($con, $sql);

            if(!$addAnswer_query){
                die("Error: ". mysqli_error($con));
            }else{
                header("Location: ../post_answer.php?q_id=$q_id");
            }


        }
    }
?>
