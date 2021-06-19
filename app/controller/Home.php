<?php

use App\Lib\ControllerMain;

class Home extends ControllerMain
{
	public function index()
	{
		$mainModel = $this->loadModel('Main');
		$dbDados = $mainModel->getActiveHome();

		$this->loadView('home', $dbDados);
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
		$aboutModel = $this->loadModel('About');
		$dbDados = $aboutModel->getAbout(null, true);

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
