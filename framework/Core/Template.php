<?php

namespace Core;

class Template {
	/**
	 * Renders a template.
	 */
	public static function render($template, $variables = array(), $message = []) {
		// create the variables
		extract($variables);

		// flash the message if any
		if ( ! empty($message) ) {
			self::setFlashMessage($message);
		}

		// render the view
		require_once "framework/views/$template.php";
		die();
	}

	/**
	 * Sets the message into a session variable.
	 * 
	 * @param  array $message
	 */
	public static function setFlashMessage($message) {
		// resets the flash message session variable
		$_SESSION["flash_message"] = $message;
	}

	/**
	 * Gets a flash message from the session storage.
	 * 
	 * @return array $message
	 */
	public static function getFlashMessage($message) {
		return $_SESSION["flash_message"];
	}
}
