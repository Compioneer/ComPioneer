<?php
require 'include\header.php';
 ?>

          <!-- font awesome js link -->
      <script src="https://use.fontawesome.com/5d66a18552.js"></script>
    <div class="header">
        <nav>
        <a href="home.php" class="logo">ComPioneer</a>
        <a class= "iconNav" href="profile.php"><i class="fa fa-user-o" aria-hidden="true"></i></a>
        </nav>
    </div>

<!-- <div class="homeIllu"> -->



    <!-- cards question section -->
           <?php
           session_start();
       $sql= "SELECT * FROM questions";
       $questions_query=mysqli_query($con, $sql);
       if(!$questions_query){
         die("Error: ".mysqli_error($con));
       }else{
         while($q_row=mysqli_fetch_assoc($questions_query)){
           $q_id= $q_row['q_id'];
           $q_username=$q_row['username'];
          $q_timestamp = $q_row['timestamp'];
           ?>
           <div class="container-home">
           <div class="card bg-light mb-3" id="coloring">
             <div class="card-header">  <?php
               echo $q_username;
               ?></div>
             <div class="card-body">
               <h5 class="card-title"> <p><?php
                echo $q_row['q_title'];
                ?></p></h5>
               <p class="card-text"><a href="answers.php?q_id=<?php echo $q_id; ?>"><?php echo $q_row['q_body']; ?></a></p>
              <div class="timestamp">
                <?php echo $q_timestamp;?>
              </div>
              <a class="answer-link" href="answers.php?q_id=<?php echo $q_id; ?>"><i class="fas fa-comment"></i></a>

             <!-- if(!($q_username===$_SESSION['username'])){
                  echo "";
              }else{
                  echo "<a class='btn btn-info' href='include\update_question.php?q_id=$q_id'>EDIT</a>";
              }
            -->
             </div>


             <div class="col align-self-center">
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
     ?>

      <a href="post_question.php">
      <button type="button" class="btn-class" id="btn-id">+</button>
      </a>
      <!-- </div> -->




        <a href="post_question.php">
        <button type="button" class="btn-class" id="btn-id">+</button>
        </a>

  <div class="footerContent">
<h4> About us </h4>
<p> comioneer is __________ </p>
</di>

  </body>
</html>
