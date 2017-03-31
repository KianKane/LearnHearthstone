<?php
	$dbhost = "studentnet.dundeeandangus.ac.uk";
	$dbname = "db_1503052";
	$dbuser = "1503052";
	$dbpass = "password";

	try
	{
		$con = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname . ";charset=utf8", $dbuser, $dbpass);
	}
	catch (PDOException $e)
	{
		die("Connection Failed");
	}
?>