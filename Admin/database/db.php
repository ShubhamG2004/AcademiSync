<?php
	// Connect to the database
	$servername ="localhost";
	$username ="root";
	$password ="";
	$dbname = "cms";
	
	$con = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>