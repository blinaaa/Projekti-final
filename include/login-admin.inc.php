<?php

if(isset($_POST["submitL"])){

    $username=$_POST["username"];
    $password=$_POST["password"];

    include "../classes/dbh.classes.php";
    include "../classes/login-admin.classes.php";
    include "../classes/login-contr-admin.classes.php";

    $signin=new  LoginContrAdmin($username,$password);

    $signin->loginUser();

    header("location: ../dashboard.php?error=none");
    exit();


}