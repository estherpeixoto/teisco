<?php

namespace App\Lib;

use PDO;
use PDOException;

class Database
{
	private static $dbtype = '';
	private static $host = '';
	private static $port = '';
	private static $user = '';
	private static $password = '';
	private static $db = '';

	public function __construct(
		$db_dbtype = DB_DBTYPE,
		$db_host = DB_HOST,
		$db_port = DB_PORT,
		$db_user = DB_USER,
		$db_password = DB_PASSWORD,
		$db_bdados = DB_BDADOS
	) {
		self::$dbtype   = $db_dbtype;
		self::$host     = $db_host;
		self::$port     = $db_port;
		self::$user     = $db_user;
		self::$password = $db_password;
		self::$db       = $db_bdados;
	}

	private function __clone()
	{
	}

	public function __destruct()
	{
		$this->disconnect();

		foreach ($this as $key => $value)
		{
			unset($this->$key);
		}
	}

	private function getDBType()
	{
		return self::$dbtype;
	}

	private function getHost()
	{
		return self::$host;
	}

	private function getPort()
	{
		return self::$port;
	}

	private function getUser()
	{
		return self::$user;
	}

	private function getPassword()
	{
		return self::$password;
	}

	private function getDB()
	{
		return self::$db;
	}

	public  function connect()
	{
		try
		{
			if ($this->getDBType() == 'mysql') // MySQL
			{
				$this->conexao = new PDO(
					$this->getDBType() . ':host=' . $this->getHost() . ';port=' . $this->getPort() . ';dbname=' . $this->getDB(),
					$this->getUser(),
					$this->getPassword()
				);
			}
			else if ($this->getDBType() == 'sqlsrv') // SQL Server
			{
				$this->conexao = new PDO(
					$this->getDBType() . ':Server=' . $this->getHost() . ',' . $this->getPort() . ';DataBase=' . $this->getDB(),
					$this->getUser(),
					$this->getPassword()
				);
			}
		}
		catch (PDOException $i)
		{
			die('Erro: <code>' . $i->getMessage() . '</code>');
		}

		return ($this->conexao);
	}

	private function disconnect()
	{
		$this->conexao = null;
	}

	public function db_select($sql, $params = null)
	{
		$query = $this->connect()->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$query->execute($params);
		$rs = $query;

		$this->__destruct();

		return $rs;
	}

	public function db_insert($sql, $params = null)
	{
		$conexao = $this->connect();
		$query = $conexao->prepare($sql);
		$query->execute($params);

		$rs = $conexao->lastInsertId();

		$this->__destruct();

		return $rs;
	}

	public function db_update($sql, $params = null)
	{
		$query = $this->connect()->prepare($sql);
		$query->execute($params);

		$rs = $query->rowCount() or die(print_r($query->errorInfo(), true));
		$this->__destruct();

		return $rs;
	}

	public function db_delete($sql, $params = null)
	{
		$query = $this->connect()->prepare($sql);

		try
		{
			$query->execute($params);
			$rs = $query->rowCount();
		}
		catch (PDOException $exc)
		{
			echo "Erro ao Excluir Registro, favor entrar em contato com Suporte Tenico" . $exc->getTraceAsString();
		}

		$this->__destruct();

		if ($rs == array())
		{
			return false;
		}
		else
		{
			return $rs;
		}
	}

	public function db_busca_dados($rscPdo)
	{
		return $rscPdo->fetch(PDO::FETCH_OBJ);
	}

	public function db_busca_dados_all($rscPdo)
	{
		return $rscPdo->fetchAll(PDO::FETCH_OBJ);
	}

	public function db_busca_array($rscPdo)
	{
		return $rscPdo->fetch(PDO::FETCH_ASSOC);
	}

	public function db_busca_array_all($rscPdo)
	{
		return $rscPdo->fetchall(PDO::FETCH_ASSOC);
	}

	public function db_num_linhas($rscPdo)
	{
		return $rscPdo->rowCount();
	}

	public function db_num_colunas($rscPdo)
	{
		return $rscPdo->columnCount();
	}

	public function db_resultado($rscRes, $CampoRetorno)
	{
		$rowResX = $this->db_busca_array($rscRes);
		return $rowResX[$CampoRetorno];
	}
}
