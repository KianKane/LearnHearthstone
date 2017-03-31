<?php
	include_once "database_connection.php";
	
	$alias = $_POST["alias"];
	$comment = $_POST["comment"];
	
	$query = $con->prepare("INSERT INTO LH_Comments (posted, alias, content, approved) VALUES (NOW(), :alias, :comment, FALSE)");
	$success = $query->execute([
		'alias' => $alias,
		'comment' => $comment]);
		
	header('Location: http://studentnet.dundeeandangus.ac.uk/~1503052/LearnHearthstone/discussion.php');
?>