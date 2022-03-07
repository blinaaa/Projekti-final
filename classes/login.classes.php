<?php

class Login extends Dbh{

    public function getUser($username, $password){

        $stmt= $this->connect()->prepare('SELECT userspwd FROM users WHERE usersUid=? or usersEmail=?;');
        
        if(!$stmt->execute(array($username,$password))){
            $stmt=null;
            header("location: ../login.php?error=stmtFailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt=null;
            header("location: ../login.php?error=userNotFound");
            exit();

        }

        $hashpwd=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd= password_verify($password,$hashpwd[0]["userspwd"]);

        if($checkPwd==false){
            $stmt=null;
            header("location: ../login.php?error=wrongPassword");
            exit();

        }
        else if($checkPwd==true){
            $stmt= $this->connect()->prepare('SELECT * FROM users WHERE usersUid=? or usersEmail=? and userspwd=? ;');

            if(!$stmt->execute(array($username,$username,$password))){
                $stmt=null;
                header("location: ../login.php?error=stmtFailed");
                exit();
            }

            if($stmt->rowCount() == 0){
                $stmt=null;
                header("location: ../login.php?error=userNotFound");
                exit();
    
            }

            $user=$stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["usersID"]=$user[0]["usersID"];
            $_SESSION["usersUid"]=$user[0]["usersUid"];

            $stmt=null;
            
        }

    }


        
}