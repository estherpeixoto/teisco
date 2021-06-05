<?php

namespace App\Lib;

class ControllerMain
{
	public function __construct($dados)
	{
		$this->dados = $dados;
		$cModel = "{$dados['model']}Model";

		if (file_exists("app/model/$cModel.php"))
		{
			require_once "app/model/$cModel.php";
			$this->model = new $cModel();
		}
	}

	public function loadView($nomeView, $dbDados = [])
	{
		$this->dbDados = $dbDados;

		if (file_exists("app/view/$nomeView.php"))
		{
			require_once "app/view/$nomeView.php";
		}
		else
		{
			require_once "app/view/erros.php";
		}
	}

	public function loadModel($nomeModel)
	{
		$nomeModel .= 'Model';

		if (file_exists("app/model/$nomeModel.php"))
		{
			require_once "app/model/$nomeModel.php";
			return new $nomeModel();
		}
		else
		{
			return false;
		}
	}

	static public function estaLogado()
	{
		if (!Session::get('isLogged'))
		{
			Redirect::route('Home/login');
			return true;
		}

		return false;
	}
}
