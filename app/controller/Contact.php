<?php

use App\Lib\ControllerMain;
use App\Lib\Redirect;
use App\Lib\Session;
use App\Lib\Utilitarios;

class Contact extends ControllerMain
{
	public function __construct($dados)
	{
		parent::__construct($dados);
		$this->estaLogado();
	}

	public function index()
	{
		$this->loadView('admin/contact/list', $this->model->getContactPages());
	}

	public function form()
	{
		$dbDados = [];

		if ($this->dados['acao'] != 'new') {
			$dbDados = $this->model->getContact($this->dados['id']);
		}

		$this->loadView('admin/contact/form', $dbDados);
	}

	public function new()
	{
    if ($this->model->insert([
      $this->dados['post']['name'],
      $this->dados['post']['email'],
      $this->dados['post']['phone'],
      $this->dados['post']['subject'],
      $this->dados['post']['message'],
    ])) {
      Redirect::route('Home/Contact', [
        'msgSucesso' => 'Your message has been sent, please wait we will contact you :)'
      ]);
    } else {
      Redirect::route('Home/Contact', [
        'msgError' => 'Failed to send your message ):'
      ]);
    }
	}

	public function delete()
	{
		if ($this->model->delete($this->dados['post']['id'])) {
			Redirect::route('Contact', [
				'msgSucesso' => 'Contact page deleted!'
			]);
		} else {
			Redirect::route('Contact', [
				'msgError' => 'Failed to delete about page'
			]);
		}
	}
}
