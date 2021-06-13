<?php

use App\Lib\ModelMain;

class UsersModel extends ModelMain
{
	public $table = 'user';

	public function getUsers()
	{
		$rsc = $this->db->db_select("SELECT * FROM $this->table");
		$users = $this->db->db_busca_dados_all($rsc);

		return count($users) > 0 ? $users : false;
	}

	public function getUser($id)
	{
		$rsc = $this->db->db_select("SELECT * FROM $this->table WHERE id = ?", [$id]);
		$user = $this->db->db_busca_array($rsc);

		return count($user) > 0 ? $user : false;
	}

	function insert($data)
	{
		$rs = $this->db->db_insert(
			"INSERT INTO $this->table (name, email, password, type, status)
            VALUES (?, ?, ?, ?, ?)",
			$data
		);

		return $rs > 0 ? true : false;
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
