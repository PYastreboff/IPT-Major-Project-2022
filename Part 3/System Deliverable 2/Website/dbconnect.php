<?php
function getConn() {

	// define constants - cannot be changed by code
	define("dbserver", $_SERVER['SERVER_NAME']);
	define("dbusername", "yast03");
	define("dbpassword", "password");
	define("dbname", "yast03iptdb");
	
	$conn = new mysqli(dbserver, dbusername, dbpassword, dbname);
	
	// Check connection
	if (!$conn) {
		die("Failed to connect to MySQL: " .mysqli_connect_error());
	} 
	return $conn;
}
?>
