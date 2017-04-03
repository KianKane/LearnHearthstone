<?php
	include_once "database_connection.php";
	
	// Retrieve the alias and comment from the form on the previous page.
	// Also strip all HTML tags from the input to prevent cross-site scripting attacks.
	$alias = strip_tags($_POST["alias"]);
	$comment = strip_tags($_POST["comment"]);
	
	// Remember the alias entered so that it can be automatically filled in next time.
	setcookie("alias", $alias, time() + (86400 * 30), "/"); // Should remember the alias for one day.
	
	// Prepare and execute the query to insert the new comment into the database.
	$query = $con->prepare("INSERT INTO LH_Comments (posted, alias, content, approved) VALUES (NOW(), :alias, :comment, FALSE)");
	$success = $query->execute([
		'alias' => $alias,
		'comment' => $comment]);
	
	// Return the user to the discussion page. (NOTE: Look for way to use relative path instead of absolute path)
	header('Location: http://studentnet.dundeeandangus.ac.uk/~1503052/LearnHearthstone/discussion.php');
?>