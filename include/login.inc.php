<?php

if(isset($_POST["submitL"])){

    $username=$_POST["username"];
    $password=$_POST["password"];

    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";

    $signin=new  LoginContr($username,$password);

    $signin->loginUser();

    header("location: ../index.php?error=none");
    exit();


}