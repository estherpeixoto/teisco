<?php

namespace App\Lib;

class Utilitarios
{
	public static function gerarNomeAleatorio($nomeArquivo)
	{
		$arquivo = explode('.', $nomeArquivo);

		$arqExt = $arquivo[count($arquivo) - 1];

		$arqNome = str_replace('.' . $arqExt, '',  $nomeArquivo);

		$aleatorio = rand(0, 99999);

		return "$arqNome-$aleatorio$arqExt";
	}
}
