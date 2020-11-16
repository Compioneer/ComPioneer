<?php
    include("../db.php");
    session_start();

    if(!isset($_SESSION['username'])){
        header("Location: ../home.php");
    }else{

        $user= $_SESSION['username'];

        $sql="SELECT * FROM users WHERE username='$user'";
        $isAdmin_query= mysqli_query($con, $sql);

        if(!$isAdmin_query){
            die("Error ".mysqli_error($con));
        }else{
            while($row=mysqli_fetch_assoc($isAdmin_query)){
                if($row['isAdmin']==0 ){
                    header("Location: ../home.php");
                }
            }
        }

        if(isset($_POST['delete'])){

            $tag_id= $_POST['delete'];

            $sql="DELETE FROM tags WHERE tag_id =$tag_id";
            $deleteTags_query= mysqli_query($con,$sql);

            if(!$deleteTags_query){
                die("Error: ". mysqli_error($con));
            }else{
                header("Location:../setting.php?deleteing_status=success");
            }
        }else{
            header("Location:../setting.php?deleting_status=failed");
        }
        }
        ?>
