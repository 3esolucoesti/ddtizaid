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

  public function addService($service_title, $service_description)
  {
    $sql =  "INSERT INTO pgservices SET title = :title, description = :description";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':title', $service_title);
    $sql->bindValue(':description', $service_description);
    $sql->execute();
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

  public function updateService($id, $title, $description)
  {
    $sql = "UPDATE  pgservices SET title = :title, description = :description WHERE id = :id  ";
    $sql = $this->db->prepare($sql);

    $sql->bindValue(':title', $title);
    $sql->bindValue(':description', $description);
    $sql->bindValue(':id', $id);

    $sql->execute();
  }

  public function deleteServiceId($id)
  {
    $sql = "DELETE FROM  pgservices WHERE id = :id  ";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':id', $id);
    $sql->execute();
  }
}
