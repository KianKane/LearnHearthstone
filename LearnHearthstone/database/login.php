<?php
	include_once "database_connection.php";
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	$query = $con->prepare("SELECT hash FROM LH_AdminAccounts WHERE username = :username");
	$query->execute(['username' => $username]);
	$hash = $query->fetchColumn();
	$success = password_verify($password, $hash);
	
	session_start();
	$_SESSION["admin"] = false;
	
	if ($success)
	{
		$_SESSION["admin"] = true;
		header('Location: http://studentnet.dundeeandangus.ac.uk/~1503052/LearnHearthstone/discussion.php');
	}
	else
	{
		header('Location: http://studentnet.dundeeandangus.ac.uk/~1503052/LearnHearthstone/administrator_login.php');
	}
?>