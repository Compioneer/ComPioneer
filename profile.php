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


        <!-- users profile -->

       <!-- font awesome js link -->
    <script src="https://use.fontawesome.com/5d66a18552.js"></script>
    <div class="header">
        <nav>
        <a href="home.php" class="logo">ComPioneer</a>
        <a class = "iconNav" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </nav>
    </div>


<?php
    if(!isset($_SESSION['username'])){
      header("Location: home.php");
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
              <p class="card-text"><a href="post_answer.php?q_id=<?php echo $id; ?>"><?php echo $row['q_body']; ?></a></p>
             <div class="timestamp">
               <?php echo $timestamp;?>
             </div>
             <a class="answer-link" href="post_answer.php?q_id=<?php echo $id; ?>"><i class="fas fa-comment"></i></a>
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
            </div>
            </div>

          <?php
        }
      }
    }
    ?>


  </body>
</html>
