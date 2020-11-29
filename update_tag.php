<?php
    include ("include/header.php");
    session_start();

    if(!isset($_SESSION['username'])){
        header("Location: ../home.php");
    }else{

        $user= $_SESSION['username'];

    if(isset($_POST['edit'])){

        $tag_id=$_POST['edit'];

        $sql="SELECT * FROM tags WHERE tag_id=$tag_id";

        $tag_query= mysqli_query($con,$sql);

        if(!$tag_query){
            die("Error: ". mysqli_error($con));
        }else {
            while($row= mysqli_fetch_assoc($tag_query)){
              $tag_title= $row['tag_title'];

}}
}else{

    header("Location: setting.php?edit_tag=failed");
}
            ?>
<title>Update tag</title>
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

            <div class="container" id="zcontainer">
              <section id="add_tags">
                  <div class="contaire">
                      <div class="col-xs-6 col-xs-offset-3">
                          <div class="form-tags">
                             <h1>Update Tag</h1>
                                <form role="form" action="include/edit.php" method="post" id="login-form" autocomplete="off">
                                  <div class="form-group">
                                      <label for="tag_title">
                                      <input type="text" name="tag_title" id="tag_title" class="form-control" value="<?php echo $tag_title; ?>" required>
                                  </div>
                                  <button name="edit_tag" class="btn-tags" value="<?php echo $tag_id;?>">Add Tag </button>
                              </form>
                          </div>
                      </div>
                  </div>
              </section>
            </div>
              <div class="footerContent">
                <h5> <b> About us</b></h5>
                <p> <b>Comp</b>uter <b>Pioneer</b> is a Q&A platform
                <br>  a learning environment that allows
                 <b>QU</b> COC students
                <br>  to ask IT/CS related questions in a forum-type format </p>
                </div>
            </body>
           </html>

            <?php
        }

?>
