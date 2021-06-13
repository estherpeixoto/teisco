<?php

use App\Lib\ControllerMain;

class Home extends ControllerMain
{
	public function index()
	{
		$this->loadView('home');
	}

	public function products()
	{
		if ($this->dados['id'] != 0)
		{
			$this->loadView('product', [
				'id' => $this->dados['id']
			]);
		}
		else
		{
			$this->loadView('products');
		}
	}

	public function about()
	{
		$aboutModel = $this->loadModel("About");
		$dbDados = $aboutModel->getAbout();

		$this->loadView('about', $dbDados);
	}

	public function contact()
	{
		$this->loadView('contact');
	}

	public function signin()
	{
		$this->loadView('signin');
	}
}
