<?php
    require 'include\header.php';
?>

  <body>
    <div class="container">
        <form action="" method="POST">

           <div  class="form-group">
             <label for="question_title">
               <input class="form-control" type="text" placeholder="Question Title">
           </div>
           <div class="form-group">
             <label for="exampleFormControlSelect2">Example multiple select</label>
             <select multiple class="form-control" id="exampleFormControlSelect2">
               <?php
                       $sql="SELECT * FROM tags";
                       $show_tags_query=mysqli_query($con,$sql);
                       if(!$show_tags_query){
                           die("Erorr: ".mysqli_error($con));
                       }else{
                           $row_num=1;
                           while($row=mysqli_fetch_assoc($show_tags_query)){
                               $tag_title= $row['tag_title'];
                               echo"<option>$tag_title</option>";
                               $row_num++;
                           }
                       }
               ?>
             </select>
           </div>
           <div class="form-group">
             <label for="exampleFormControlTextarea1">Example textarea</label>
             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
           </div>
        </form>
    </div>
  </body>
</html>
