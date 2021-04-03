<?php

use App\Lib\Controller;

class Home extends Controller
{
	public function index()
	{
		$this->view('home');
	}

	public function about()
	{
		$this->view('about');
	}

	public function products()
	{
		if ($this->data['id'] != 0)
		{
			$this->view('product', [
				'id' => $this->data['id']
			]);
		}
		else
		{
			$this->view('products');
		}
	}

	public function signin()
	{
		$this->view('signin');
	}

	public function contact()
	{
		$this->view('contact');
	}
}
