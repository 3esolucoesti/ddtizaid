<?php

class Pginsetos extends model
{
  public function getInsetos()
  {
    $data = [];
    $sql = "SELECT * FROM pginsetos";
    $sql = $this->db->prepare($sql);
    $sql->execute();

    $data = ($sql->rowCount() > 0) ? $sql->fetchAll() : [];
    return $data;
  }

  public function getInseto($id)
  {
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
}
