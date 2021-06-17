<?php

use App\Lib\ControllerMain;
use App\Lib\Redirect;
use App\Lib\Session;
use App\Lib\Utilitarios;

class About extends ControllerMain
{
	private $uploadFolder = 'assets/img/about/';

	public function __construct($dados)
	{
		parent::__construct($dados);
		$this->estaLogado();
	}

	public function index()
	{
		$this->loadView('admin/about/list', $this->model->getAboutPages());
	}

	public function form()
	{
		$dbDados = [];

		if ($this->dados['acao'] != 'new') {
			$dbDados = $this->model->getAbout($this->dados['id']);
		}

		$this->loadView('admin/about/form', $dbDados);
	}

	private function isValidUpload()
	{
		// lista de tipos de arquivos permitidos
		$tiposPermitidos =  array('image/gif', 'image/jpeg', 'image/jpg', 'image/png');

		// tamanho máximo (em bytes)
		$tamanhoPermitido = 1024 * 1024 * 100; //5mb

		// o tipo do arquivo
		$imgType = $_FILES['img']['type'];

		//o tamanho do arquivo
		$imgSize = $_FILES['img']['size'];

		// verifica o tipo ou tamanho do arquivo enviado
		if (array_search($imgType, $tiposPermitidos) === false) {
			Session::set('msgError', 'Invalid file type (allowed types: jpg, jpeg, png, gif)');
			return false;
		}

		if ($imgSize > $tamanhoPermitido) {
			Session::set('msgError', 'File size exceeds the maximum upload size (max: 5mb)');
			return false;
		}

		return true;
	}

	public function new()
	{
		if ($this->isValidUpload()) {
			$imgName = Utilitarios::gerarNomeAleatorio($_FILES['img']['name']);

			if (move_uploaded_file($_FILES['img']['tmp_name'], $this->uploadFolder . $imgName)) {
				if ($this->model->insert([
					$this->dados['post']['status'],
					$this->dados['post']['title'],
					$this->dados['post']['subtitle'],
					$this->dados['post']['text'],
					$imgName
				])) {
					Redirect::route('about', [
						'msgSucesso' => 'About page registered'
					]);
				} else {
					Redirect::route('about', [
						'msgError' => 'Failed to register new about page'
					]);
				}
			} else {
				Redirect::route('about', [
					'msgError' => 'Failed to upload image'
				]);
			}
		} else {
			Redirect::route('about');
		}
	}

	public function update()
	{
		$imgName =  $this->dados['post']['oldImg'];

		$upload = true;

		// Se foi enviado uma nova imagem
		if (!empty($_FILES['img']['name']) && $this->dados['post']['oldImg'] != $_FILES['img']['name']) {
			if ($this->isValidUpload()) {
				$imgName = Utilitarios::gerarNomeAleatorio($_FILES['img']['name']);

				$upload = move_uploaded_file($_FILES['img']['tmp_name'], $this->uploadFolder . $imgName);

				if ($upload) {
					unlink($this->uploadFolder . $this->dados['post']['oldImg']);
				} else {
					Redirect::route('About', [
						'msgError' => 'Failed to upload image'
					]);
				}
			}
		}

		if ($upload) {
			if ($this->model->update([
				$this->dados['post']['status'],
				$this->dados['post']['title'],
				$this->dados['post']['subtitle'],
				$this->dados['post']['text'],
				$imgName,
				$this->dados['post']['id']
			])) {
				Redirect::route('About', [
					'msgSucesso' => 'About page updated!'
				]);
			} else {
				Redirect::route('About', [
					'msgError' => 'Failed to update about page'
				]);
			}
		}
	}

	public function delete()
	{
		if ($this->model->delete($this->dados['post']['id'])) {
			unlink($this->uploadFolder . $this->dados['post']['oldImg']);

			Redirect::route('About', [
				'msgSucesso' => 'About page deleted!'
			]);
		} else {
			Redirect::route('About', [
				'msgError' => 'Failed to delete about page'
			]);
		}
	}
}
