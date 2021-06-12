<?php
use App\Lib\Session;
use App\Lib\Redirect;
use App\Lib\ControllerMain;

class About extends ControllerMain
{
	public function list()
	{
		$this->loadView('admin/about/list');
	}
  
	public function form()
	{
		$this->loadView('admin/about/form');
	}
}
