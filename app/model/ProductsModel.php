<?php

use App\Lib\ModelMain;

class ProductsModel extends ModelMain
{
	public $table = 'product';

	public function getProducts()
	{
		$rsc = $this->db->db_select(
			"SELECT p.*, i.filename, i.alt
			FROM $this->table as p
			INNER JOIN {$this->table}image as i ON p.id = i.idproduct
			GROUP BY id"
		);

		$products = $this->db->db_busca_dados_all($rsc);

		return count($products) > 0 ? $products : false;
	}

	public function getProduct($id, $isForm = false)
	{
		$rsc = $this->db->db_select("SELECT * FROM $this->table WHERE id = ?", [$id]);
		$product = $this->db->db_busca_array($rsc);

		$rsc = $this->db->db_select("SELECT filename, alt FROM {$this->table}image WHERE idProduct = ?", [$id]);
		$image = $this->db->db_busca_array_all($rsc);

		return count($product) > 0 ? ($isForm ? $product : ['product' => $product, 'img' => $image]) : false;
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

	private function unlinkImages($idProduct)
	{
		// Busca imagens cadastradas
		$rsc = $this->db->db_select("SELECT filename FROM {$this->table}image WHERE idProduct = ?", [$idProduct]);
		$images = $this->db->db_busca_dados_all($rsc);

		// Exclui da pasta
		foreach ($images as $image) {
			unlink('assets/img/products/' . $image->filename);
		}
	}

	function update($data, $names)
	{
		if (count($names) > 0) {
			// Elimina imagens velhas
			$this->unlinkImages($data[3]);

			// Deleta as imagens cadastradas
			$this->db->db_delete(
				"DELETE FROM {$this->table}image WHERE idProduct = ?",
				[$data[3]]
			);

			// Inclui as novas imagens
			foreach ($names as $fileName) {
				$this->db->db_insert(
					"INSERT INTO {$this->table}image (idProduct, filename, alt)
					VALUES (?, ?, ?)",
					[$data[3], $fileName, $data[0]]
				);
			}
		}

		// Atualiza o produto
		$rs = $this->db->db_update(
			"UPDATE $this->table SET title = ?, description = ?, price = ?
            WHERE id = ?",
			$data
		);

		return $rs > 0 ? true : false;
	}

	function delete($id)
	{
		// Elimina imagens velhas
		$this->unlinkImages($id);

		$rs = $this->db->db_delete(
			"DELETE FROM $this->table WHERE id = ?",
			[$id]
		);

		return $rs > 0 ? true : false;
	}
}
