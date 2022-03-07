<?php
    require_once "../classes/CompanyPostController.php";
    
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
                            <a href="posts-dashboard.php">Add post</a>
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
              <th>Company image</th>
              <th>Company name</th>
              <th>Company content</th>
              <th></th>
              <th></th>
            </tr>
        </thead>
        <tbody>
             <?php
                $p=new CompanyPostController;
                $allPosts=$p->readData();
                foreach($allPosts as $post):
                ?>
                <tr>
                    <td><?php echo $post['companyImage'];?></td>
                    <td><?php echo $post['companyName'];?></td>
                    <td><?php echo $post['companyContent'];?></td>
                    <td ><a href="edit-companypost.php?id=<?php echo $post['companyID'];?>">EDIT</a></td>
                    <td ><a href="delete-post.php?id=<?php echo $post['companyID'];?>">DELETE</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
            </table>
            <div class="dashboard">
                <a href="create-companypost.php"><button >CreateNewPost</button></a>
            </div>
    </div>
</body>
</html>