<?php

use App\Lib\ControllerMain;
use App\Lib\Utilitarios;
use App\Lib\Redirect;
use App\Lib\Session;

class Products extends ControllerMain
{
	private $uploadFolder = 'assets/img/products/';

	public function __construct($dados)
	{
		parent::__construct($dados);
		$this->estaLogado();
	}

	public function index()
	{
		$this->loadView('admin/products/list', $this->model->getProducts());
	}

	public function form()
	{
		$data = [];

		if ($this->dados['acao'] != 'new') {
			$data = $this->model->getProduct($this->dados['id']);
		}

		$this->loadView('admin/products/form', $data);
	}

	private function getFiles()
	{
		$arrFiles = [];

		if (isset($_FILES['img'])) {
			$files = $_FILES['img'];

			for ($x = 0; $x < count($files['name']); $x++) {
				if ($files['size'][$x] > 0) {
					$arrFiles[] = [
						'name' => $files['name'][$x],
						'tmp_name' => $files['tmp_name'][$x],
						'type' => $files['type'][$x],
						'size' => $files['size'][$x],
					];
				} else {
					return [];
				}
			}
		}

		return $arrFiles;
	}

	private function isValidUpload($files)
	{
		// lista de tipos de arquivos permitidos
		$tiposPermitidos =  array('image/gif', 'image/jpeg', 'image/jpg', 'image/png');

		// tamanho máximo (em bytes)
		$tamanhoPermitido = 1024 * 1024 * 100; //5mb

		foreach ($files as $file) {
			// o tipo do arquivo
			$imgType = $file['type'];

			//o tamanho do arquivo
			$imgSize = $file['size'];

			// verifica o tipo ou tamanho do arquivo enviado
			if (array_search($imgType, $tiposPermitidos) === false) {
				Session::set('msgError', 'Invalid file type (allowed types: jpg, jpeg, png, gif)');
				return false;
			}

			if ($imgSize > $tamanhoPermitido) {
				Session::set('msgError', 'File size exceeds the maximum upload size (max: 5mb)');
				return false;
			}
		}

		return true;
	}

	private function unlinkImages($files, $names)
	{
		foreach ($files as $k => $file) {
			unlink($file['tmp_name'], $this->uploadFolder . $names[$k]);
		}
	}

	public function new()
	{
		$flag = true;
		$names = [];

		$files = $this->getFiles();

		if ($this->isValidUpload($files)) {
			// Armazena a imagem, caso dê erro quebra o loop
			foreach ($files as $k => $file) {
				$names[$k] = Utilitarios::gerarNomeAleatorio($file['name']);

				if (!move_uploaded_file($file['tmp_name'], $this->uploadFolder . $names[$k])) {
					$flag = false;
					break;
				}
			}

			if ($flag) {
				if ($this->model->insert([
					$this->dados['post']['title'],
					$this->dados['post']['description'],
					str_replace(',', '.', str_replace('.', '', $this->dados['post']['price'])),
				], $names)) {
					Redirect::route('products', [
						'msgSucesso' => 'Home page registered!'
					]);

					exit;
				}
			}

			$this->unlinkImages($files, $names);

			Redirect::route('products', [
				'msgError' => 'Failed to register new home page.'
			]);

			exit;
		}

		Redirect::route('products');
	}

	public function update()
	{
		$flag = true;
		$names = [];

		$files = $this->getFiles();

		if (count($files) > 0) {
			if ($this->isValidUpload($files)) {
				// Armazena a imagem, caso dê erro quebra o loop
				foreach ($files as $k => $file) {
					$names[$k] = Utilitarios::gerarNomeAleatorio($file['name']);

					if (!move_uploaded_file($file['tmp_name'], $this->uploadFolder . $names[$k])) {
						$flag = false;
						break;
					}
				}
			}
		}

		if ($flag) {
			if ($this->model->update([
				$this->dados['post']['title'],
				$this->dados['post']['description'],
				str_replace(',', '.', str_replace('.', '', $this->dados['post']['price'])),
				$this->dados['post']['id']
			], $names)) {
				Redirect::route('products', [
					'msgSucesso' => 'Product updated!'
				]);

				exit;
			} else {
				$this->unlinkImages($files, $names);
			}
		}

		Redirect::route('products', [
			'msgError' => 'Failed to update new product.'
		]);
	}

	public function delete()
	{
		if ($this->model->delete($this->dados['post']['id'])) {
			Redirect::route('products', [
				'msgSucesso' => 'Product deleted!'
			]);
		} else {
			Redirect::route('products', [
				'msgErros' => 'Failed to delete product.'
			]);
		}
	}
}
