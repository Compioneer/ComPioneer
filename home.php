<?php
require 'include\header.php';
 ?>

          <!-- font awesome js link -->
      <!-- <script src="https://use.fontawesome.com/5d66a18552.js"></script> -->
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

<div class="homeIllu">



    <!-- cards question section -->
           <?php
           session_start();

           //pagination
           $results_per_page = 5;
           $sql = "SELECT * FROM questions";
           $result = mysqli_query($con,$sql);
           $number_of_results = mysqli_num_rows($result);

           if (!isset($_GET['page'])){
             $page = 1;
           }else {
             $page = $_GET['page'];
           }

           if($page >= 1){
             $this_page_first_result = ($page-1) * $results_per_page;
           }else{
             $this_page_first_result = 0;
           }

       $sql= "SELECT * FROM questions LIMIT $this_page_first_result,$results_per_page";
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
             <div class="card-header">
               <div class="img-qu">
                    <img src="images\icons8-test-account-100.png" alt="profile">  <?php
                     echo  $q_username;
                     ?>
               </div>
              </div>
             <div class="card-body">
               <h5 class="card-title"> <p><?php
                echo $q_row['q_title'];
                ?></p></h5>

               <p class="card-text">

              <?php echo $q_row['q_body']; ?></p>


              <div class="timestamp">
                <?php echo $q_timestamp;?>
              </div>



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
               <hr>
               <div class="img-qu">
                   <a class="answer-link" href="post_answer.php?q_id=<?php echo $q_id; ?>">
                     <img src="images\icons8-messaging-100.png" alt="reply">
                   </a>
               </div>
             </div>

             </div>
           <?php
         }
       }
     ?>

      </div>
      <?php
      //pagination
      // $results_per_page = 10;
      $sql = "SELECT * FROM questions";
      $result = mysqli_query($con,$sql);
      $number_of_results = mysqli_num_rows($result);
      //while ($row = mysqli_fetch_array($result)) {
      //echo $row['id']. ' '. $row['questions']. '<br>';
      //}
      if (!isset($_GET['page'])){
        $page = 1;
      }else {
        $page = $_GET['page'];
      }

      if($page > 1){
        $this_page_first_result = $page * $results_per_page;
      }else{
        $this_page_first_result = $page;
      }

      $next_page = $page + 1;
      $sql = "SELECT * FROM questions LIMIT  $this_page_first_result, $results_per_page";
      $result = mysqli_query($con, $sql);

      // while ($row = mysqli_fetch_assoc($result)) {
      //   echo  $row['q_body'] . '<br>';
      // }


        // echo "<a href='home.php?page=$page'>  $page   </a> ";


        ?>
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="home.php?page=<?php if($page<2){echo 1;}else{echo $page-1;}?>">Previous</a></li>
            <?php
              $number_of_pages = ceil($number_of_results/$results_per_page);
              for ($page=1; $page<=$number_of_pages ; $page++) {
            ?>
                <li class="page-item"> <a class="page-link" href='home.php?page=<?php echo $page;?>'>  <?php echo $page; ?>  </a></li>
            <?php  } ?>
            <li class="page-item"><a class="page-link" href="home.php?page=<?php if($next_page>$number_of_pages){echo $next_page-1;}else{echo $next_page;}?>">Next</a></li>
          </ul>
        </nav>




        <a href="post_question.php">
        <button type="button" class="btn-class" id="btn-id">+</button>
        </a>
</div>
  <div class="footerContent">
<h4> About us </h4>
<p> comioneer is __________ </p>
</div>

  </body>
</html>
