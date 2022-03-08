<?php
require_once "../classes/MenuController.php";

include_once "../must/viewheader.php ";

$menu=new MenuController;

if(isset($_POST["submit"])){
    $menu->insert($_POST);
}
?>


<div>
    <form method="POST" class="login-form">
        <div class="input">
        <span>Image:</span>
        <input type="file" name="image">
        </div>
        <div class="input">
        <span>Name:</span>
        <input type="name" name="name">
        </div>
        <div class="input">
        <span>Wage:</span>
        <input type="number" name="wage" >
        </div>
        <div class="input">
          <input type="submit" name="submit" value="save">
      </div>
</form>
</div>