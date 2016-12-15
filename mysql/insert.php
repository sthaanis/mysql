<?php

// Connection
$mysqli = mysqli_connect("localhost","root","","example");

if($mysqli == TRUE) {
	echo "Connection Successful" . "<br>";
} else {
	echo "Error:" . " " . "<br>";
}

// Insert 
$sql = "INSERT INTO tbl_student(id,first_name,last_name,email)VALUES(4,'Samixa','Sharma','samixa@gmail.com')";
$res = mysqli_query($mysqli,$sql);
if($res == TRUE) {
	echo "Data Inserted" . "<br>";
} else {
	echo "Error:" . mysqli_error($mysqli) . " " . "<br>";
}

// Closing Connection
$connection = mysqli_close($mysqli);
if($connection = TRUE) {
	echo "Connection Closed" . "<br>";
}