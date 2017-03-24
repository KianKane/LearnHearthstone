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
			<div id="banner">
				<div id="header">
					<div id="menu_button">
						<img src="images/menu.png" alt="Menu"></img>
					</div> <!-- /menu_button -->
					<p class="noselect">Learning Hearthstone</p>
				</div> <!-- /header -->
				<div id="menu" class="noselect">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="guides.html">Guides</a></li>
						<li><a href="deck_lists.html">Deck lists</a></li>
						<li><a href="challenges.html">Challenges</a></li>
						<li><a href="glossary.html">Glossary</a></li>
						<li><a href="discussion.php">Discussion</a></li>
					</ul>
				</div> <!-- /menu -->
			</div> <!-- /banner -->
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