<?php
	include_once "database_connection.php";
	
	// Retrieve the username and password from the form on the previous page.
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	// Prepare and execute the query to retrieve the password hash for the specified username.
	$query = $con->prepare("SELECT hash FROM LH_AdminAccounts WHERE username = :username");
	$query->execute(['username' => $username]);
	$hash = $query->fetchColumn();
	
	// Verify that the given password matches the stored hash.
	$success = password_verify($password, $hash);
	
	session_start();
	$_SESSION["admin"] = false; // Log out the user if they are already logged in.
	
	if ($success)
	{
		// Log the user in as an administrator if the password matched the hash.
		$_SESSION["admin"] = true;
		// Return the user to the discussion page.
		header('Location: /discussion.php');
	}
	else
	{
		// Otherwise return the user to the log in page with the failed flag set to true so that an error can be shown.
		header('Location: /administrator_login.php?failed=true');
	}
?>