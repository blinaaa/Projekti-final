<?php
require_once "../classes/StaffController.php";
include_once "../must/viewheader.php ";

if(isset($_GET['id'])){
    $id =$_GET['id'];
}

$menu=new StaffController;
$currentM=$menu->edit($id);

if(isset($_POST["update"])){
    $menu->update($_POST,$id);
}
?>      >
    <form method="POST" class="login-form">
        <div class="input">
        <span>Image:</span>
        <input type="file" name="image" value="<?php echo $currentM['staffImage'];?>">
        </div>
        <div class="input">
        <span>Name:</span>
        <input type="name" name="name" value="<?php echo $currentM['staffName'];?>">
        </div>
        <div class="input">
        <span>content:</span>
        <input type="textarea" name="content" value="<?php echo $currentM['staffContent'];?>">
        </div>
        <div class="input">
        <input type="submit" name="update" value="update">
      </div>
</form>
</form>
</div>