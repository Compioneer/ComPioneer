<?php
    require 'include\header.php';
      session_start();
    if(!isset($_SESSION['username'])){
      header("Location: landing.php");
    }else{
      $username = $_SESSION['username'];

?>
  <title>Post Question</title>
<!-- font awesome js link -->
<!-- <script src="https://use.fontawesome.com/5d66a18552.js"></script> -->
    <!-- CKEDITOR  -->
    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<!-- tags selector  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


  <body>
    <!-- <div class="homeIllu"> -->
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

    <!-- <div class="PObackgr"> -->
    <div class="container" id="zcontainer">

      <div class="img-qu">
        <img src="images\icons8-ask-question-100.png" alt="chat" <p><b> Ask a Question</b> </p>
      </div>
        <form action="include/insert_question.php" method="POST">
           <div  class="form-group">
             <label for="question_title">
               <input class="form-control" name="question_title" type="text" placeholder="Question Title">
           </div>
           <div class="form-group">
             <label for="exampleFormControlSelect2"><b>Tags</b></label>
             <br>
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
           </div>
           <hr>


           <div class="form-group">
             <!-- <label for="exampleFormControlTextarea1">Example textarea</label> -->
             <textarea class="form-control" name="question_body" id="exampleFormControlTextarea1" rows="3"></textarea>
             <script>
                        CKEDITOR.replace( 'question_body' );
                </script>
           </div>
           <input type="hidden" name="username" value="<?php $username;?>">
           <button name="submit" class="btn btn-class" id="ansbtn" >Post</button>
        </form>
    </div>
  <!-- </div> -->

   <?php }; ?>
   <div class="footerContent">
   <h5> <b> About us</b></h5>
   <p> <b>Comp</b>uter <b>Pioneer</b> is a Q&A platform
   <br>  a learning environment that allows
    <b>QU</b> COC students
   <br>  to ask IT/CS related questions in a forum-type format </p>
   </div>
  </body>
</html>
