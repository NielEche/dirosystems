<?php
  
  $server = "server261";
  	$username = "meshwqob_diro";
  	$password = "PhebenDanny1";
  	$dbname = "meshwqob_diro";

	$conn = new MySQLi($server, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>