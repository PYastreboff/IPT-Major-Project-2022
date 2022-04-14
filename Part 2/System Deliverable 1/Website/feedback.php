<?php
	require('sessionCheck.php');
	require('dbconnect.php');

	$method  = $_SERVER["REQUEST_METHOD"];
	$conn = getConn();
	$message = "Please add new feedback comment";
	
	IF ($method=="POST") {
		//inserting a new feedback if submit (post) button pressed
		$fbUserName = $_POST["fbUserName"];
		$fbComment = $_POST["fbComment"];

		$sql = "INSERT INTO feedback (userName, feedbackComment) VALUES ('".$fbUserName."', '".$fbComment."')";

		if ($conn->query($sql) === TRUE) {
			$message = "New feedback created successfully";
		} else {
			$message = "Feedback Error: " . $sql . "<br>" . $conn->error;
		}
	}
	// retrieve existing comments including new one - or "no feedback" 
	$sql = "(SELECT f.feedbackId, f.userName, u.firstName, u.lastName, f.feedbackComment FROM feedback AS f, users AS u WHERE f.userName = u.userName ORDER BY f.feedbackId DESC LIMIT 10) ORDER BY feedbackId ASC";
	//echo($sql);
	$result = $conn->query($sql);
	
	$fbOut = "<table>";
	
	IF ($result->num_rows > 0) {
		// output data of each row
		$fbOut .= "<tr><th>Id</th><th>User</th><th>First Name</th><th>Last Name</th><th>Comment</th></tr>";
		while($row = $result->fetch_assoc()) {
			$fbOut .= "<tr>";
			$fbOut .= "<td>". $row["feedbackId"]."</td>";
			$fbOut .= "<td>" . $row["userName"]. "</td>";
			$fbOut .= "<td>" . $row["firstName"]. "</td>";
			$fbOut .= "<td>" . $row["lastName"]. "</td>";
			$fbOut .= "<td>". $row["feedbackComment"]."</td>";
			 $fbOut .= "</tr>";
		 }
	 } ELSE {
			 $fbOut .= "<tr><td>no feedback results</td></tr>";
	} 
	$fbOut .= "</table>";
		
	$conn->close();
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
		<h1>Feedback Page</h1>
		<div style="margin: auto;width: 50%;">
		<h3>Last 10 Feedback Comments</h3>
		  <?php echo($fbOut); ?>
		<form action="" method="post" name="FeedBackForm" id="FeedBackForm">
		 <h3>Leave Your Feedback here:</h3> 
		  <table width="100%">
			<tbody>
			  <tr>
				<td>Name</td>
				<td>
				<input name="fbUserName" type="text" size="50" maxlength="100" value=<?php echo($userName) ?> readonly></td>
			  </tr>
			  <tr>
				<td>Comment</td>
				<td>
				<textarea name="fbComment" rows="5" cols="50" maxlength="250" ></textarea></td>
			  </tr>
			  <tr>
				<td><input type="reset" name="reset" id="reset" value="Reset"></td>
				<td><input type="submit" name="submit" id="submit" value="Submit"></td>
			  </tr>
			</tbody>
		  </table>
		</form>
		<h3><?php echo($message); ?></h3>
		</div>
	</maincontent>
	<?php require('footer.php'); ?>
	
	</body>
</body>
</html>