<?php
	include_once "database_connection.php";
	session_start();
	
	// Only allow unapproved comments to be selected if the user is logged in as an administrator.
	$sql;
	if ($_SESSION["admin"])
		$sql = "SELECT id, approved, alias, content FROM LH_Comments ORDER BY posted DESC";
	else
		$sql = "SELECT id, approved, alias, content FROM LH_Comments WHERE approved = TRUE ORDER BY posted DESC";
	
	// Fetch data from database.
	$query = $con->query($sql);
	$comments = $query->fetchAll(PDO::FETCH_OBJ);
	
	// Create HTML of all comments returned.
	$toEcho = "";
	foreach ($comments as $comment)
	{
		$toEcho .= "<div class=\"userComment\">";
		$toEcho .= "<div class=\"userAlias\">" . $comment->alias . "</div>";
		
		// If the user is an admin then they may be able to approve and/or delete comments.
		if ($_SESSION["admin"])
		{
			$toEcho .= "<form action=\"database/delete_comment.php\" method=\"post\"><input type=\"hidden\" name=\"id\" value=\"" . $comment->id . "\"><input type=\"submit\" class=\"deleteButton\" value=\"Delete\"></form>";
			if ($comment->approved != "") // Black magic, should be fixed before this is submitted.
				$toEcho .= "<form action=\"database/approve_comment.php\" method=\"post\"><input type=\"hidden\" name=\"id\" value=\"" . $comment->id . "\"><input type=\"submit\" class=\"approveButton\" value=\"Approve\"></form>";
		}
		
		$toEcho .= "<div class=\"userCommentBody\">" . $comment->content . "</div>";
		$toEcho .= "</div>\n";
	}
	echo $toEcho; // Echo all HTML at once to avoid excessive echoes.
?>