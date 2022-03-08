<?php
    require_once "../classes/StaffController.php";
    include_once "../must/viewheader.php ";
    
?>

<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>Staff image</th>
              <th>Staff name</th>
              <th>Staff content</th>
              <th></th>
              <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $m=new StaffController;
            $allMenu=$m->readData();
            foreach($allMenu as $menu):
            ?>
            <tr>
                <td><?php echo $menu['staffImage'];?></td>
                <td><?php echo $menu['staffName'];?></td>
                <td><?php echo $menu['staffContent'];?></td>
                <td ><a href="edit-staff.php?id=<?php echo $menu['staffID'];?>">EDIT</a></td>
                <td ><a href="delete-staff.php?id=<?php echo $menu['staffID'];?>">DELETE</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="dashboard">
    <a href="create-staff.php"><button >CreateStaff</button></a>
            </div>
</div>
</body>
</html>