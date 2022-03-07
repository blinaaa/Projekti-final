<?php

require_once "dbh.classes.php";

class CompanyPostController extends Dbh{
    public $db;

    public function __construct(){
        $this->db = new Dbh;
    }
    
    public function readData(){
        $stmt=$this->db->connect()->query('SELECT * FROM company;');

        return $stmt->fetchAll();
    }

    public function insert($request){
        $request['image']='./images/'.$request['image'];
        $stmt= $this->db->connect()->prepare('INSERT INTO company(companyImage,companyName,companyContent)
         values (:companyImage,:companyName,:companyContent);');

        $stmt->bindParam(':companyImage',$request['image']);
        $stmt->bindParam(':companyName',$request['name']);
        $stmt->bindParam(':companyContent',$request['content']);
        $stmt->execute();

        return header("location: companypost-dashboard.php?error=none");
    }

    public function edit($id){
        $stmt= $this->db->connect()->prepare('SELECT * FROM company WHERE companyID=:id ');
        $stmt->bindParam(':id',$id);
        $stmt->execute();

        return $stmt->fetch();

    }

    public function update($request, $id){
        $stmt= $this->db->connect()->prepare('UPDATE company 
        SET companyImage=:companyImage,companyName=:companyName,companyContent=:companyContent
        WHERE companyID=:id;');

        $stmt->bindParam(':companyImage',$request['image']);
        $stmt->bindParam(':companyName',$request['name']);
        $stmt->bindParam(':companyContent',$request['content']);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return header("location: companypost-dashboard.php?EditDone");
    }
    public function delete($id){
        $stmt=$this->db->connect()->prepare('DELETE FROM company WHERE companyID=:id ;');
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return header("location: companypost-dashboard.php?DeleteDone");
    }
}