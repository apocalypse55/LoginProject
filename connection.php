<?php 
$serverName = "localhost";
$userName = "id20375581_shardool";
$password = "Apocalypse@12345";
$databaseName = "id20375581_loginapp";

$conn = new mysqli($serverName, $userName, $password, $databaseName);

if($conn->connect_error) {
	die("Connection failed!");
}
return $conn;
?>
