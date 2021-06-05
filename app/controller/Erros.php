<?php

use App\Lib\ControllerMain;

class Erros extends ControllerMain
{
	public function index()
	{
		$this->loadView('erros');
	}
}
