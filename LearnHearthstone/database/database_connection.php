<?php
	// Hard coded database details, move along.
	$dbhost = "localhost";
	$dbname = "learning_hearthstone";
	$dbuser = "learning";
	$dbpass = "password"; // 100% secure.
	
	try
	{
		// Open a connection to the database using the provided details.
		$con = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname . ";charset=utf8", $dbuser, $dbpass);
	}
	catch (PDOException $e)
	{
		die("Connection Failed");
	}
?>