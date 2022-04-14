<?php
	require("sessionCheck.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Teddy Bears R Us - Home page</title>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Load Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        
        <!-- This is MY stylesheet - it comes last -->
        <link rel="stylesheet" href="css/teddys.css"
	</head>
	<body>
<?php
	require('header.php');
	require('nav.php');
?>
	<maincontent>
	<h1>Home Page</h1>
	<p>Welcome to my Teddy bears website<p>

	
	</maincontent>
<?php require('footer.php'); ?>
	
	</body>
</html>