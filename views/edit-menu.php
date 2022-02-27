<?php
require_once "../classes/MenuController.php";

if(isset($_GET['id'])){
    $id =$_GET['id'];
}

$menu=new MenuController;
$currentM=$menu->edit($id);

if(isset($_POST["update"])){
    $menu->update($_POST,$id);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <section class="header">
        <nav>
            <a href=""><img src="https://www.f-cdn.com/assets/main/en/assets/freelancer-logo-open-graph.png" alt=""></a>
            <div class="nav-list" id="nav-list">
                <i class="fas fa-window-close" onclick="hideM()"></i>
                <ul>
                    <li><a href="create-menu.php">create user<a></li>
                    <li class="dropdown"><div class="dropbtn">create content</div>
                        <div class="dropdown-content">
                            <a href="#">Add page</a>
                            <a href="#">Add post</a>
                            <a href="#">create project</a>
                        </div>
                    </li>
                    <li><a href="../dashboard.php">MyAdmin</a></li>
                    <li><a href="../logout.inc.php">LOG OUT</a></li>
                </ul>
            </div>
            <i class="fas fa-bars" onclick="showM()" id="HamburgerMenu"></i>
        </nav>
    </section>
<!--form method="POST">
        Image:
        <input type="file" name="image" value="<?php echo $currentM['freelancersImage'];?>">
        <br>
        Name:
        <input type="name" name="name" value="<?php echo $currentM['freelancersName'];?>">
        <br>
        Wage:
        <input type="number" name="wage" value="<?php echo $currentM['freelancersWage'];?>">
        <br>
        <input type="submit" name="update" value="update"-->
        >
    <form method="POST" class="login-form">
        <div class="input">
        <span>Image:</span>
        <input type="file" name="image" value="<?php echo $currentM['freelancersImage'];?>">
        </div>
        <div class="input">
        <span>Name:</span>
        <input type="name" name="name" value="<?php echo $currentM['freelancersName'];?>">
        </div>
        <div class="input">
        <span>Wage:</span>
        <input type="number" name="wage" value="<?php echo $currentM['freelancersWage'];?>">
        </div>
        <div class="input">
        <input type="submit" name="update" value="update">
      </div>
</form>
</form>
</div>