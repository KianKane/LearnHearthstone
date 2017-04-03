<?php
	include_once "database_connection.php";
	session_start();
	
	$sql;
	if ($_SESSION["admin"])
		$sql = "SELECT id, approved, alias, content FROM LH_Comments ORDER BY posted DESC";
	else
		$sql = "SELECT id, approved, alias, content FROM LH_Comments WHERE approved = TRUE ORDER BY posted DESC";
	
	$query = $con->query($sql);
	$comments = $query->fetchAll(PDO::FETCH_OBJ);
	
	$toEcho = "";
	foreach ($comments as $comment)
	{
		$toEcho .= "<div class=\"userComment\">";
		$toEcho .= "<div class=\"userAlias\">" . $comment->alias . "</div>";
		
		if ($_SESSION["admin"])
		{
			$toEcho .= "<form class=\"commentForm\" action=\"database/delete_comment.php\" method=\"post\"><input type=\"hidden\" name=\"id\" value=\"" . $comment->id . "\"><input type=\"submit\" class=\"deleteButton\" value=\"Delete\"></form>";
			if ($comment->approved != "")
				$toEcho .= "<form class=\"commentForm\" action=\"database/approve_comment.php\" method=\"post\"><input type=\"hidden\" name=\"id\" value=\"" . $comment->id . "\"><input type=\"submit\" class=\"approveButton\" value=\"Approve\"></form>";
		}
		
		$toEcho .= "<div class=\"userCommentBody\">" . $comment->content . "</div>";
		$toEcho .= "</div>\n";
	}
	echo $toEcho;
?>