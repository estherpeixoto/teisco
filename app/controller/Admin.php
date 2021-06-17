<?php

use App\Lib\ControllerMain;
use App\Lib\Redirect;
use App\Lib\Session;

class Admin extends ControllerMain
{
	public function index()
	{
		$this->loadView('admin/index');
	}

	public function signin()
	{
		$this->loadView('admin/signin');
	}

	public function authenticate()
	{
		$post = $this->dados['post'];

		$user = $this->model->getLogin($post['email']);

		if (!$user)
		{
			Redirect::route('admin/signin', [
				'msgError' => 'Email or password incorrect'
			]);
		}
		else
		{
			if ($user->status == 'I')
			{
				Redirect::route('admin/signin', [
					'msgError' => "Can't sign in, user inactive"
				]);
			}
			else
			{
				if (!password_verify(trim($post['password']), $user->password))
				{
					Redirect::route('admin/signin', [
						'msgError' => 'Email or password incorrect'
					]);
				}
				else
				{
					Session::set('isLogged', true);
					Session::set('id', $user->id);
					Session::set('email', $user->email);
					Session::set('type', $user->type);

					Redirect::route('admin');
				}
			}
		}
	}

	public function signout()
	{
		Session::destroy('isLogged');
		Session::destroy('id');
		Session::destroy('email');
		Session::destroy('type');

		Redirect::route('/admin/signin');
	}
}
