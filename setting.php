<?php

    require 'include\header.php';

?>
    <!-- font awesome js link -->
    <script src="https://use.fontawesome.com/5d66a18552.js"></script>
    <div class="header">
      <nav>
      <a href="home.php" class="logo">ComPioneer</a>
      <a class = "iconNav" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
      </nav>
    </div>



    <section id="show_tags">
        <div class="container">
          <section clas="add-tags">
              <div class="contaire">
                  <div class="col-xs-6 col-xs-offset-3">
                      <div class="form-tags">
                         <h1>Add Tags</h1>
                          <form role="form" action="include\addTag.php" method="post" id="login-form" autocomplete="off">
                              <div class="form-group">
                                  <label for="tag_title">
                                  <input type="text" name="tag_title" id="tag_title" class="form-control" placeholder="tag title" required>
                              </div>
                              <button name="submit" class="btn-tags">Add Tag </button>
                          </form>
                      </div>
                  </div>
              </div>
          </section>

            <div class="col-xs-6 col-xs-offset-3">
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tags</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                            $sql="SELECT * FROM tags";
                            $show_tags_query=mysqli_query($con,$sql);
                            if(!$show_tags_query){
                                die("Erorr: ".mysqli_error($con));
                            }else{
                                $row_num=1;
                                while($row=mysqli_fetch_assoc($show_tags_query)){
                                    $tag_title= $row['tag_title'];
                                    $tag_id = $row['tag_id'];
                                    echo"<tr>
                                    <th scope='row'>$row_num</th>
                                    <td>$tag_title</td>
                                    <td>
                                        <form action='include\delete_tag.php' method='POST'><button name='delete' value='$tag_id' class='btn btn-danger btn-small'>delete</button></form>
                                        <br>
                                        <form action='update_tag.php' method='post'><button name='edit' value='$tag_id' class='btn btn-success btn-small'>update</button></form>
                                    </td>
                                    </tr>";
                                    $row_num++;
                                }
                            }
                        ?>
                </tbody>
                </table>

            </div>
        </div>
    </section>

</body>
</html>
