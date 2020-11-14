<?php
  require 'include\header.php';
?>

<div class="header">
  <a href="#default" class="logo">
    ComPioneer
  </a>

  <div class="container">
        <div class="row">
              <div class="col-md-7 mb-3">
                  <img src="images/illu.svg" class="img-fluid" alt="illustration">
              </div>

                 <div class="col-md-4">
                   <h4 class="signin-text mb-3"> Ask a Question,</br> Get an Answer</h4>
                   <h3> </br> </h3>
                   <form action="login.php" method="post">
                     <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="user_or_email" class="form-control" required>
                     </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" name = "submit" class="btn btn-class"> Login </button>
                    <button type="submit" name = "submit" class="btn btn-class"> Signup </button>
                  </form>
                </div>

      </div>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  </body>
</html>
