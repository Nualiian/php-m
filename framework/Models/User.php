<?php

namespace Models;

class User extends Model {
	/**
	 * Set the table for the model
	 * 
	 * @var string
	 */
	protected $table = "users";

	/**
	 * Persists a user to a database.
	 * 
	 * @param  array $credentials
	 * @return boolean
	 */
	public static function create($credentials) {
		// get the db
		global $app;
		$db = $app->getDatabase();

		// store user in the database
		try {
			$users = $db->user();
			$result = $users->insert([
				"email" => $credentials["email"],
				"password" => password_hash($credentials["password"], PASSWORD_BCRYPT),
				"description" => $credentials["description"],
				"access_level" => 0
			]);
			return true;
		} catch (PDOException $e) {
			return false;
		}
	}
}
