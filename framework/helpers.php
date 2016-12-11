<?php

use Core\Template;
use Core\Responder;
use Core\Lang;

// debug function - dump vars and exits
function dd($vars) {
	var_dump($vars);
	die();
}

// custom env function that handles default values as well
function env($envString, $defaultVariable = "") {
	if (! getenv($envString)) {
		return $defaultVariable;
	}
	return getenv($envString);
}

// redirects the client to a given url address
function redirect($url) {
	Responder::redirect($url);
}

// function for rendering templates
function render($template, $variables = array(), $message = []) {
	Template::render($template, $variables, $message);
}

// inserts a partial into a template
function insert($path) {
	include('views/' . $path . '.php');
}

// Get the absolute path of the project.
function getAbsolutePath() {
    return 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}/";
}

// includes an inline asset in html
function asset($path) {
    echo getAbsolutePath() . "public/$path";
}

// parses the url and links to a correct one
function url($location) {
	echo getAbsolutePath() . $location;
}

// returns the translation of the string
function mutation($langString) {
	Lang::get($langString);
}

// display a flash message to a template
function flashMessage() {
	$message = Template::getFlashMessage();
	if ( ! empty($message) ) {
		$messageHtml .= "<div class='collection'>";
		$messageHtml .= "<a href='#' class='collection-item " . $message["type"] . "'>" . $message["body"] . "</a>";
		$messageHtml .= "</div>";

		echo $messageHtml;
	}
	return NULL;
}
