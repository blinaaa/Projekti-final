<?php

include_once "must/header.php";
require_once "classes/MenuController.php";

?>
  <div class="post-header">
    <div class="col-3">
      <h1>The Best Mobile Developers <br> you can find</h1>
      <p>Make sure you have the greatest service <br> by hiring the greatest staff</p>
    </div>
  </div>

  <div class="small-container">
        <h2 class="title">Featured Staff!</h2>
        <div class="row">
            <?php
            $freelancers= new MenuController;
            $all=$freelancers->readData();
            for($i=0;$i<count($all);$i++){
                echo '<div class="col-4">
                    <a href="product.php">
                        <img src="' .$all[$i]['freelancersImage'].'">
                        <h4>'.$all[$i]['freelancersName'].'</h4>
                        <p>$'.$all[$i]['freelancersWage'].'</p>
                    </a>
                </div>';
            }
            ?>
        </div>
    </div>

    <!--footer-->
    <?php
    
    include_once "must/footer.php"; 
    ?>