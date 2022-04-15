<?php
session_start();
session_destroy();
session_unset();

session_start(); // start a new session

$_SESSION["footerText"] = "Not Yet Logged In";
$footerText = $_SESSION["footerText"];

require("dbconnect.php");

$message = "Please login";
$method  = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
	$userName = $_POST["userName"];
	$password = $_POST["password"];
		
	if ($userName == "" OR $password == "") {
		$message="Error: Please enter a Username and Password";
	} else {
		$conn = getConn();
		$sql = "SELECT u.firstName, u.lastName FROM users AS u WHERE u.userName=? AND u.password=?";
		$stmt = mysqli_stmt_init($conn);
		$message = "Error: Login unsuccessfully attempted. Try Again";
		if (mysqli_stmt_prepare($stmt, $sql)) {
			mysqli_stmt_bind_param($stmt, "ss", $userName, $password);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $firstName, $lastName);
			mysqli_stmt_store_result($stmt);
			$rows = mysqli_stmt_num_rows($stmt);
			$success = FALSE;
			echo($rows);
			if ($rows > 0) { // Are there any valid users with username and password
				while (mysqli_stmt_fetch($stmt)) {
					$message = "login successfully completed. Welcome ".$firstName.' '.$lastName;
					$_SESSION["userName"] = $userName;
					$_SESSION["footerText"] = "Current User: ".$userName." (".$firstName." ".$lastName.")";
					$footerText = $_SESSION["footerText"];

					header("Location: index.php");
					exit;
				}
			}

			mysqli_stmt_close($stmt);
		}
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SPX Physics Online - Login page</title>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Load Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <!-- This is MY stylesheet - it comes last -->
        <link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<?php
			require('header.php');
			require('nav.php');
		?>
		<maincontent class="loginBox">
			<h1>Login Page</h1>
			<p>Please Login to SPX Physics Online</p>
			<form class="loginForm" name="login" action="" method="POST">
				<h2>Username</h2>
				<input type="text" required name="userName"></input>
				<h2>Password</h2>
				<input type="password" required name="password"></input>
				<div class="loginButtonBox">
					<button type="reset">Reset</button>
					<button type="submit">Login</button>
				</div>
			</form>
		</maincontent>
	<?php require('footer.php'); ?>
	</body>
</html>