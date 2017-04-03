<?php
	include_once "database_connection.php";
	
	$id = $_POST["id"];
	
	$query = $con->prepare("DELETE FROM LH_Comments WHERE id = :id");
	$success = $query->execute([
		'id' => $id]);
		
	header('Location: http://studentnet.dundeeandangus.ac.uk/~1503052/LearnHearthstone/discussion.php');
?>