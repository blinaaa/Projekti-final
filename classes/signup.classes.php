<?php

class SignUp extends Dbh{

    public function setUser($name,$email,$username, $password){

        $stmt= $this->connect()->prepare('INSERT INTO users (usersName, usersEmail, usersUid, userspwd) VALUES (?,?,?,?);');

        $hashpwd=password_hash($password,PASSWORD_DEFAULT);
        
        if(!$stmt->execute(array($name,$email,$username,$hashpwd))){
            $stmt=null;
            header("location: ../index.php?error=Somethingwentwrong");
            exit();
        }

        $stmt=null;

    }

    protected function checkUser($username, $email){
        $stmt= $this->connect()->prepare('SELECT usersUid FROM users WHERE usersUid=? OR usersEmail=?;');
        
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