
<?php
require_once "../classes/CompanyPostController.php";

if(isset($_GET['id'])){
    $id =$_GET['id'];
}

$menu=new CompanyPostController;
$menu->delete($id);


?>