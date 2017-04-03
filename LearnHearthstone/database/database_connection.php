<?php
	// Hard coded database details, move along.
	$dbhost = "studentnet.dundeeandangus.ac.uk";
	$dbname = "db_1503052";
	$dbuser = "1503052";
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