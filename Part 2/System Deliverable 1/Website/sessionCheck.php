<?php
	session_start();
	
	if (!isset($_SESSION["userName"])) {
		header("Location: login.php");  // Redirect to the Login Page
		$footerText = "Not logged in yet!";
		exit;
	} else {
		$footerText = $_SESSION["footerText"];
		$userName = $_SESSION["userName"];
	}
?>