<?php
	define('DB_HOST', 'sql110.infinityfree.com');
	define('DB_USER', 'if0_37127683');
	define('DB_PASS', 'SJB56www');
	define('DB_NAME', 'if0_37127683_Teassr');

	$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if($conn->connect_error){
		die('Connection failed: ' . $conn->connect_error);
	}
	
?>