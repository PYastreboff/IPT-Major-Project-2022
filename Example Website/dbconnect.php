<?php
function getConn() {

	// define constants - cannot be changed by code
	define("dbserver", $_SERVER['SERVER_NAME']);
	define("dbusername", "12ipt");
	define("dbpassword", "12ipt");
	define("dbname", "12ipt2022db");
	
	$conn = new mysqli(dbserver, dbusername, dbpassword, dbname);
	
	// Check connection
	if (!$conn) {
		die("Failed to connect to MySQL: " .mysqli_connect_error());
	} 
	return $conn;
}
?>
