<?php
require_once "../classes/PostController.php";

if(isset($_GET['id'])){
    $id =$_GET['id'];
}

$menu=new PostController;
$menu->delete($id);


?>