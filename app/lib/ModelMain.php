<?php

namespace App\Lib;

class ModelMain
{
	protected $db;
	public $table;

	public function __construct()
	{
		require 'app/config/configDb.php';
		$this->db = new Database();
	}
}
