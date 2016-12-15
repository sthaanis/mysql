<?php
// Connection
$mysqli = mysqli_connect("localhost","root","","example");

if($mysqli == TRUE) {
	echo "Connection Successful" . "<br>";
} else {
	echo "Error:" . " " . "<br>";
}

// Delete 
$sql = "DELETE FROM tbl_student WHERE id = 4";
$res = mysqli_query($mysqli,$sql);
if($res == TRUE) {
	echo "Record Deleted" . "<br>";
} else {
	echo "Error:" . mysqli_error($mysqli) . "<br>";
}

// Closing Connection
$connection = mysqli_close($mysqli);
if($connection = TRUE) {
	echo "Connection Closed" . "<br>";
}