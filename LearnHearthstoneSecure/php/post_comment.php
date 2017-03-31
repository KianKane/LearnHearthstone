<?php
	include_once "database_connection.php";
	
	$alias = $_POST["alias"];
	$comment = $_POST["comment"];
	
	$query = $con->prepare("INSERT INTO LH_Comments (posted, alias, comment, approved) VALUES (NOW(), :alias, :comment, FALSE)");
	$success = $query->execute([
		'alias' => $alias,
		'comment' => $comment]);
?>