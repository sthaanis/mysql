<?php 

// Connection
$mysqli = mysqli_connect("localhost","root","");

if($mysqli == TRUE) {
	echo "Connection Successful" . "<br>";
} else {
	echo "Error:" . " " . "<br>";
}

// Creating Database

$sql = "CREATE DATABASE example";
$res = mysqli_query($mysqli,$sql);
if($res == TRUE) {
	echo "Database Created" . "<br>";
} else {
	echo "Error:" . " " . mysqli_error($mysqli) . "<br>";
}

// Closing Connection
$connection = mysqli_close($mysqli);
if($connection = TRUE) {
	echo "Connection Closed" . "<br>";
}