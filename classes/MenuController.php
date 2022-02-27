<?php

require_once "dbh.classes.php";

class MenuController extends Dbh{
    public $db;

    public function __construct(){
        $this->db = new Dbh;
    }
    
    public function readData(){
        $stmt=$this->db->connect()->query('SELECT * FROM freelancers;');

        return $stmt->fetchAll();
    }

    public function insert($request){
        $request['image']='./images/staff/'.$request['image'];
        $stmt= $this->db->connect()->prepare('INSERT INTO freelancers(freelancersImage,freelancersName,freelancersWage)
         values (:freelancersImage,:freelancersName,:freelancersWage);');

        $stmt->bindParam(':freelancersImage',$request['image']);
        $stmt->bindParam(':freelancersName',$request['name']);
        $stmt->bindParam(':freelancersWage',$request['wage']);
        $stmt->execute();

        return header("location: menu-dashboard.php?error=none");
    }

    public function edit($id){
        $stmt= $this->db->connect()->prepare('SELECT * FROM freelancers WHERE freelancersID=:id ');
        $stmt->bindParam(':id',$id);
        $stmt->execute();

        return $stmt->fetch();

    }

    public function update($request, $id){
        $stmt= $this->db->connect()->prepare('UPDATE freelancers 
        SET freelancersImage=:freelancersImage,freelancersName=:freelancersName,freelancersWage=:freelancersWage
        WHERE freelancersID=:id;');

        $stmt->bindParam(':freelancersImage',$request['image']);
        $stmt->bindParam(':freelancersName',$request['name']);
        $stmt->bindParam(':freelancersWage',$request['wage']);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return header("location: menu-dashboard.php?EditDone");
    }
    public function delete($id){
        $stmt=$this->db->connect()->prepare('DELETE FROM freelancers WHERE freelancersID=:id ;');
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return header("location: menu-dashboard.php?DeleteDone");
    }


    

}