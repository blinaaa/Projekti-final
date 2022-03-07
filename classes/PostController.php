<?php

require_once "dbh.classes.php";

class PostController extends Dbh{
    public $db;

    public function __construct(){
        $this->db = new Dbh;
    }
    
    public function readData(){
        $stmt=$this->db->connect()->query('SELECT * FROM posts;');

        return $stmt->fetchAll();
    }

    public function insert($request){
        $stmt= $this->db->connect()->prepare('INSERT INTO posts(postsTitle, postsContent)
         values (:postsTitle,:postsContent);');

        $stmt->bindParam(':postsTitle',$request['title']);
        $stmt->bindParam(':postsContent',$request['content']);
        $stmt->execute();

        return header("location: posts-dashboard.php?error=none");
    }

    public function edit($id){
        $stmt= $this->db->connect()->prepare('SELECT * FROM posts WHERE postsID=:id ');
        $stmt->bindParam(':id',$id);
        $stmt->execute();

        return $stmt->fetch();

    }

    public function update($request, $id){
        $stmt= $this->db->connect()->prepare('UPDATE posts 
        SET postsTitle=:postsTitle,postsContent=:postsContent
        WHERE postsID=:id;');

        $stmt->bindParam(':postsTitle',$request['title']);
        $stmt->bindParam(':postsContent',$request['content']);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return header("location: posts-dashboard.php?EditDone");
    }
    public function delete($id){
        $stmt=$this->db->connect()->prepare('DELETE FROM posts WHERE postsID=:id ;');
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return header("location: posts-dashboard.php?DeleteDone");
    }


    

}