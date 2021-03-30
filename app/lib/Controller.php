<?php

namespace App\Lib;

/**
 * Controller
 */
class Controller
{
	public function __construct($data)
	{
		$this->data = $data;
	}

	/**
	 * Load views
	 *
	 * @param  string $filename
	 * @param  array $data
	 * @return void
	 */
	public function view($filename, $data = [])
	{
		$this->data = $data;

		if (file_exists("app/view/$filename.php"))
		{
			require_once "app/view/$filename.php";
		}
		else
		{
			require_once 'app/view/' . ERROR_VIEW . '.php';
		}
	}
}
