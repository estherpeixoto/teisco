<?php

use App\Lib\ModelMain;

class AdminModel extends ModelMain
{
    public $table = 'user';

    /*
    *   busca de usuário
    */

    public function getLogin($email)
    {
        $rsc = $this->db->db_select(
            "SELECT * FROM " . $this->table . " WHERE email = ?",
            [$email]
        );

        // $this->db->db_insert(
        //   "INSERT INTO user (status, name, email, password, type )
        //   VALUES (?, ?, ?, ?, ?)",
        //   [
        //       'A',
        //       'Admin',
        //       'admin@admin.com',
        //       password_hash('123', PASSWORD_DEFAULT),
        //       'A',
        //   ]
        // );

        return $this->db->db_busca_dados($rsc);
    }
}