<?php

class DbhAdmin{
    protected function connect(){
        try{
            $username="root";
            $password="";
            $dhb=new PDO('mysql:host=localhost;dbname=admin',$username,$password);
            return $dhb;

        }catch(PDOException $e){
            print "Error! ".$e->getMessage() ."</br>";
            die();
        }

    }

}