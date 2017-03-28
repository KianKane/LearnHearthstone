<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Administrator Login - Learning Hearthstone</title>
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
				<form id="login" method="post">
					<label for="username"><p>Username</p></label>
					<input type="text" name="username"></input>
					<label for="password"><p>Password</p></label>
					<input type="password" name="password"></input>
				</form>
				<a class="button centered_button" href="#" onclick="document.getElementById('login').submit()">Submit</a>
				<a class="button centered_button" href="discussion.php">Cancel</a>
			</div> <!-- /content -->
		</div>  <!-- /container -->
	</body>
</html>