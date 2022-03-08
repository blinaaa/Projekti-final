<?php
    require_once "../classes/CompanyPostController.php";
    include_once "../must/viewheader.php ";
    
?>
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