<?php
require_once "../classes/PostController.php";
include_once "../must/viewheader.php ";



$menu=new PostController;

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
        <span>Title:</span>
        <input type="text" name="title">
        </div>
        <div class="input">
        <span>Content:</span>
        <input type="text" name="content">
        </div>
        <div class="input">
          <input type="submit" name="submit" value="save">
      </div>
</form>
</div>