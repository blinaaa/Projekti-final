<?php
    require_once "../classes/PostController.php";
    include_once "../must/viewheader.php ";
    
?>
            <table class="content-table">
                <thead>
                    <tr>
                    <th>Post Title</th>
                    <th>Post Content</th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    $p=new PostController;
                    $allPosts=$p->readData();
                    foreach($allPosts as $post):
                    ?>
                    <tr>
                        <td><?php echo $post['postsTitle'];?></td>
                        <td><?php echo $post['postsContent'];?></td>
                        <td ><a href="edit-post.php?id=<?php echo $post['postsID'];?>">EDIT</a></td>
                        <td ><a href="delete-post.php?id=<?php echo $post['postsID'];?>">DELETE</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="dashboard">
                <a href="create-post.php"><button >CreateNewPost</button></a>
            </div>
    </div>