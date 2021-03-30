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

	public function menu()
	{
		$this->view('menu');
	}

	public function team()
	{
		$this->view('team');
	}

	public function reservation()
	{
		$this->view('reservation');
	}
}
