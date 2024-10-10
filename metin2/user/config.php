<?php
	DEFINE('SQL_HOST', '192.168.0.110');
	DEFINE('SQL_USER', 'root');
	DEFINE('SQL_PASS', '123456789');
	
	$sqlServ = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASS);
	
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
?>