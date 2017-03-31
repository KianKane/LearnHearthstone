<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Administrator Login - Learning Hearthstone</title>
		<?php include "shared_head.html"; ?>
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