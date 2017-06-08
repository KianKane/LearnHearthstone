<?php
	include_once "database_connection.php";
	
	// Retrieve the ID of the comment to be approved from the form on the previous page.
	$id = $_POST["id"];
	
	// Prepare and execute the query to set approved to TRUE in the database.
	$query = $con->prepare("UPDATE LH_Comments SET approved = TRUE WHERE id = :id");
	$success = $query->execute([
		'id' => $id]);
	
	// Return the user to the discussion page.
	header('Location: /discussion.php');
?>