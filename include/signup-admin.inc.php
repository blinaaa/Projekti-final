<?php

if(isset($_POST["submit"])){

    $name=$_POST["name"];
    $email=$_POST["email"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $pwdRepeat=$_POST["pwdRepeat"];

    include "../classes/dbh-admin.classes.php";
    include "../classes/signup-admin.classes.php";
    include "../classes/signup-contr-admin.classes.php";

    $signup=new SignupContrAdmin($name,$email,$username,$password,$pwdRepeat);

    $signup->signupUser();

    header("location: ../login-admin.php?error=none");
    exit();


}