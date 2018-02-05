<?php
	include('insert_data.php');
	include('get_data.php');

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test_db";

$connect =  mysqli_connect($servername, $username, $password, $dbname);

$sql = " CREATE TABLE img(
	id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	url VARCHAR(200) NOT NULL
)";

// if ($connect->query($sql) == TRUE) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . $connect->error;
// }

//addImage($connect);
getImage($connect);
?>
