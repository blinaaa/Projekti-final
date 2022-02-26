<?php

class SignUpAdmin extends DbhAdmin{

    public function setUser($name,$email,$username, $password){

        $stmt= $this->connect()->prepare('INSERT INTO admins (adminName, adminEmail, adminUid, adminpwd) VALUES (?,?,?,?);');

        $hashpwd=password_hash($password,PASSWORD_DEFAULT);
        
        if(!$stmt->execute(array($name,$email,$username,$hashpwd))){
            $stmt=null;
            header("location: ../index.php?error=Somethingwentwrong");
            exit();
        }

        $stmt=null;

    }

    protected function checkUser($username, $email){
        $stmt= $this->connect()->prepare('SELECT adminUid FROM admins WHERE adminUid=? OR adminEmail=?;');
        
        if(!$stmt->execute(array($username, $email))){
            $stmt=null;
            header("location: ../index.php?error=stmtFailed");
            exit();
        }

        $resultCheck;

        if($stmt->rowCount()>0){
            $resultCheck=false;
        }
        else{
            $resultCheck=true;
        }
        return $resultCheck;

    }

}