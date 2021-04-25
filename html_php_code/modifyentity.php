<?php
$servername = "localhost";
$username = "root";
$password = "subhanMySql1";
$dbname = "real_estate_database";

$e_id = $_POST['e_id'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//if and checks needed.. i dont have time
/*if(empty($e_id)){
	echo "Please set id to value present in database";
	$conn->close();
}
else if()*/


$sql = "UPDATE business_entity SET name='$name', address='$address', phone='$phone', email='$email'  WHERE be_id='$e_id'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>