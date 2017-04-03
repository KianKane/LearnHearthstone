<?php
	session_start();
	// Set the logged in flag to false.
	$_SESSION["admin"] = false;
	// Return the user to the discussion page. (NOTE: Look for way to use relative path instead of absolute path)
	header('Location: http://studentnet.dundeeandangus.ac.uk/~1503052/LearnHearthstone/discussion.php');
?>