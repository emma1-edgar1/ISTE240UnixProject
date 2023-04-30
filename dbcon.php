<?php

	$servername = "localhost";
	$username = "kjf5787";
	$password = "Annexational5-myriameter";
	$db = "kjf5787";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully" . "<br>";

?>
