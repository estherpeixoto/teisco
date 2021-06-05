<?php

namespace App\Lib;

class Redirect
{
	public static function route($url, $with = [])
	{
		if (count($with) > 0)
		{
			foreach ($with as $key => $value)
			{
				Session::set($key, $value);
			}
		}

		?>
		<script>window.location = '<?= SITEURL . $url; ?>'</script>
		<?php
	}
}
