<?php
    require_once "../classes/MenuController.php";
    include_once "../must/viewheader.php ";
    
?>

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