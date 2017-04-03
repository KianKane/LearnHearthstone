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
				<form action="database/post_comment.php" method="post">
					<input type="text" id="aliasText" name="alias" value="Anonymous"></input>
					<textarea id="commentText" name="comment"></textarea>
					<input type="submit" id="submitButton" value="Submit">
					<p id="approvalWarning">Comments will not display until they have been approved by an administrator.</p>
				</form>
				<?php include "database/all_comments.php"; ?>
				<footer>
					<a class="button centered_button" href="administrator_login.php">Administrator Login</a>
				</footer>
			</div> <!-- /content -->
		</div>  <!-- /container -->
	</body>
</html>