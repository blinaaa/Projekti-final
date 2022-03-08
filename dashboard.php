
<?php
      include_once "must/adminheader.php"; 
      require_once "classes/ReadUsers.php"; 
?>

    <section>
        <div class="main-wrapper">
            <div class="dashboard-overview">
                <div class="mini-header"><h3>Website Overview</h3></div>
                <div class="boxes">
                    <a href="views/menu-dashboard.php"><div class="info-box">
                        <!--i class="fas fa-user"> 203</i-->
                        <h2>Freelancer</h2>
                    </div></a>
                    <a href="views/companypost-dashboard.php"><div class="info-box">
                        <!--i class="fas fa-list-ul"> 7</i-->
                        <h2>Company</h2>
                    </div></a>
                    <a href="views/posts-dashboard.php"><div class="info-box">
                        <!--i class="fas fa-pen"> 12</i-->
                        <h2>Posts</h2>
                    </div></a>
                    <a href="views/staff-dashboard.php"><div class="info-box">
                        <!--i class="fas fa-pen"> 12</i-->
                        <h2>Staff</h2>
                    </div></a>
            </div>

    <div class="UsersTabel">
        <div class="mini-header mini2"><h3>Current Users</h3></div>
            <table class="content-table tabelD">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>UserName</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $m=new ReadUsers;
                    $allMenu=$m->readUser();
                    foreach($allMenu as $menu):
                    ?>
                    <tr>
                        <td><?php echo $menu['usersID'];?></td>
                        <td><?php echo $menu['usersName'];?></td>
                        <td><?php echo $menu['usersEmail'];?></td>
                        <td><?php echo $menu['usersUid'];?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
</section>



<!--footer-->
<?php
  include_once "must/footer.php"; 
?>