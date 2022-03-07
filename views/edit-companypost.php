<?php
require_once "../classes/CompanyPostController.php";

if(isset($_GET['id'])){
    $id =$_GET['id'];
}

$menu=new CompanyPostController;
$currentM=$menu->edit($id);

if(isset($_POST["update"])){
    $menu->update($_POST,$id);
}
?>      >
    <form method="POST" class="login-form">
        <div class="input">
        <span>Image:</span>
        <input type="file" name="image" value="<?php echo $currentM['companyImage'];?>">
        </div>
        <div class="input">
        <span>Name:</span>
        <input type="name" name="name" value="<?php echo $currentM['companyName'];?>">
        </div>
        <div class="input">
        <span>Content:</span>
        <input type="number" name="content" value="<?php echo $currentM['companyContent'];?>">
        </div>
        <div class="input">
        <input type="submit" name="update" value="update">
      </div>
</form>
</form>
</div>