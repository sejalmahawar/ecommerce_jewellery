<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$db = $conn->query("USE cj");

if (!$db){
	$conn->query("create database cj");
	$db = $conn->query("use cj");
	$table = $conn->query(

		"CREATE TABLE site_data (
			ID int NOT NULL UNIQUE AUTO_INCREMENT,
			Name varchar(50),
			Username varchar(50),
			Password varchar(16),
			Email varchar(200),
			Phone varchar(200)
		)"
	);
	var_dump($table);
}
?>