<?php

namespace Controllers;

class PagesController {
	/**
	 * Displays the landing page
	 */
	public static function index($message = []) {
		render("index", NULL, $message);
	}
}
