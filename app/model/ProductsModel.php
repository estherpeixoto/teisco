<?php

use App\Lib\ModelMain;

class ProductsModel extends ModelMain
{
	public $table = 'product';

	public function getProducts()
	{
		$rsc = $this->db->db_select("SELECT p.*, i.filename, i.alt FROM $this->table as p INNER JOIN productimage as i ON p.id = i.idproduct");
		$users = $this->db->db_busca_dados_all($rsc);

		return count($users) > 0 ? $users : false;
	}

	public function getProduct($id)
	{
		$rsc = $this->db->db_select("SELECT p.*, i.filename, i.alt FROM $this->table as p INNER JOIN productimage as i ON p.id = i.idproduct WHERE id = ?", [$id]);
		$user = $this->db->db_busca_array($rsc);

		return count($user) > 0 ? $user : false;
	}

	function insert($data, $names)
	{
		$rs = $this->db->db_insert(
			"INSERT INTO $this->table (title, description, price) VALUES (?, ?, ?)",
			$data
		);

		if ($rs > 0) {
			foreach ($names as $fileName) {
				$this->db->db_insert(
					"INSERT INTO {$this->table}image (idProduct, filename, alt)
					VALUES (?, ?, ?)",
					[$rs, $fileName, $data[0]]
				);
			}

			return true;
		}

		return false;
	}

	function update($data)
	{
		$rs = $this->db->db_update(
			"UPDATE $this->table SET name = ?, email = ?, type = ?, status = ?
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
