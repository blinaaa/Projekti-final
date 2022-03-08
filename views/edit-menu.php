<?php
require_once "../classes/MenuController.php";
include_once "../must/viewheader.php ";

if(isset($_GET['id'])){
    $id =$_GET['id'];
}

$menu=new MenuController;
$currentM=$menu->edit($id);

if(isset($_POST["update"])){
    $menu->update($_POST,$id);
}
?>      >
    <form method="POST" class="login-form">
        <div class="input">
        <span>Image:</span>
        <input type="file" name="image" value="<?php echo $currentM['freelancersImage'];?>">
        </div>
        <div class="input">
        <span>Name:</span>
        <input type="name" name="name" value="<?php echo $currentM['freelancersName'];?>">
        </div>
        <div class="input">
        <span>Wage:</span>
        <input type="number" name="wage" value="<?php echo $currentM['freelancersWage'];?>">
        </div>
        <div class="input">
        <input type="submit" name="update" value="update">
      </div>
</form>
</form>
</div>