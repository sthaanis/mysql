<?php

// Connection
$mysqli = mysqli_connect("localhost","root","","example");

if($mysqli == TRUE) {
	echo "Connection Successful" . "<br>";
} else {
	echo "Error:" . " " . "<br>";
}

// Retrieving data
$sql = "SELECT * FROM tbl_student";
$res = mysqli_query($mysqli,$sql);
if($res == TRUE) {
	while($data = mysqli_fetch_array($res,MYSQLI_ASSOC)) {
		echo "ID : " . $data['id'] . "<br>";
		echo "First Name : " . $data['first_name'] . "<br>";
		echo "Last Name : " . $data['last_name'] . "<br>";
		echo "Email : " . $data['email'] . "<br>" . "<hr>";
	}

} else {
	echo "No Record" . "<br>";
}

// Closing Connection
$connection = mysqli_close($mysqli);
if($connection = TRUE) {
	echo "Connection Closed" . "<br>";
}