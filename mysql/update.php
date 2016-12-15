<?php

include "connection.php";

// Update Value
$sql = "UPDATE tbl_student SET last_name = 'Sharma' WHERE id = 4 ";
$res = mysqli_query($mysqli,$sql);
if($res == TRUE) {
	echo "Value Updated" . "<br>";
} else {
	echo "Error:" . mysqli_error($mysqli) . "<br>";
}

// Closing Connection
$connection = mysqli_close($mysqli);
if($connection = TRUE) {
	echo "Connection Closed" . "<br>";
}
