<?php
	session_start();
	
	if (!isset($_SESSION["userName"])) {
		header("Location: login.php");  // Redirect to the Login Page
		$footer = "Not logged in yet!";
		exit;
	} else {
		$footer = $_SESSION["footer"];
		$userName = $_SESSION["userName"];
	}
?>