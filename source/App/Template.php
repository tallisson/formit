<?php
namespace Source\App;

use League\Plates\Engine;

class Template
{
  private static $view;

	public static function getView(): Engine
	{
		if(self::$view == null)
		{
			self::$view = new Engine(TPL_DIR);
		}

		return self::$view;
	}
}