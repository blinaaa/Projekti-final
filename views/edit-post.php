<?php
require_once "../classes/PostController.php";

if(isset($_GET['id'])){
    $id =$_GET['id'];
}

$menu=new PostController;
$currentM=$menu->edit($id);

if(isset($_POST["update"])){
    $menu->update($_POST,$id);
}
?>      >
    <form method="POST" class="login-form">
        <div class="input">
        <span>Title:</span>
        <input type="textarea" name="title" value="<?php echo $currentM['postsTitle'];?>">
        </div>
        <div class="input">
        <span>Content:</span>
        <input type="textarea" name="content" value="<?php echo $currentM['postsContent'];?>">
        </div>
        <div class="input">
        <input type="submit" name="update" value="update">
      </div>
</form