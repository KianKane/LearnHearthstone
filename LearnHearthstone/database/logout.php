<?php
	session_start();
	// Set the logged in flag to false.
	$_SESSION["admin"] = false;
	// Return the user to the discussion page.
	header('Location: /discussion.php');
?>