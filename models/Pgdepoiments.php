<?php

class Pgdepoiments extends model
{
	public function getDepoiments()
	{
		$array = array();

		$sql =  "SELECT * FROM pgdepoiments  ";
		$sql = $this->db->prepare($sql);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
}
