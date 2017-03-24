<?php
	include_once "database_connection.php";
	
	$query = $con->query("SELECT alias, content FROM LH_Comments");
	$comments = $query->fetchAll(PDO::FETCH_OBJ);
	
	$toEcho = "";
	foreach ($comments as $comment)
	{
		$toEcho .= "<h4>" . $comment->alias . "<h4>";
		$toEcho .= "<p>" . $comment->content . "<p>";
	}
	echo $toEcho;
?>