<?php 

// Connection
$mysqli = mysqli_connect("localhost","root","","example");

if($mysqli == TRUE) {
	echo "Connection Successful" . "<br>";
} else {
	echo "Error:" . " " . "<br>";
}

//Creating Table 
$sql = "CREATE TABLE tbl_student(
	id int PRIMARY KEY NOT NULL,
	first_name varchar(20) NOT NULL,
	last_name varchar(20) NOT NULL,
	email varchar(255) NOT NULL
)";
$res = mysqli_query($mysqli,$sql);
if($res == TRUE) {
	echo "Table Created" . "<br>";
} else {
	echo "Error:" . " " . mysqli_error($mysqli) . "<br>";
}

// Closing Connection
$connection = mysqli_close($mysqli);
if($connection = TRUE) {
	echo "Connection Closed" . "<br>";
}
