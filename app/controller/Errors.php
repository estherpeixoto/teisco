<?php

use App\Lib\Controller;

/**
 * Errors
 */
class Errors extends Controller
{
	/**
	 * index
	 *
	 * @return void
	 */
	public function index()
	{
		$this->view('errors');
	}
}
