<?php

class AutoLoad
{
	public function lib($className)
	{
		$className  = ltrim($className, '\\');
		$fileName   = '';
		$nameSpace  = '';

		if ($lastNsPos = strpos($className, '\\'))
		{
			$nameSpace  = substr($className, 0, $lastNsPos);
			$className  = substr($className, $lastNsPos + 1);
			$fileName   = str_replace('\\', DS, $nameSpace) . DS;
		}

		$className = str_replace('\\', '/', $className);

		$fileName = 'app/' . str_replace("_", DS, $className) . '.php';

		require $fileName;
	}
}
