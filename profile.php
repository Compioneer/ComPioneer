<!-- Addmins profile -->
<?php
    require 'include\header.php';
      session_start();
    if(!isset($_SESSION['username'])){
      header("Location: landing.php");
    }else{
      $username= $_SESSION['username'];
      $sql="SELECT * FROM users WHERE username='$username'";
      $isAdmin_query= mysqli_query($con, $sql);

      if(!$isAdmin_query){
          die("Error ".mysqli_error($con));
      }else{
          while($row=mysqli_fetch_assoc($isAdmin_query)){
              if($row['is_Admin']==1){
                  header("Location:setting.php");
              }
          }
      }
}
?>

<title>Profile</title>
        <!-- users profile -->
    <div class="header">
        <nav>
        <a href="home.php" class="logo">ComPioneer</a>
        <div class="img-profile">
          <a class = "iconNav" href="logout.php">
            <img src="images\icons8-logout-rounded-down-100.png" alt="logout">
          </a>
        </div>
        </nav>
      </div>

    <div class="homeIllu">

    <?php
        if(!isset($_SESSION['username'])){
          header("Location: landing.php");
        }else{
          $username= $_SESSION['username'];

          $sql="SELECT * FROM questions WHERE username='$username'";

          $user_questions_query=mysqli_query($con, $sql);

          if(!$user_questions_query){
            die("Error: ".mysqli_error($con));
          }else{
            while($row=mysqli_fetch_assoc($user_questions_query)){
              $id= $row['q_id'];
              $username=$row['username'];
             $timestamp = $row['timestamp'];
              ?>
              <div class="container-home">
              <div class="card bg-light mb-3" id="coloring">
                <div class="card-header">  <?php
                  echo "You" ;
                  ?></div>
                <div class="card-body">
                  <h5 class="card-title"> <p><?php
                   echo $row['q_title'];
                   ?></p></h5>
                   <p class="card-text">

                  <?php echo $row['q_body']; ?></p>

                 <div class="timestamp">
                   <?php echo $timestamp;?>
                 </div>
                </div>


                <div class="col align-self-center">
                  <?php
                    $sql_tags= "SELECT * FROM q_tags WHERE q_id= $id";
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
                  <hr>
                  <div class="img-qu">
                      <a class="answer-link" href="post_answer.php?q_id=<?php echo $id; ?>">
                        <img src="images\icons8-messaging-100.png" alt="reply">
                      </a>
                  </div>
                </div>
                </div>
              <?php
            }
          }
        }
        ?>

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
