<?php

/**
 * Autoload
 */
class Autoload
{
	/**
	 * lib
	 *
	 * @param  mixed $classname
	 * @return void
	 */
	public function lib($classname)
	{
		// Remove espacos em branco no comeco da string
		$namespace = '';
		$classname = ltrim($classname, '\\');

		// Busca a posicao do primeiro \ na string
		if ($position = strpos($classname, '\\'))
		{
			// Armazena a primeira palavra da string como namespace
			$namespace = substr($classname, 0, $position);
			$namespace = str_replace('\\', DS, $namespace) . DS;

			// Armazena da segunda palavra em diante como o classname
			$classname = substr($classname, $position + 1);
		}

		// Divide a string em duas partes 0 = sub pasta, 1 = arquivo
		$classname = explode('\\', $classname);

		// Concatena a pasta de aplicacao com a sub pasta e o arquivo.php
		$filename = strtolower($namespace . $classname[0]) . DS . $classname[1] . '.php';

		require $filename;
	}
}
