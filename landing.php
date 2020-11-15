<?php
  require 'include\header.php';
?>

<div class="header">
  <a href="home.php" class="logo">
    ComPioneer
  </a>
</div>

   <div class="container">
      <div class="row">
            <div class="col-md-7 mb-3">
                <img src="images/illu.svg" class="img-fluid" alt="illustration">
            </div>

               <div class="col-md-4">
                 <h4 class="signin-text mb-3"> Ask a Question,</br> Get an Answer</h4>
                 <h3> </br> </h3>


                 <form action="login.php" method="post" id="login" >
                                      <div class="form-group">
                                       <label>Username</label>
                                       <input type="text" name="user_or_email" class="form-control" required>
                                      </div>
                                     <div class="form-group">
                                       <label>Password</label>
                                       <input type="password" name="password" class="form-control" required>
                                     </div>
                                     <button type="submit" name = "submit" class="btn btn-class" id="loginbtn"> Login </button>

                                     <p class="form_text">
                                       <a class="form_link" id="linkCreateAccount">  </br> Don't have an Account? Create Account</a>
                                     </p>
                                   </form>


               <form action="signup.php" method="post" id="createAccount" class="form_hidden">

           <div class="form-group">
                     <label>Username</label>
                     <input type="text" name="user" class="form-control" required>
                   </div>

                  <div class="form-group">
                     <label>Email</label>
                     <input type="email" name="email" class="form-control" required>
                   </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <input type="password" name="confirm-password" class="form-control" id="confirmPass" autofocus placeholder="Confirm password" required>
                  </div>




                  <button type="submit" name = "submit" class="btn btn-class" id="signupBtn"> Sign up </button>

                   <p class="form_text">
                    <a class="form_link" id="linkLogin"> </br> Already have an Account? Sign in</a>
                  </p>
             </form>




             </div>
           </div>
          </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="js/CTAs.js"></script>
  </body>
</html>
