<?php
class Pgservices extends model
{

  public function getServices()
  {
    $data = array();

    $sql =  "SELECT * FROM pgservices";
    $sql = $this->db->prepare($sql);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $data = $sql->fetchAll();
    }

    return $data;
  }

  public function getServiceId($id)
  {
    $data = [];

    $sql =  "SELECT * FROM pgservices WHERE id = :id  ";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $data = $sql->fetch();
    }

    return $data;
  }
}
