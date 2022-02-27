<?php

include_once "must/header.php";

?>
<section class="post-header post-header-signup1">
    <h1>Find the best staff with us</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, inventore!</p>
</section>
<!--Sign up box-->
<section class="login">
    <form class="login-form" action="include/signup.inc.php" id="form" method="post" onsubmit="validate()">
        <h1>Sign Up-Company</h1>
        <div class="input">
            <span>Name</span>
            <input type="text" placeholder="Name" id="name" name="name">
        </div>
        <div class="input">
            <span>Email</span>
            <input type="email" placeholder="Email" id="email" name="email">
        </div>
        <div class="input">
            <span>Username</span>
             <input type="text" placeholder="Username" id="username" name="username">
        </div>
        <div class="input">
            <span>Password</span>
            <input type="password" placeholder="Password" id="password" name="password">
        </div>
        <div class="input" id="confirm">
            <span>Confirm Password</span>
            <input type="password" placeholder="Confirm Password" id="confirmPass" name="pwdRepeat">
        </div>
        <div class="input">
            <input type="submit"  name="submit" id="submitBTN">
        </div>
        <div class="inputs"><label>Have an account?<a href="login.html">Log In</a></label></div>
    </form>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo "<p>Fill in all fields!</p>";
        }
        else if($_GET["error"]=="invalidemail"){
            echo "<p>Invalid email, try again!</p>";
        }
        else if($_GET["error"]=="invalidusername"){
            echo "<p>Invalid username, try again!</p>";
        }
        else if($_GET["error"]=="stmtFailed"){
            echo "<p>Something went wrong!</p>";
        }
        else if($_GET["error"]=="umatchedpassword"){
            echo "<p>Password don't match!</p>";
        }
        else if($_GET["error"]=="stmtFailed"){
            echo "<p>Something went wrong!!</p>";
        }
        else if($_GET["error"]=="usernameTaken"){
            echo "<p>Username is already taken! </p>";
        }
    }
    ?>
</section>

<!--footer-->
<?php
      include_once "must/footer.php"; 
?>