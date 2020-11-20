<?php
    require 'include\header.php';
?>

  <body>
    <div class="PObackgr">
    <div class="container">
        <form action="include\insert_question.php" method="POST">
           <div class="form-group">
             <h2>Create Post</h2>
             <label for="exampleFormControlSelect2">Tags</label>
             <select multiple class="form-control" id="exampleFormControlSelect2">
               <?php
                       $sql="SELECT * FROM tags";
                       $show_tags_query=mysqli_query($con,$sql);
                       if(!$show_tags_query){
                           die("Erorr: ".mysqli_error($con));
                       }else{
                           while($row=mysqli_fetch_assoc($show_tags_query)){
                               $tag_title= $row['tag_title'];
                               echo"<option>$tag_title</option>";
                           }
                       }
               ?>
             </select>
           </div>
           <div class="form-group">
             <label for="exampleFormControlTextarea1">Question</label>
             <textarea name="question" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
             <br>
              <div class="form-group">
                <input type="file" name="pic_path" class="form-control-file" id="exampleFormControlFile1">
              </div>
           </div>
           <button  name="post" class ="btn btn-primary" id="PObtn">send</button>
        </form>
    </div>
  </div>
  </body>
</html>
