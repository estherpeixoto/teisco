<?php

use App\Lib\ControllerMain;
use App\Lib\Redirect;

class Users extends ControllerMain
{
	public function __construct($dados)
	{
		parent::__construct($dados);
		$this->estaLogado();
	}

	public function index()
	{
		$this->loadView('admin/users/list', $this->model->getUsers());
	}

	public function form()
	{
		$data = [];

		if ($this->dados['acao'] != 'new') {
			$data = $this->model->getUser($this->dados['id']);
		}

		$this->loadView('admin/users/form', $data);
	}

	public function new()
	{
		if ($this->model->insert([
			$this->dados['post']['name'],
			$this->dados['post']['email'],
			$this->dados['post']['type'],
			$this->dados['post']['status'],
		])) {
			Redirect::route('users', [
				'msgSucesso' => 'User registered!'
			]);
		} else {
			Redirect::route('users', [
				'msgErros' => 'Failed to register new user.'
			]);
		}
	}

	public function update()
	{
		if ($this->model->update([
			$this->dados['post']['name'],
			$this->dados['post']['email'],
			$this->dados['post']['type'],
			$this->dados['post']['status'],
			$this->dados['post']['id']
		])) {
			Redirect::route('users', [
				'msgSucesso' => 'User updated!'
			]);
		} else {
			Redirect::route('users', [
				'msgErros' => 'Failed to update user.'
			]);
		}
	}

	public function delete()
	{
		if ($this->model->delete($this->dados['post']['id'])) {
			Redirect::route('users', [
				'msgSucesso' => 'User deleted!'
			]);
		} else {
			Redirect::route('users', [
				'msgErros' => 'Failed to delete user.'
			]);
		}
	}
}
