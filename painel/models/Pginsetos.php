<?php

class Pginsetos extends model {
  public function createInseto($image, $name, $description){
    $sql = "INSERT INTO pginsetos SET name= :name, image= :image, description= :description";
    $sql = $this->db->prepare($sql);

    $sql->bindValue(':image', $image);
    $sql->bindValue(':name', $name);
    $sql->bindValue(':description', $description);
    $sql->execute();
  }

  public function getInsetos(){
    $data = [];
    $sql = "SELECT * FROM pginsetos";
    $sql = $this->db->prepare($sql);
    $sql->execute();

    $data = ($sql->rowCount() > 0) ? $sql->fetchAll() : [];
    return $data;
  }

  public function getInseto($id){
    $data = [];

    $sql =  "SELECT * FROM pginsetos WHERE id = :id  ";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $data = $sql->fetch();
    }

    return $data;
  }

  public function updateInsetoImage($id, $image){
    $sql= "UPDATE pginsetos SET image= :image WHERE id= :id";
    $sql= $this->db->prepare($sql);

    $sql->bindValue(':image', $image);
    $sql->bindValue(':id', $id);

    $sql->execute();
  }

  public function updateInsetoArticle($id, $article) {
    $sql= "UPDATE pginsetos SET article= :article WHERE id= :id";
    $sql= $this->db->prepare($sql);

    $sql->bindValue(':article', $article);
    $sql->bindValue(':id', $id);

    $sql->execute();
  }

  public function updateInseto($id, $name, $description, $article){
    $sql= "UPDATE pginsetos SET name= :name, description= :description, article= :article WHERE id= :id";
    $sql= $this->db->prepare($sql);

    $sql->bindValue(':name', $name);
    $sql->bindValue(':description', $description);
    $sql->bindValue(':article', $article);
    $sql->bindValue(':id', $id);

    $sql->execute();
  }
  
  public function deleteInseto($id){
    $sql = "DELETE FROM pginsetos WHERE id = :id";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':id', $id);
    $sql->execute();
  }
}