<?php

use App\Lib\ModelMain;

class AboutModel extends ModelMain
{
    /**
     * lista
     *
     * @return mixed
     */
    public function lista()
    {
        $rscDados = $this->db->db_select("SELECT * FROM about ORDER BY title");
        $aDados = $this->db->db_busca_dados_all($rscDados);

		return count($aDados) > 0 ? $aDados : false;
    }

    /**
     * getMenuId
     *
     * @param  mixed $id
     * @return mixed
     */
    public function getAboutId($id)
    {
        $rscDados = $this->db->db_select("SELECT * FROM about WHERE id = ?", [$id]);
        $aDados = $this->db->db_busca_array($rscDados);

		return count($aDados) > 0 ? $aDados : false;
    }

    /**
     * getMenu
     *
     * @param  mixed 
     * @return mixed
     */
    public function getAbout()
    {
        $rscDados = $this->db->db_select("SELECT * FROM about ORDER BY title");
        $aDados = $this->db->db_busca_array_all($rscDados);

		return count($aDados) > 0 ? $aDados : false;
    }


    /**
     * insert
     *
     * @param  mixed $data
     * @return bool
     */
    
    function insert($data)
    {
        $rs = $this->db->db_insert(
            "INSERT INTO about (title, subtitle, text, image)
            VALUES (?, ?, ?, ?)",
            $data
        );

		return $rs > 0 ? true : false;
    }
    /* function insert($data)
    {
        $rs = $this->db->db_insert(
            "INSERT INTO nossoMenu (titulo, descricao, imagem, preco)
            VALUES (?, ?, ?, ?)",
            $data

        );

		return $rs > 0 ? true : false;
    } */

    /**
     * update
     *
     * @param  mixed $data
     * @return bool
     */
    function update($data)
    {
        $rs = $this->db->db_update(
            "UPDATE about SET title = ?, subtitle = ?, text = ?, image = ?
            WHERE id = ?",
            $data
        );

		return $rs > 0 ? true : false;
    }

    /**
     * delete
     *
     * @param  mixed $id
     * @return bool
     */
    function delete($id)
    {
        $rs = $this->db->db_delete(
            "DELETE FROM about WHERE id = ?",
            [$id]
        );

		return $rs > 0 ? true : false;
    }

}