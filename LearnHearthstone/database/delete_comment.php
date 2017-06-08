<?php
	include_once "database_connection.php";
	
	// Retrieve the ID of the comment to be deleted from the form on the previous page.
	$id = $_POST["id"];
	
	// Prepare and execute the query to remove the specified comment from the database.
	$query = $con->prepare("DELETE FROM LH_Comments WHERE id = :id");
	$success = $query->execute([
		'id' => $id]);
	
	// Return the user to the discussion page.
	header('Location: /discussion.php');
?>