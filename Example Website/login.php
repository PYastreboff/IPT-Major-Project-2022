<?php
	session_start();
	session_destroy();
	session_unset();
	session_name("TeddySite");
	session_start();
	
	require("dbconnect.php");
	
	$_SESSION["footer"] = "Not Yet Logged In";
	$footer = $_SESSION["footer"];
	
	$message = "Please login";
	$method  = $_SERVER["REQUEST_METHOD"];

	IF ($method=="POST") {
		$userName = $_POST["userName"];
		$password = $_POST["password"];
			
		IF ($userName=="" OR $password=="") {
			$message="Error: Please enter a Username and Password";
		} else {
			$conn = getConn();
			$sql = "SELECT u.firstName, u.lastName FROM users AS u WHERE u.userName=? AND password=?";
			//echo($sql);
			$stmt = mysqli_stmt_init($conn);
			$message = "Error: Login unsuccessfully attempted. Try Again";
			$retCode = -1;
			if (mysqli_stmt_prepare($stmt, $sql)) {
				mysqli_stmt_bind_param($stmt,"ss",$userName, $password);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_bind_result($stmt,$firstName,$lastName);
				mysqli_stmt_store_result($stmt);
				$rows = mysqli_stmt_num_rows($stmt);
				$success = false;
				//echo($rows);
				if ($rows > 0) { // Are there any valid users with username and password
					while (mysqli_stmt_fetch($stmt)) {
						$message = "login successfully completed. Welcome ".$firstName.' '.$lastName;
						$_SESSION['userName']  = $userName;
						$_SESSION["footer"] = "Current User: ".$userName." (".$firstName." ".$lastName.")";
						$footer = $_SESSION["footer"];
						$success = true;
					}
				}
				mysqli_stmt_close($stmt);
				if ($success==true) {
					header("Location: index.php");
					exit;
				}
			}
		}
	}
	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Teddy Bears R Us - Login page</title>
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
	<h1>Login Page</h1>
	<p>Please Login to my Teddy bears website<p>

	<form name="login" action="" method="POST">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" required name="userName"></input></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" required name="password"></input></td>
			</tr>
			<tr>
				<td><button type="reset">Start all over AGAIN!!</button></td>
				<td><button type="submit">Try to login</button></td>
		</table>
	</form>
	</maincontent>
<?php require('footer.php'); ?>
	
	</body>
</html>