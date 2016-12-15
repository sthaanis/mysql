<?php

// Basic Syntax for connection
// $mysqli = mysqli_connect("hostname" , "username" , "password", "database");

$mysqli = mysqli_connect("localhost","root","");

if($mysqli == TRUE) {
	echo "Connection Successful" . "<br>";
} else {
	echo "Error:" . " " . "<br>";
}


//closing connection
$connection = mysqli_close($mysqli);
if($connection = TRUE) {
	echo "Connection Closed" . "<br>";
}