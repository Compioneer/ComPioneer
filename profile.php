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

?>

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

?>
<div class="container-home">
<div class="card bg-light mb-3" id="coloring">
  <div class="card-header">  <?php
    echo $row['username'];
    ?></div>
  <div class="card-body">
    <p class="card-text"><?php echo $row['q_body']; ?></p>


<?php
      }
    }
  }
 } ?>
