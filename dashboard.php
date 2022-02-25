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
                    <li class="dropdown"><div class="dropbtn">create content</div>
                        <div class="dropdown-content">
                            <a href="mob.php">Add page</a>
                            <a href="app.php">Add post</a>
                            <a href="gd.php">create project</a>
                        </div>
                    </li>
                    <?php
                    if(isset($_SESSION["usersID"])){
                     ?>
                    
                    <li><a href="dashboard.php">dashboard</a></li>
                    <li><a href="logout.inc.php">LOG OUT</a></li>
                    <?php
                     if($_SESSION["usersUid"]="Admin"){
                         /*header("location dashboard.php"); */

                    ?>
                    <?php
                    }
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

    <section>
        <div class="main-wrapper">
            <div class="dashboard-overview">
                <div class="mini-header"><h3>Website Overview</h3></div>
                <div class="boxes">
                    <a href=""><div class="info-box">
                        <i class="fas fa-user"> 203</i>
                        <h2>Users</h2>
                    </div></a>
                    <a href=""><div class="info-box">
                        <i class="fas fa-list-ul"> 7</i>
                        <h2>Pages</h2>
                    </div></a>
                    <a href=""><div class="info-box">
                        <i class="fas fa-pen"> 12</i>
                        <h2>Posts</h2>
                    </div></a>
                    <a href=""><div class="info-box">
                        <i class="fas fa-signal">12,455</i>
                        <h2>Visits</h2>
                    </div></a>
                </div>

            </div>
            <div class="tabels">
                <div class="info info-employee">
                    <header><h3>Latest Users</h3></header>
                    <table class="table table-users">
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Joined</th>
                    </tr>
                    <tr>
                        <td>Leart</td>
                        <td>leartbytyqi@gmail.com</td>
                        <td>28.02.2022</td>
                    </tr>
                    <tr>
                        <td>Ana</td>
                        <td>ana_a@gmail.com</td>
                        <td>29.02.2022</td>
                    </tr>
                    <tr>
                        <td>Leonora</td>
                        <td>leonora_20@gmail.com</td>
                        <td>20.09.2021</td>
                    </tr>
                    <tr>
                        <td>Leonora</td>
                        <td>leonora_20@gmail.com</td>
                        <td>20.09.2021</td>
                    </tr>
                    <tr>
                        <td>Leonora</td>
                        <td>leonora_20@gmail.com</td>
                        <td>20.09.2021</td>
                    </tr>
                    <tr>
                        <td>Leonora</td>
                        <td>leonora_20@gmail.com</td>
                        <td>20.09.2021</td>
                    </tr>
                    <tr>
                        <td>Leonora</td>
                        <td>leonora_20@gmail.com</td>
                        <td>20.09.2021</td>
                    </tr>
                    <tr>
                        <td>Leonora</td>
                        <td>leonora_20@gmail.com</td>
                        <td>20.09.2021</td>
                    </tr>
                    <tr>
                        <td>Leonora</td>
                        <td>leonora_20@gmail.com</td>
                        <td>20.09.2021</td>
                    </tr>
                    <tr>
                        <td>Leonora</td>
                        <td>leonora_20@gmail.com</td>
                        <td>20.09.2021</td>
                    </tr>
                    
                    
                    </table>
                </div>
                <div class="info info-company">
                    <header><h3>Latest Companies</h3></header>
                    <table class="table table-users">
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Joined</th>
                    </tr>
                    <tr>
                        <td>Leart</td>
                        <td>leartbytyqi@gmail.com</td>
                        <td>28.02.2022</td>
                    </tr>
                    <tr>
                        <td>Ana</td>
                        <td>ana_a@gmail.com</td>
                        <td>29.02.2022</td>
                    </tr>
                    <tr>
                        <td>Leonora</td>
                        <td>leonora_20@gmail.com</td>
                        <td>20.09.2021</td>
                    </tr>
                    <tr>
                        <td>Leonora</td>
                        <td>leonora_20@gmail.com</td>
                        <td>20.09.2021</td>
                    </tr>
                    <tr>
                        <td>Leonora</td>
                        <td>leonora_20@gmail.com</td>
                        <td>20.09.2021</td>
                    </tr>
                    <tr>
                        <td>Leonora</td>
                        <td>leonora_20@gmail.com</td>
                        <td>20.09.2021</td>
                    </tr>
                    <tr>
                        <td>Leonora</td>
                        <td>leonora_20@gmail.com</td>
                        <td>20.09.2021</td>
                    </tr>
                    <tr>
                        <td>Leonora</td>
                        <td>leonora_20@gmail.com</td>
                        <td>20.09.2021</td>
                    </tr>
                    <tr>
                        <td>Leonora</td>
                        <td>leonora_20@gmail.com</td>
                        <td>20.09.2021</td>
                    </tr>
                    </table>
                </div>

        </div>
        <div class="tabels">
            <div class="info info-project">
                <header><h3>Latest Users</h3></header>
                <table class="table table-project">
                <tr>
                    <th>Employe</th>
                    <th>Company</th>
                    <th>Date</th>
                </tr>
                <tr>
                    <td>Leart</td>
                    <td>Apple</td>
                    <td>28.02.2022-28.04.2022</td>
                </tr>
                <tr>
                    <td>Leart</td>
                    <td>Apple</td>
                    <td>28.02.2022-28.04.2022</td>
                </tr>
                <tr>
                    <td>Leart</td>
                    <td>Apple</td>
                    <td>28.02.2022-28.04.2022</td>
                </tr>
                <tr>
                    <td>Leart</td>
                    <td>Apple</td>
                    <td>28.02.2022-28.04.2022</td>
                </tr>
                <tr>
                    <td>Leart</td>
                    <td>Apple</td>
                    <td>28.02.2022-28.04.2022</td>
                </tr>
                </table>
            </div>
        </div>
    </div>
    </div>
    
</section>




<!--footer-->
<?php
include_once "footer.php"; 
?>