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

<!-- <
?php
$sql="SELECT * FROM questions WHERE username = '$username'";
$user_info_query=mysqli_query($con,$sql);
echo $user_info_query;
 ?> -->



<?php } ?>
