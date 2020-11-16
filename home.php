<?php
require 'include\header.php';
 ?>
           <!-- navgation  -->
       <div class="header">
          <a href="landing.php" class="logo">ComPioneer</a>
           <nav>
            <a href="IT.php">IT</a>
            <a href="CS.php">CS</a>
            <a href="logout.php">Logout</a>
          </nav>
      </div>

         <!-- cards question section -->
      <section class= "box-scroll">
        <div class="container-home">
        <div class="card text-white bg-info mb-3">
          <div class="card-header">username</div>
          <div class="card-body">
            <h5 class="card-title">Question Title </h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card bg-light mb-3">
          <div class="card-header">username</div>
          <div class="card-body">
            <h5 class="card-title">Question Title </h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card text-white bg-dark mb-3">
          <div class="card-header">username</div>
          <div class="card-body">
            <h5 class="card-title">Question Title </h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
       </div>
       </div>
    </section>

  

        <a href="post_question.php">
        <button type="button" class="btn-class" id="btn-id">+</button>
        </a>

  </body>
</html>
