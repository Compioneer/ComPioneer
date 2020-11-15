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
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
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
