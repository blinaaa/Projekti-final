<?php

require_once "dbh.classes.php";

class StaffController extends Dbh{
    public $db;

    public function __construct(){
        $this->db = new Dbh;
    }
    
    public function readData(){
        $stmt=$this->db->connect()->query('SELECT * FROM staff;');

        return $stmt->fetchAll();
    }

    public function insert($request){
        $request['image']=' images/'.$request['image'];
        $stmt= $this->db->connect()->prepare('INSERT INTO staff(staffImage,staffName,staffContent)
         values (:staffImage,:staffName,:staffContent);');

        $stmt->bindParam(':staffImage',$request['image']);
        $stmt->bindParam(':staffName',$request['name']);
        $stmt->bindParam(':staffContent',$request['content']);
        $stmt->execute();

        return header("location: staff-dashboard.php?error=none");
    }

    public function edit($id){
        $stmt= $this->db->connect()->prepare('SELECT * FROM staff WHERE staffID=:id ');
        $stmt->bindParam(':id',$id);
        $stmt->execute();

        return $stmt->fetch();

    }

    public function update($request, $id){
        $stmt= $this->db->connect()->prepare('UPDATE staff 
        SET staffImage=:staffImage,staffName=:staffName,staffContent=:staffContent
        WHERE staffID=:id;');
        $stmt->bindParam(':staffImage',$request['image']);
        $stmt->bindParam(':staffName',$request['name']);
        $stmt->bindParam(':staffContent',$request['content']);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return header("location: staff-dashboard.php?EditDone");
    }
    public function delete($id){
        $stmt=$this->db->connect()->prepare('DELETE FROM staff WHERE staffID=:id ;');
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return header("location: staff-dashboard.php?DeleteDone");
    }
}