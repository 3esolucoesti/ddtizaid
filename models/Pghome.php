<?php

class Pghome extends model
{
  public function getPgHome()
  {
    $array = array();

    $sql = "SELECT *  FROM pghome WHERE id = :id ";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':id', 1);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $array = $sql->fetch();
    }

    return $array;
  }

  public function getSlide()
  {
    $array = array();

    $sql =  "SELECT * FROM pghome_slide ";
    $sql = $this->db->prepare($sql);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $array = $sql->fetchAll();
    }

    return $array;
  }

  public function getPriSlide()
  {
    $array = array();

    $sql =  "SELECT * FROM pghome_slide ORDER BY ID ASC ";
    $sql = $this->db->prepare($sql);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $array = $sql->fetch();
    }

    return $array;
  }

}
