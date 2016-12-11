<?php

// database configuration
return array(
	'db_host' => env('DB_HOST', '127.0.0.1'),
	'db_name' => env('DB_DATABASE', 'phpMDatabase'),
	'db_user' => env('DB_USERNAME', 'root'),
	'db_pass' => env('DB_PASSWORD', 'secret')
);
