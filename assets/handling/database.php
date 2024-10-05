<?php
define('DB_HOST', 'sql5.freesqldatabase.com');
define('DB_USER', 'sql5735451');
define('DB_PASS', 'BTVjiH3FmS');
define('DB_NAME', 'sql5735451');
//e

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
	die('Connection failed: ' . $conn->connect_error);
}

?>