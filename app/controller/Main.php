<?php

use App\Lib\ControllerMain;
use App\Lib\Utilitarios;
use App\Lib\Redirect;
use App\Lib\Session;

class Main extends ControllerMain
{
	private $uploadFolder = 'assets/img/home/';

	public function __construct($dados)
	{
		parent::__construct($dados);
		$this->estaLogado();
	}

	public function index()
	{
		$this->loadView('admin/home/list', $this->model->getListHome());
	}

	public function form()
	{
		$data = [];

		if ($this->dados['acao'] != 'new') {
			$data = $this->model->getHome($this->dados['id']);
		}

		$this->loadView('admin/home/form', $data);
	}

	private function isValidUpload()
	{
		// lista de tipos de arquivos permitidos
		$tiposPermitidos =  array('image/gif', 'image/jpeg', 'image/jpg', 'image/png');

		// tamanho máximo (em bytes)
		$tamanhoPermitido = 1024 * 1024 * 100; // 5mb

		foreach ($_FILES as $file) {
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

	public function new()
	{
		if ($this->isValidUpload()) {
			$flag = false;

			$logoImg = Utilitarios::gerarNomeAleatorio($_FILES['logoImg']['name']);
			$heroImg = Utilitarios::gerarNomeAleatorio($_FILES['heroImg']['name']);
			$bgImg = Utilitarios::gerarNomeAleatorio($_FILES['bgImg']['name']);

			// Faz o upload de todas as imagens, ou bloqueia o insert
			if (
				move_uploaded_file($_FILES['logoImg']['tmp_name'], $this->uploadFolder . $logoImg) &&
				move_uploaded_file($_FILES['heroImg']['tmp_name'], $this->uploadFolder . $heroImg) &&
				move_uploaded_file($_FILES['bgImg']['tmp_name'], $this->uploadFolder . $bgImg)
			) {
				$flag = true;
			} else {
				unlink($this->uploadFolder . $logoImg);
				unlink($this->uploadFolder . $heroImg);
				unlink($this->uploadFolder . $bgImg);
				$flag = false;
			}

			if ($flag) {
				if ($this->model->insert([
					$this->dados['post']['status'],
					$this->dados['post']['subtitle'],
					$logoImg,
					$bgImg,
					$this->dados['post']['heroTitle'],
					$heroImg
				])) {
					Redirect::route('main', [
						'msgSucesso' => 'Home page registered!'
					]);
				} else {
					Redirect::route('main', [
						'msgErros' => 'Failed to register new home page.'
					]);
				}
			} else {
				Redirect::route('main', [
					'msgError' => 'Failed to upload images'
				]);
			}
		} else {
			Redirect::route('main');
		}
	}

	public function update()
	{
		$logoImg =  $this->dados['post']['old_logoImg'];
		$bgImg =  $this->dados['post']['old_bgImg'];
		$heroImg =  $this->dados['post']['old_heroImg'];

		$upload = true;

		// Se foi enviado uma nova imagem
		if (
			(!empty($_FILES['logoImg']['name']) && $logoImg != $_FILES['logoImg']['name']) &&
			(!empty($_FILES['bgImg']['name']) && $bgImg != $_FILES['bgImg']['name']) &&
			(!empty($_FILES['heroImg']['name']) && $heroImg != $_FILES['heroImg']['name'])
		) {
			if ($this->isValidUpload()) {
				$logoImg = Utilitarios::gerarNomeAleatorio($_FILES['logoImg']['name']);
				$bgImg = Utilitarios::gerarNomeAleatorio($_FILES['bgImg']['name']);
				$heroImg = Utilitarios::gerarNomeAleatorio($_FILES['heroImg']['name']);

				$upload = move_uploaded_file($_FILES['logoImg']['tmp_name'], $this->uploadFolder . $logoImg) &&
					move_uploaded_file($_FILES['bgImg']['tmp_name'], $this->uploadFolder . $bgImg) &&
					move_uploaded_file($_FILES['heroImg']['tmp_name'], $this->uploadFolder . $heroImg);

				if ($upload) {
					unlink($this->uploadFolder . $this->dados['post']['old_logoImg']);
					unlink($this->uploadFolder . $this->dados['post']['old_bgImg']);
					unlink($this->uploadFolder . $this->dados['post']['old_heroImg']);
				} else {
					Redirect::route('About', [
						'msgError' => 'Failed to upload images'
					]);
				}
			}
		}

		if ($upload) {
			if ($this->model->update([
				$this->dados['post']['status'],
				$this->dados['post']['subtitle'],
				$logoImg,
				$bgImg,
				$this->dados['post']['heroTitle'],
				$heroImg,
				$this->dados['post']['id']
			])) {
				Redirect::route('main', [
					'msgSucesso' => 'Home page updated!'
				]);
			} else {
				Redirect::route('main', [
					'msgErros' => 'Failed to update home page.'
				]);
			}
		}
	}

	public function delete()
	{
		if ($this->model->delete($this->dados['post']['id'])) {
			Redirect::route('main', [
				'msgSucesso' => 'Home page deleted!'
			]);
		} else {
			Redirect::route('main', [
				'msgErros' => 'Failed to delete home page.'
			]);
		}
	}
}
