<?php

namespace Models;

class Model {
	/**
	 * Table identifier for the model.
	 * 
	 * @var string
	 */
	protected $table;

	/**
	 * Constructor function for the model
	 */
	public function __construct() {
		$this->table = $this->table;
	}

	/**
	 * Getter for the model class.
	 * 
	 * @param  mixed $property
	 * @return mixed
	 */
	public function __get($property) {
	  if (property_exists($this, $property)) {
	    return $this->$property;
	  }
	}

	/**
	 * Setter for the model class.
	 * 
	 * @param mixed $property
	 * @param mixed $value
	 */
	public function __set($property, $value) {
	  if (property_exists($this, $property)) {
	    $this->$property = $value;
	  }

	  return $this;
	}

	/**
	 * Gets a single instance of the model.
	 * 
	 * @param  string $key
	 * @param  string $value
	 * @return mixed
	 */
	public static function get($key, $value) {
		// get the db
		global $app;
		$db = $app->getDatabase();

		// get the single instance of a model
		try {
			$query = $db->user("$key = ?", "$value");
			$user = $query->fetch();
			$userCount = $query->count();

			if ($userCount < 1) {
				return false;
			}
			return $user;
		} catch (PDOException $e) {
			return false;
		}
	}

	/**
	 * Gets all the instances of the model.
	 */
	public static function all() {
		// get the db
		global $app;
		$db = $app->getDatabase();

		try {
			$result = $db->user()->select("*");
		} catch (PDOException $e) {
			return false;
		}
		return $result;
	}
}
