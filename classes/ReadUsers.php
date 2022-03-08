<?php

require_once "dbh.classes.php";

class ReadUsers extends Dbh{
    public $db;

    public function __construct(){
        $this->db = new Dbh;
    }
    
    public function readUser(){
        $stmt=$this->db->connect()->query('SELECT * FROM users;');

        return $stmt->fetchAll();
    }
}