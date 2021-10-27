 <div class="hero-container">
     <!-- Welcome student -->

    <div class="hero">
        <div class="intro">
            <h1>
            <?php
            echo "Welcome " . $_SESSION['naam'];
            ?>
            </h1>
            <div class="box"> <img src="./assets/img/November.png"/></div>
            <i class="corner"></i>
            <i class="top"></i>
        </div>
    </div>  

    <?php
  include "latest-news.php";
 ?>

</div>