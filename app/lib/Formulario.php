<?php

namespace App\Lib;

class Formulario
{
	static function exibeMensagem()
	{
		if (Session::get('msgSucesso'))
		{
			?>
			<div class='row'>
				<div class='col-12'>
					<div class='alert alert-success alert-dismissible fade show' role='alert'>
						<?= Session::getDestroy('msgSucesso'); ?>

						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
						</button>
					</div>
				</div>
			</div>
			<?php
		}

		if (Session::get('msgError'))
		{
			?>
			<div class='row'>
				<div class='col-12'>
					<div class='alert alert-danger alert-dismissible fade show' role='alert'>
						<?= Session::getDestroy('msgError'); ?>

						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
						</button>
					</div>
				</div>
			</div>
			<?php
		}
	}

	static function setFormSubTitulo($acao)
	{
		$cRet = '';

		if ($acao == 'new')
		{
			$cRet = 'Inclusão';
		}
		else if ($acao == 'update')
		{
			$cRet = 'Alteração';
		}
		else if ($acao == 'delete')
		{
			$cRet = 'Exclusão';
		}
		else if ($acao == 'view')
		{
			$cRet = 'Visualização';
		}

		return $cRet;
	}

	static function setValue($campo, $dados = [], $default = '')
	{
		if (isset($dados[$campo]))
		{
			return $dados[$campo];
		}
		else
		{
			return $default;
		}
	}

	static function setDescricao($value, $dados)
	{
		if (isset($dados[$value]))
		{
			return $dados[$value];
		}
		else
		{
			return '...';
		}
	}
}
