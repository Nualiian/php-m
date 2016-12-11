<?php

namespace Core;

class Lang {
	/**
	 * The path to the locale files.
	 * 
	 * @var string
	 */
	private static $langFilePath = "lang/";

	/**
	 * Gets the translated string for an identifier.
	 * 
	 * @param string $identifier
	 * @return string
	 */
	public static function get($identifier) {
		$identifierString = explode(".", $identifier);
		$section = $identifierString[0];
		$string = $identifierString[1];

		// get the languge from sesion or resolve to deafult
		$language = "";
		if (isset($_SESSION["language"])) {
			$language = $_SESSION["language"];
		} else {
			$language = "sk";
		}

		$translations = include self::$langFilePath . $language . '.php';
		$translatedText = $translations[$section][$string];

		echo $translatedText;
	}
}
