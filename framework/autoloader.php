<?php
/**
 * phpM framework class autoloader
 */

spl_autoload_register(function($className) {
	$namespace = str_replace("\\", "/", __NAMESPACE__);
	$className = str_replace("\\", "/", $className);
	$class = "framework/" . (empty($namespace) ? "" : $namespace . "/") . "{$className}.php";

	if (file_exists($class)) {
		require_once($class);
	}
});
