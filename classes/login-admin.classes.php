<?php

class LoginAdmin extends Dbh{

    public function getUser($username, $password){

        $stmt= $this->connect()->prepare('SELECT adminPwd FROM admins WHERE adminUid=? or adminEmail=?;');
        
        if(!$stmt->execute(array($username,$password))){
            $stmt=null;
            header("location: ../login-admin.php?error=stmtFailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt=null;
            header("location: ../login-admin.php?error=userNotFound");
            exit();

        }

        $hashpwd=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd= password_verify($password,$hashpwd[0]["adminPwd"]);

        if($checkPwd==false){
            $stmt=null;
            header("location: ../login-admin.php?error=wrongPassword");
            exit();

        }
        else if($checkPwd==true){
            $stmt= $this->connect()->prepare('SELECT * FROM admins WHERE adminUid=? or adminEmail=? and adminPwd=? ;');

            if(!$stmt->execute(array($username,$username,$password))){
                $stmt=null;
                header("location: ../login-admin.php?error=stmtFailed");
                exit();
            }

            if($stmt->rowCount() == 0){
                $stmt=null;
                header("location: ../login-admin.php?error=userNotFound");
                exit();
    
            }

            $user=$stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["adminId"]=$user[0]["adminID"];
            $_SESSION["adminUid"]=$user[0]["adminUid"];

            $stmt=null;
            
        }

    }


        
}