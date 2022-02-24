<?php

class Dbh{
    protected function connect(){
        try{
            $username="root";
            $password="";
            $dhb=new PDO('mysql:host=localhost;dbname=projekti',$username,$password);
            return $dhb;

        }catch(PDOException $e){
            print "Error! ".$e->getMessage() ."</br>";
            die();
        }

    }

}