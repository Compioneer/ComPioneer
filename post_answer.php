<?php

    include "include/header.php";


    if(!isset($_GET['q_id'])){
        echo "You have not choosen a question!";

    }else{
        $q_id = $_GET['q_id'];


    }

?>

    <div class="container">
        <div class="col align-self-center">
            <?php
                $sql="SELECT * FROM questions WHERE q_id = $q_id";
                $q_query = mysqli_query($con, $sql);
                if(!$q_query){
                    die("Error: ".mysqli_error($con));
                }else{
                    while($q_row=mysqli_fetch_assoc($q_query)){
                        $q_title= $q_row['q_title'];
                        $q_body= $q_row['q_body'];
                        $q_username= $q_row['username'];

                        echo "Qusestion Title: $q_title"."<br>";
                        echo $q_body."<br>";
                        $sql_tags= "SELECT * FROM q_tags WHERE q_id= $q_id";
                        $tag_id_query = mysqli_query($con, $sql_tags);
                        if(!$tag_id_query){
                            die("Error: ". mysqli_error($con));
                        }else{
                            while($tag_id_row= mysqli_fetch_assoc($tag_id_query)){
                            $tag_id= $tag_id_row['tag_id'];
                            $sql_tag_title= "SELECT * FROM tags WHERE tag_id= $tag_id";
                            $tag_title_query= mysqli_query($con, $sql_tag_title);

                            if(!$tag_title_query){
                                die("Error: ".mysqli_error($con));
                                }else{
                                        while($tag_title_row=mysqli_fetch_assoc($tag_title_query)){
                                        $tag_title= $tag_title_row['tag_title'];
                                        ?> <?php echo $tag_title." -- "; ?> <?php
                                    }

                                }
                            }
                        }
                    }
                }
            ?>
        </div>
    </div>
    <hr>

    <!-- answers part -->
    <h1>Answers</h1>
    <div class="container">
        <div class="col align-self-center">
                <?php
                    $sql= "SELECT * FROM answers WHERE q_id= $q_id";
                    $a_query=mysqli_query($con, $sql);

                    if(!$a_query){
                        die("Error: ".mysqli_error($con));
                    }else{
                        while($a_row=mysqli_fetch_assoc($a_query)){
                            $a_id= $a_row['a_id'];
                            $a_body = $a_row['answer'];
                            $a_username = $a_row['username'];
                            $a_timestamp = $a_row['timestamp'];

                            echo $a_username."<br>".$a_timestamp."<br>".$a_body;
                            if(!($a_username===$_SESSION['username'])){
                                echo "";
                            }else{
                                echo "<br><br><a class='btn btn-info' href='editAnswer.php?a_id=$a_id&&q_id=$q_id'>EDIT</a>";
                            }
                            echo "<br><hr>";
                        }
                    }
                ?>
        </div>
    </div>
    <hr>

    <!-- Answer Form: this form will not show up unless the user is a registed user -->
    <div class="container">
        <div class="col align-self-center">
        <?php
            if(!isset($_SESSION['username'])){
                echo "<h3>To add an answer you have to be <a href='landing.php'>logged in</a></h3>";
            }else{
        ?>
            <form action="include/insertAnswer.php" method="post">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Write your answer here:</label>
                    <textarea name="answer" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <input type="hidden" name="q_id" value="<?php echo $q_id; ?>">
                </div>
                <div class="form-group">
                    <button name="submit" value="submit">Post an Answer</button>
                </div>
            </form>
        </div>
    </div>
            <?php } ?>
</body>
