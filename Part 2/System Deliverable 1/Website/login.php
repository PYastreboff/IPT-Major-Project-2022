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
					$_SESSION["firstName"] = $firstName;
					$_SESSION["lastName"] = $lastName;
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
	<?php require('head.php'); ?>
	<body>
		<?php
			require('header.php');
			//require('nav.php');
		?>
		<maincontent class="loginBox">
			<h1>Login Page</h1>
			<p>Please Login to SPX Physics Online</p>
			<form class="loginForm" name="login" action="" method="POST">
				<div class="input-container">
					<input type="text" name="userName" required></input>
					<label>Username</label>		
				</div>
				<div class="input-container">		
					<input type="password" name="password" required></input>
					<label>Password</label>
				</div>
				<div class="loginButtonBox">
					<button type="reset">Reset</button>
					<button type="submit">Login</button>
				</div>
			</form>
		</maincontent>
	<?php require('footer.php'); ?>
	</body>
</html>