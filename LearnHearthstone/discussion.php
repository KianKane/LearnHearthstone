<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Discussion - Learning Hearthstone</title>
		<?php include "shared_head.html"; ?>
		<link rel="stylesheet" type="text/css" href="styles/discussion.css" media="screen" />
		<script src="scripts/discussion.js"></script>
	</head>
	<body>
		<div id="container">
			<?php include "banner.html"; ?>
			<div id="content">
				<?php
					session_start();
					if ($_SESSION["admin"])
						echo "<p>You are logged in as an administrator.</p>";
				?>
				<form id="postComment" action="database/post_comment.php" method="post">
					<input type="text" id="aliasText" name="alias" value="<?php 
							// If the alias cookie is set then use the saved alias.  Otherwise the default value is "Anonymous".
							if (isset($_COOKIE["alias"]))
								echo $_COOKIE["alias"];
							else
								echo "Anonymous";
						?>"></input>
					<textarea id="commentText" name="comment"></textarea>
					<input type="submit" id="submitButton" value="Submit">
					<p id="approvalWarning">Comments will not display until they have been approved by an administrator.</p>
				</form>
				<?php include "database/all_comments.php"; ?>
				<footer>
				<?php
					// Show the a login or logout button depending on whether or not the user is already logged in.
					if ($_SESSION["admin"])
						echo "<a class=\"button centered_button\" href=\"database/logout.php\">Logout</a>";
					else
						echo "<a class=\"button centered_button\" href=\"administrator_login.php\">Administrator Login</a>";
				?>
				</footer>
			</div> <!-- /content -->
		</div>  <!-- /container -->
	</body>
</html>