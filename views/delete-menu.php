<?php
require_once "../classes/MenuController.php";

if(isset($_GET['id'])){
    $id =$_GET['id'];
}

$menu=new MenuController;
$menu->delete($id);


?>