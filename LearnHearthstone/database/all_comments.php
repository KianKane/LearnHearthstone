<?php
	include_once "database_connection.php";
	
	$query = $con->query("SELECT alias, content FROM LH_Comments ORDER BY posted DESC");
	$comments = $query->fetchAll(PDO::FETCH_OBJ);
	
	$toEcho = "";
	foreach ($comments as $comment)
	{
		$toEcho .= "<div class=\"userComment\">";
		$toEcho .= "<div class=\"userAlias\">" . $comment->alias . "</div>";
		$toEcho .= "<a class=\"approveButton\" href=\"#\">Approve</a>";
		$toEcho .= "<a class=\"deleteButton\" href=\"#\">Delete</a>";
		$toEcho .= "<div class=\"userCommentBody\">" . $comment->content . "</div>";
		$toEcho .= "</div>";
	}
	echo $toEcho;
?>