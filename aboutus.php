<?php

include_once "must/header.php";
include_once "classes/StaffController.php";

?>
    <section class="post-header">
            <h1>About Us</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, inventore!</p>
    </section>
    <section class="container-aboutus">
        <h1>OUR TEAM</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, repellat?</p>
        <div class="content">
        <?php
            $freelancers= new StaffController;
            $all=$freelancers->readData();
            for($i=0;$i<count($all);$i++){
                echo ' <figure id="fig1">
                <img src="' .$all[$i]['staffImage'].'" width="150px">
                <ul>
                     <li><h3>'.$all[$i]['staffName'].'</h3></li>
                     <li><p>'.$all[$i]['staffContent'].'</p></li>
                </ul>
                </figure>';
            }
            ?>

        
<footer>    
<!--footer-->
<?php
    include_once "must/footer.php"; 
    ?>