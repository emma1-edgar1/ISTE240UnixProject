<?php

	$servername = "localhost";
	$username = "iste240t52";
	$password = "p6J92&amp;\$UpUCW"; // p6J92&$UpUCW
	$db = "iste240t52";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully" . "<br>";

?>
