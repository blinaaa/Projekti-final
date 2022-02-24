<?php
    session_start();
?>
<?php
    date_default_timezone_set('Europe/Tirane');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="header">
        <nav>
            <a href=""><img src="https://www.f-cdn.com/assets/main/en/assets/freelancer-logo-open-graph.png" alt=""></a>
            <div class="nav-list" id="nav-list">
                <i class="fas fa-window-close" onclick="hideM()"></i>
                <ul>
                    <li><a href="index.php">home<a></li>
                    <li><a href="aboutus.php">about us<a></li>
                    <li class="dropdown"><div class="dropbtn">OUR SERVICES</div>
                        <div class="dropdown-content">
                            <a href="web.php">Web Development</a>
                            <a href="mob.php">Mobile Development</a>
                            <a href="app.php">App Development</a>
                            <a href="gd.php">Graphic Design</a>
                        </div>
                    </li>
                    <?php
                    if(isset($_SESSION["usersID"])){
                     ?>
                    
                    <li><a href="#">PROFILE</a></li>
                    <li><a href="logout.inc.php">LOG OUT</a></li>
                    <?php
                    }
                    else{
                    ?>
                    <li><a href="login.php">LOG IN<a></li>
                    <li><a href="joinus.php">JOIN US<a></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
            <i class="fas fa-bars" onclick="showM()" id="HamburgerMenu"></i>
        </nav>
    </section>