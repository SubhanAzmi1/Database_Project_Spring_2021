<?php
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	//Database connection
	$conn = new mysqli('localhost','root','subhanMySql1','real_estate_database');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("INSERT into business_entity(name, address, phone, email) values(?, ?, ?, ?)");
		$stmt->bind_param("ssis",$name,$address,$phone,$email);
		$stmt->execute();
		echo "registration successfull";
		$stmt->close();
		$conn->close();
	}
	header('Location: index.html')
?>