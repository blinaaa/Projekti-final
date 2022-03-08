<?php

include_once "must/header.php";
include_once "classes/PostController.php";
include_once "classes/CompanyPostController.php";

?>

    <!--Box-->
    <section class="infobox">
        <h1>Work with the best if you want to be the best!</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis expedita dolore vel porro laborum <br>
            aut sequi doloremquelibero, eum excepturi?</p>
        <a href="joinus.php"><button class="btn joinus-btn">Join Us Now</button></a>
        <a href="freelancers.php"><button class="btn hire-btn">Hire a Freelancer</button></a>
    </section>

    <!--------SlideShow---------------->
    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <a href="freelancers.php"><img src="images/web.jpg" style="width:100%"></a>
            <div class="text">Web Developers</div>
        </div>

        <div class="mySlides fade">
            <a href="freelancers.php"><img src="images/mobile.jpeg" style="width:100%"></a>
            <div class="text">Mobile Developers</div>
        </div>

        <div class="mySlides fade">
            <a href="freelancers.php"><img src="images/appdev.jpg" style="width:100%"></a>
            <div class="text">Windows App Developers</div>
        </div>
        <div class="mySlides fade">
            <a href="freelancers.php"><img src="images/GD.jpg" style="width:100%"></a>
            <div class="text">Graphic Developer</div>
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
    </div>
    </div>
    <!--Services-->
    <section class="services">
        <h1>Services We Offer</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, temporibus!</p>
        <div class="row">
            <?php
            $freelancers= new PostController;
            $all=$freelancers->readData();
            for($i=0;$i<count($all);$i++){
                echo '<div class="services-col">
                    <a href="freelancers.php"><h3>'.$all[$i]['postsTitle'].'</h3></a>
                        <p>'.$all[$i]['postsContent'].'</p>
                </div>';
            }
            ?>
        
        </div>
    </section>
    <section class="work-companies">
        <h1>Companies we work with</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, tempore.</p>
        <div class="work">
        <?php
            $freelancers= new CompanyPostController;
            $all=$freelancers->readData();
            for($i=0;$i<count($all);$i++){
                echo '<div class="work-col">
                <img src="' .$all[$i]['companyImage'].'" id="logos">
                <a href="index.php">
                     <h3>'.$all[$i]['companyName'].'</h3>
                </a>
                <p>'.$all[$i]['companyContent'].'</p>
                  
                </div>';
            }
            ?>
        </div>
    </section>

    <!--footer-->
    <?php
      include_once "must/footer.php"; 
    ?>