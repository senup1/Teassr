<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'teassrDatabaseHandling');
	define('DB_PASS', 'teassrDatabaseHandling');
	define('DB_NAME', 'teassrDev');

	$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if($conn->connect_error){
		die('Connection failed: ' . $conn->connect_error);
	}
	
?>