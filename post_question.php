<?php
    require 'include\header.php';
      session_start();
    if(!isset($_SESSION['username'])){
      header("Location: landing.php");
    }else{
      $username = $_SESSION['username'];

?>

  <body>
    <div class="PObackgr">
    <div class="container">
        <form action="include/insert_question.php" method="POST">
           <div  class="form-group">
             <label for="question_title">
               <input class="form-control" name="question_title" type="text" placeholder="Question Title">
           </div>
           <div class="form-group">
             <h2>Create Post</h2>
             <label for="exampleFormControlSelect2">Tags</label>
             <select name="tags[]" multiple class="form-control" id="exampleFormControlSelect2">
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
           <div class="form-group">
             <label for="exampleFormControlTextarea1">Example textarea</label>
             <textarea class="form-control" name="question_body" id="exampleFormControlTextarea1" rows="3"></textarea>
           </div>
           <input type="hidden" name="username" value="<?php $username;?>">
           <button  name="submit" value="submit" class ="btn btn-primary" id="PObtn">send</button>
        </form>
    </div>
  </div>
   <?php }; ?>
  </body>
</html>
