<?php

if(isset($_POST["submit"])){

    $name=$_POST["name"];
    $email=$_POST["email"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $pwdRepeat=$_POST["pwdRepeat"];

    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    $signup=new SignupContr($name,$email,$username,$password,$pwdRepeat);

    $signup->signupUser();

    header("location: ../login.php?error=none");
    exit();


}