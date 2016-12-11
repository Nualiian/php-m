<?php

namespace Core;

use Core\Auth;
use Models\User;

/**
 * Middleware class is responsible for handling ACL
 */
class Middleware {
	/**
	 * Returns true if the user is logged in
	 * 
	 * @return boolean
	 */
	public static function isUserLoggedIn() {
		$user = Auth::user();

		if ($user) {
			return true;
		}
		return false;
	}
}
