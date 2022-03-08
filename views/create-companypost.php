<?php
require_once "../classes/CompanyPostController.php";
include_once "../must/viewheader.php ";


$menu=new CompanyPostController;

if(isset($_POST["submit"])){
    $menu->insert($_POST);
}
?>
<?php
    session_start();
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
        <span>Content:</span>
        <input type="textarea" name="content" >
        </div>
        <div class="input">
          <input type="submit" name="submit" value="save">
      </div>
</form>
</div>