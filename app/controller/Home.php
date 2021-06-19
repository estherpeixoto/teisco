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
		$productModel = $this->loadModel('Products');
		$dbDados = $productModel->getProducts(null, true);

		if ($this->dados['id'] != 0)
		{

			$dbDados = $productModel->getProduct($this->dados['id']);
			$this->loadView('product', 	$dbDados);
		}
		else
		{
			$this->loadView('products', $dbDados);
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
