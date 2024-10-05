<?php
	define('DB_HOST', 'teassr-teassr.f.aivencloud.com');
    	define('DB_USER', 'avnadmin');
    	define('DB_PASS', 'AVNS_lynYZp2r1ezjPYQuoNT');
    	define('DB_NAME', 'defaultdb');

	$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if($conn->connect_error){
		die('Connection failed: ' . $conn->connect_error);
	}
	
?>
