<?php
    include "include/header.php";


    if(!isset($_GET['q_id'])){
        echo "You have not choosen a question!";

    }else{
        $q_id = $_GET['q_id'];
    }
?>
<title>Post Answer</title>
<!-- font awesome js link -->
<script src="https://use.fontawesome.com/5d66a18552.js"></script>
<!-- ckeditor for textbox -->
<script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<!-- tags selector  -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


      <div class="header">
          <nav>
          <a href="home.php" class="logo">ComPioneer</a>
          <div class="img-profile">
            <a class= "iconNav" href="profile.php">
              <img src="images\icons8-test-account-100.png" alt="profile">
            </a>
          </div>
          </nav>
      </div>
 <div class="container" id="zcontainer">

    <div class="col align-self-center">


  <!-- show the selected question -->
      <?php
      session_start();
         $sql="SELECT * FROM questions WHERE q_id = $q_id";
         $q_query = mysqli_query($con, $sql);
            if(!$q_query){
                die("Error: ".mysqli_error($con));
            }else{
              while($q_row=mysqli_fetch_assoc($q_query)){
                    $q_title= $q_row['q_title'];
                    $q_body= $q_row['q_body'];
                    $q_username= $q_row['username'];
                    $q_timestamp=$q_row['timestamp'];
                      ?>

                        <!-- echo   $q_username ."<br>";
                        echo  $q_title."<br>";
                        echo $q_body."<br>";
                        echo $q_timestamp."<br>"; -->

                        <div class="container-home">
                        <div class="card bg-light mb-3" id="Acoloring">
                          <div class="card-header">
                            <div class="img-qu">
                               <img src="images\icons8-test-account-100.png" alt="profile">  <?php
                                echo  $q_username;
                                ?>
                              </div>
                          <div class="card-body">
                            <h5 class="card-title"> <p><?php
                             echo $q_title;
                             ?></p></h5>
                            <p class="card-text"><?php echo $q_row['q_body']; ?></p>
                           <div class="timestamp">
                             <?php echo $q_timestamp;?>
                           </div>



                      <?php
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
                                        ?> <span class= "badge badge-pill badge-primary"><?php echo $tag_title; ?></span> <?php
                                    }

                                }
                            }
                        }
                    }
                }
            ?>
        </div>
      </div>
    </div>



    <!-- answers part -->

<hr class="lineT" width="58%">



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
                             ?>
                            <div class="container-home">
                            <div class="card bg-light mb-3" id="coloring">

                              <div class="card-header">
                                <div class="img-qu">
                                   <img src="images\icons8-test-account-100.png" alt="profile">  <?php
                                    echo  $q_username;
                                    ?>
                                  </div>
                            </div>

                               <div class="card-body">
                               <p class="card-text"> <?php echo $a_body; ?></p>
                               <div class="timestamp">   <?php echo $a_timestamp;?> </div>

                               <div class="col align-self-center">
                                 <?php
                                   $sql_tags= "SELECT * FROM a_tags WHERE a_id= $a_id";
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
                                           ?> <span class="badge badge-pill badge-primary"><?php echo $tag_title; ?> </span> <?php
                                         }

                                       }
                                     }
                                   }
                                 ?>
                               </div>
                             </div>
                             </div>
                           </div>
                        <?php


                        }
                    }
                ?>





    <!-- Answer Form: this form will not show up unless the user is a registed user -->


        <?php
            if(!isset($_SESSION['username'])){
                echo "<h3>To post an answer you have to be <a href='landing.php'>Logged in</a></h3>";
            }else{
        ?>
            <form action="include/insertAnswer.php" method="post">
                <div class="form-group">
                  <select name="tags[]" class="selectpicker" multiple data-live-search="true">
                    <?php
                       $sql= "SELECT * FROM tags";

                       $tags_query = mysqli_query($con, $sql);

                       if(!$tags_query){
                         die("Error: ". mysqli_error($con));
                       }else{

                         while($row=mysqli_fetch_assoc($tags_query)){
                           $tag_id = $row['tag_id'];
                           $tag_title = $row['tag_title'];
                           echo "<option value='$tag_id'>$tag_title</option>";
                         }
                       }
                    ?>
                 </select>
                 <hr>
                    <textarea name="answer" class="form-control" id="exampleFormControlTextarea1" rows="3"  placeholder="write your answer here"></textarea>
                    <input type="hidden" name="q_id" value="<?php echo $q_id; ?>">
                    <script>
                               CKEDITOR.replace( 'answer' );
                       </script>
                </div>
                <div class="form-group">
                    <button name="submit" value="submit" class="btn btn-class" id="ansbtn" >Post</button>
                </div>
            </form>


            <?php } ?>


  </div>
</div>
</div>
<div class="footerContent">
<h5> <b> About us</b></h5>
<p> <b>Comp</b>uter <b>Pioneer</b> is a Q&A platform
<br>  a learning environment that allows
 <b>QU</b> COC students
<br>  to ask IT/CS related questions in a forum-type format </p>
</div>
</body>
</html>
