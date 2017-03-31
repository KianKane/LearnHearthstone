<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Discussion - Learning Hearthstone</title>
		<?php include "shared_head.html"; ?>
	</head>
	<body>
		<div id="container">
			<?php include "banner.html"; ?>
			<div id="content">
				<form method="post">
					<label for="alias"><p>Alias:</p></label>
					<input type="text" name="alias" value="Anonymous"></input>
					<input type="text" name="comment">
					<p>Comments will not display until they have been approved by an administrator.</p>
					<input type="submit" value="Submit">
				</form>
				<?php include "../../LearnHearthstoneSecure/php/all_comments.php"; ?>
				<footer>
					<a class="button centered_button" href="administrator_login.php">Administrator Login</a>
				</footer>
			</div> <!-- /content -->
		</div>  <!-- /container -->
	</body>
</html>