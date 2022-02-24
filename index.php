<?php

include_once "header.php";

?>

    <!--Box-->
    <section class="infobox">
        <h1>Work with the best if you want to be the best!</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis expedita dolore vel porro laborum <br>
            aut sequi doloremquelibero, eum excepturi?</p>
        <a href="joinus.php"><button class="btn joinus-btn">Join Us Now</button></a>
        <a href="company.php"><button class="btn hire-btn">Hire a Freelancer</button></a>
    </section>

    <!--------SlideShow---------------->
    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <a href="services/web.php"><img src="images/web.jpg" style="width:100%"></a>
            <div class="text">Web Developers</div>
        </div>

        <div class="mySlides fade">
            <a href="services/mob.php"><img src="images/mobile.jpeg" style="width:100%"></a>
            <div class="text">Mobile Developers</div>
        </div>

        <div class="mySlides fade">
            <a href="services/app.php"><img src="images/appdev.jpg" style="width:100%"></a>
            <div class="text">Windows App Developers</div>
        </div>
        <div class="mySlides fade">
            <a href="services/gd.php"><img src="images/GD.jpg" style="width:100%"></a>
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
            <div class="services-col">
                <a href="#">
                    <h3>Our newest Graphic Designers</h3>
                </a>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius eaque id, veniam quidem a officiis
                    accusamus. Nemo provident pariatur placeat!</p>
            </div>
            <div class="services-col">
                <a href="#">
                    <h3>Our newest Mobile Developers</h3>
                </a>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius eaque id, veniam quidem a officiis
                    accusamus. Nemo provident pariatur placeat!</p>
            </div>
            <div class="services-col">
                <a href="#">
                    <h3>Our newest Web Developers</h3>
                </a>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius eaque id, veniam quidem a officiis
                    accusamus. Nemo provident pariatur placeat!</p>
            </div>
        </div>
    </section>
    <section class="work-companies">
        <h1>Companies we work with</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, tempore.</p>
        <div class="work">
            <div class="work-col">
                <img src="/images/companylogo1.jpg" alt="">
                <h3>Robert Half International</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, cum.</p>
            </div>
            <div class="work-col">
                <img src="/images/companylogo2.jpg" alt="">
                <a href="#">
                    <h3>Microsoft</h3>
                </a>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga, quasi?</p>
            </div>
            <div class="work-col">
                <img src="/images/companylogo3.jpg" alt="">
                <a href="#">
                    <h3>Amazon</h3>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, et.</p>
            </div>
            <div class="work-col">
                <img src="/images/google.png" alt="">
                <a href="#">
                    <h3>Google</h3>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, incidunt?</p>
            </div>
        </div>
    </section>
    <!--comment section-->
    <section class="comments">
        <h1>What our users think</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, sunt!</p>
        <div class="row">
            <div class="comments-col">
                <img src="/images/leart.png" alt="">
                <div class="comments-text">
                    <p name='message'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum suscipit ratione maiore?</p>
                    <h4>Leart Bytyqi</h4>
                </div>
            </div>
            <div class="comments-col">
                <img src="/images/blina.png" alt="">
                <div class="comments-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est libero inventore iusto.</p>
                    <h4>Blina Avdullahu</h4>
                </div>
            </div>
        </div>
    </section>
    <!--section class="commentbox">
    <?php
     echo "<form>
            <input type='hidden' name='usersID' value='Anonymous'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea name='message'></textarea><br>
            <button name='submit' type='submit'>Comment</button>
        </form>";
    ?>
    </section-->
    
    

    <!--footer-->
    <?php
    include_once "footer.php"; 
    ?>