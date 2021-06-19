<?php

use App\Lib\ModelMain;

class MainModel extends ModelMain
{
	public $table = 'home';

	public function getListHome()
	{
		$rsc = $this->db->db_select("SELECT * FROM $this->table");
		$data = $this->db->db_busca_dados_all($rsc);

		return count($data) > 0 ? $data : false;
	}

	public function getHome($id)
	{
		$rsc = $this->db->db_select("SELECT * FROM $this->table WHERE id = ?", [$id]);
		$data = $this->db->db_busca_array($rsc);

		return count($data) > 0 ? $data : false;
	}

	public function getActiveHome()
	{
		$rsc = $this->db->db_select("SELECT * FROM $this->table WHERE status = 'A' LIMIT 1");
		$data = $this->db->db_busca_array($rsc);

		return count($data) > 0 ? $data : false;
	}

	function insert($data)
	{
		$rs = $this->db->db_insert(
			"INSERT INTO $this->table (status, subtitle, logoImg, bgImg, heroTitle, heroImg)
            VALUES (?, ?, ?, ?, ?, ?)",
			$data
		);

		return $rs > 0 ? true : false;
	}

	function update($data)
	{
		$rs = $this->db->db_update(
			"UPDATE $this->table SET status = ?, subtitle = ?, logoImg = ?, bgImg = ?, heroTitle = ?, heroImg = ?
            WHERE id = ?",
			$data
		);

		return $rs > 0 ? true : false;
	}

	function delete($id)
	{
		$rs = $this->db->db_delete(
			"DELETE FROM $this->table WHERE id = ?",
			[$id]
		);

		return $rs > 0 ? true : false;
	}
}
