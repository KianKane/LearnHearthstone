<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Challenges - Learning Hearthstone</title>
		<?php include "shared_head.html"; ?>
		<link rel="stylesheet" type="text/css" href="styles/challenges.css" media="screen" />
		<script src="scripts/challenges.js"></script>
	</head>
	<body>
		<div id="container">
			<?php include "banner.html"; ?>
			<div id="content">
			
				<div class="challenge">
					<div class="challenge_banner" id="challenge_banner_1">
						<div class="challenge_header">
							<p class="noselect">Who am I?</p>
						</div>  <!-- /challenge_header -->
					</div>  <!-- /challenge_banner_1 -->
					<a class="button option">Northshire Cleric</a>
					<a class="button option">Mind Control Tech</a>
					<a class="button option correct">Cabal Shadow Priest</a>
					<a class="button option">Djinni of Zephyrs</a>
				</div>  <!-- /challenge -->
				
				<div class="challenge">
					<div class="challenge_banner" id="challenge_banner_2">
						<div class="challenge_header">
							<p class="noselect">Who am I?</p>
						</div>  <!-- /challenge_header -->
					</div>  <!-- /challenge_banner_2 -->
					<a class="button option">Ysera</a>
					<a class="button option">Nozdormu</a>
					<a class="button option">Azure Drake</a>
					<a class="button option correct">Deathwing</a>
				</div>  <!-- /challenge -->
				
				<div class="challenge">
					<div class="challenge_banner" id="challenge_banner_3">
						<div class="challenge_header">
							<p class="noselect">Who am I?</p>
						</div>  <!-- /challenge_header -->
					</div>  <!-- /challenge_banner_3 -->
					<a class="button option correct">Sylvanas Windrunner</a>
					<a class="button option">Aviana</a>
					<a class="button option">Bloodmage Thalnos</a>
					<a class="button option">Eydis Darkbane</a>
				</div>  <!-- /challenge -->
				
				<div class="challenge">
					<div class="challenge_banner" id="challenge_banner_4">
						<div class="challenge_header">
							<p class="noselect">Who am I?</p>
						</div>  <!-- /challenge_header -->
					</div>  <!-- /challenge_banner_4 -->
					<a class="button option">Tomb Pillager</a>
					<a class="button option">Haunted Creeper</a>
					<a class="button option correct">Undertaker</a>
					<a class="button option">Thrallmar Farseer</a>
				</div>  <!-- /challenge -->
				
				<div class="challenge">
					<div class="challenge_banner" id="challenge_banner_5">
						<div class="challenge_header">
							<p class="noselect">Who am I?</p>
						</div>  <!-- /challenge_header -->
					</div>  <!-- /challenge_banner_5 -->
					<a class="button option">Crowd Favorite</a>
					<a class="button option">Fjola Lightbane</a>
					<a class="button option">Darnassus Aspirant</a>
					<a class="button option correct">Maiden of the Lake</a>
				</div>  <!-- /challenge -->
				
				<div id="status_area">
					<p><span id="score_area">Score: <span id="score"></span></span><span id="question_area">  -  Question <span id="index"></span></span>/<span id="max_index"></span></p>
				</div>  <!-- /status_area -->
				<a id="restart" class="button" href="challenges.php">Restart</a>
			</div> <!-- /content -->
		</div>  <!-- /container -->
	</body>
</html>