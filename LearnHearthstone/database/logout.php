<?php
	session_start();
	$_SESSION["admin"] = false;
	header('Location: http://studentnet.dundeeandangus.ac.uk/~1503052/LearnHearthstone/discussion.php');
?>