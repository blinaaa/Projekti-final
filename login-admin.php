<?php
include_once "must/header.php";
?>
<section class="post-header post-header-login">
        <h1>Welcome Back</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, inventore!</p>
</section>

 <!--Log In box-->
 <section class="login">
     <form action="include/login-admin.inc.php" class="login-form" method="post">
        <h1>Log In</h1>
        <div class="input">
            <span>Username</span>
            <input type="text" placeholder="Username/Email" name="username">
        </div>
        <div class="input">
          <span>Password</span>
          <input type="password" placeholder="Password" name="password">
      </div>
      <div class="input" id="forgot-label">
          <label for=""><a href="#">Forgot password?</a></label>
      </div>
      <div class="input">
          <input type="submit" name="submitL">
      </div>
          <div class="input"><label><a href="login.php">I'm a user</a></label> </div>
          
     </form>
     <?php
    if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo "<p>Fill in all fields!</p>";
        }
        else if($_GET["error"]=="userNotFound"){
            echo "<p>Incorrect Username, please try again!</p>";
        }
        else if($_GET["error"]=="wrongPassword"){
            echo "<p>Incorrect Password, please try again!</p>";
        }
        else if($_GET["error"]=="stmtFailed"){
            echo "<p>Something went wrong!!</p>";
        }
    }
    ?>
 </section>
<!--footer-->
<?php
      include_once "must/footer.php"; 
?>