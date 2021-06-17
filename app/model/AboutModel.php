<?php

use App\Lib\ModelMain;

class AboutModel extends ModelMain
{
	public $table = 'about';

	public function getAboutPages()
	{
		$rs = $this->db->db_select("SELECT * FROM $this->table ORDER BY status, title");
		$data = $this->db->db_busca_dados_all($rs);

		return count($data) > 0 ? $data : false;
	}

	public function getAbout($id)
	{
		$rs = $this->db->db_select("SELECT * FROM $this->table WHERE id = ?", [$id]);
		$data = $this->db->db_busca_array($rs);

		return count($data) > 0 ? $data : false;
	}

	function insert($data)
	{
		$rs = $this->db->db_insert(
			"INSERT INTO $this->table (status, title, subtitle, text, img)
            VALUES (?, ?, ?, ?, ?)",
			$data
		);

		return $rs > 0 ? true : false;
	}

	function update($data)
	{
		$rs = $this->db->db_update(
			"UPDATE $this->table SET status = ?, title = ?, subtitle = ?, text = ?, img = ?
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
