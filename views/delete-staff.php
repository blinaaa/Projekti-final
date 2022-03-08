<?php
require_once "../classes/StaffController.php";

if(isset($_GET['id'])){
    $id =$_GET['id'];
}

$menu=new StaffController;
$menu->delete($id);


?>