<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Discussion - Learning Hearthstone</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="styles/sss.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="styles/shared.css" media="screen" />
		<script src="scripts/jquery-1.11.3.min.js"></script>
		<script src="scripts/sss.min.js"></script>
		<script src="scripts/shared.js"></script>
	</head>
	<body>
		<div id="container">
			<?php include "banner.html"; ?>
			<div id="content">
				<form method="post">
					<label for="alias">Alias:</label><input type="text" name="alias" value="Anonymous"></input>
					<input type="text" name="comment">
					<input type="submit" value="Submit">
				</form>
				<?php include "../../LearnHearthstoneSecure/php/all_comments.php"; ?>
				<footer>
					<a class="button" href="#">Administrator Login</a>
				</footer>
			</div> <!-- /content -->
		</div>  <!-- /container -->
	</body>
</html>