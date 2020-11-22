<?php
    include("../db.php");

    session_start();
    $timestamp=date('Y-m-d H:i');
    if(!isset($_POST['submit'])){

        header("Location: ../landing.php");
    }else{
        if(!isset($_SESSION['username'])){
            header("Location: ../landing.php");
        }else{
            $question_title=$_POST['question_title'];
            $question_body = $_POST['question_body'];
            $username = $_SESSION['username'];

            $sql="INSERT INTO questions (q_title, q_body, username,timestamp) VALUES ('$question_title','$question_body','$username',now())";
            $posting_question_query = mysqli_query($con, $sql);

            if(!$posting_question_query){
                die("Error: ". mysqli_error($con));
            }else{
                if(!isset($_POST['tags'])){
                    header("Location: ../home.php");
                }else{
                    $q_id = mysqli_insert_id($con);

                    for($i=0; $i<count($_POST['tags']); $i++){
                        $tag_id = $_POST['tags'][$i];
                        $sql="INSERT INTO q_tags (q_id, tag_id) VALUES ($q_id, $tag_id)";
                        $insert_tags_query= mysqli_query($con, $sql);

                        if(!$insert_tags_query){
                            die("Error: ". mysqli_error($con));
                        }else{
                            header("Location: ../home.php");
                        }
                    }
                }
            }
        }
    }
?>
