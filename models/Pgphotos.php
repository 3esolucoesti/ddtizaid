<?php

class Pgphotos extends model
{
  public function getPhotos()
  {
    $data = [];
    $sql = "SELECT * FROM pgphotos";
    $sql = $this->db->prepare($sql);

    $sql->execute();

    $data = ($sql->rowCount() > 0) ? $sql->fetchAll() : [];
    return $data;
  }

  public function getPhotosPage($start, $end)
  {
    $data = [];
    $sql = "SELECT * FROM pgphotos LIMIT :start, :end";
    $sql = $this->db->prepare($sql);

    $sql->bindParam(':start', $start, PDO::PARAM_INT);
    $sql->bindParam(':end', $end, PDO::PARAM_INT);

    $sql->execute();

    $data = ($sql->rowCount() > 0) ? $sql->fetchAll() : [];
    return $data;
  }
}
