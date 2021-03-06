<?php

namespace App\Lib;

class Session
{
	public static function set($key, $value)
	{
		$_SESSION[$key] = $value;
	}

	public static function get($key)
	{
		if (isset($_SESSION[$key]))
		{
			return $_SESSION[$key];
		}
		else
		{
			return false;
		}
	}

	public static function destroy($key)
	{
		unset($_SESSION[$key]);
	}

	public static function getDestroy($key)
	{
		$ret = Session::get($key);
		Session::destroy($key);
		return $ret;
	}
}
