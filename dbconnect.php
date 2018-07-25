<?php

/**
 * DB Connection
 */

// connect to MySQL database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'search_user_contact');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($con === false)
{
	die("ERROR: Could not connect to MySQL Database " . mysqli_connect_error());
}
