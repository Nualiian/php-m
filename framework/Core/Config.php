<?php

namespace Core;

class Config {
	/**
	 * The main folder for config files
	 * 
	 * @var string
	 */
	private static $configFolder = "config/";

	/**
	 * Gets a specific config file
	 * 
	 * @return mixed
	 */
	public static function get($configFile) {
		$path = self::$configFolder . $configFile . ".php";
		if (file_exists($path)) {
			return include($path);
		}
		return false;
	}
}
