<?php
class Pgabout extends model
{
	public function getinfohome()
	{
		$array = array();

		$sql =  "SELECT * FROM pg_about WHERE id = :id ";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', 1);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}
}
