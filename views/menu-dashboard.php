<?php
    require_once "../classes/MenuController.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
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
<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>Freelancer image</th>
              <th>Freelancer name</th>
              <th>Freelancer wage</th>
              <th></th>
              <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $m=new MenuController;
            $allMenu=$m->readData();
            foreach($allMenu as $menu):
            ?>
            <tr>
                <td><?php echo $menu['freelancersImage'];?></td>
                <td><?php echo $menu['freelancersName'];?></td>
                <td><?php echo $menu['freelancersWage'];?></td>
                <td ><a href="edit-menu.php?id=<?php echo $menu['freelancersID'];?>">EDIT</a></td>
                <td ><a href="delete-menu.php?id=<?php echo $menu['freelancersID'];?>">DELETE</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="dashboard">
    <a href="create-menu.php"><button >CreateUser</button></a>
            </div>
</div>
</body>
</html>