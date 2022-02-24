<?php

class SignupContr extends SignUp{
    private $name;
    private $email;
    private $username;
    private $password;
    private $pwdRepeat;

    public function __construct($name,$email,$username,$password,$pwdRepeat){
        $this->name=$name;
        $this->email=$email;
        $this->username=$username;
        $this->password=$password;
        $this->pwdRepeat=$pwdRepeat;

    }

    public function signupUser(){
       if($this-> emptyInput() == false){
           header("location: ../company.php?error=emptyinput");
           exit();
       } 
       if($this-> invalidEmail()== false){
        header("location: ../company.php?error=invalidemail");
        exit();
        } 
        if($this->invalidUsername()== false){
            header("location: ../company.php?error=invalidusername");
            exit();
        } 
        if($this->matchedPwd()== false){
            header("location: ../company.php?error=umatchedpassword");
            exit();
        } 
        if($this-> UsernameTaken() == false){
            header("location: ../company.php?error=usernameTaken");
            exit();
        } 
        
        $this->setUser($this->name,$this->email,$this->username,$this-> password);

    }

    private function emptyInput(){
        $result;
        if(empty($this->name) || empty($this->email) || empty($this->username) || empty($this->password) || empty($this->pwdRepeat)){
            $result= false;
        }
        else{
            $result= true;
        }
        return $result;
    }

    private function invalidUsername(){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
            $result=false;
        }else{
            $result=true;
        }
        return $result;
    }
    private function invalidEmail(){
        $result;
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){     
            $result=false;
        }
        else{
            $result= true;
        }
        return $result;
    
    }
    private function matchedPwd(){
        $result;
        if($this->password !== $this->pwdRepeat){
            $result=false;
        }else{
            $result=true;
        }
        return $result;
    }
    private function UsernameTaken(){
        $result;
        if(!$this->checkUser($this->username,$this->email)){
            $result=false;
        }else{
            $result=true;
        }
        return $result;
    }
    
    
    
}