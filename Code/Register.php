<?php
	$User_ID = $_POST['User_ID'];
	$Rank = $_POST['Rank'];
	$Password = $_POST['Password'];

	$conn = new mysqli('localhost','root','','admission_process');
	if($conn->connect_error)
	{
		die('connection Failed :'.$conn->connect_error);
	}
	else
	{
		$stmt = $conn->prepare("insert into register(User_ID,Rank,Password) values(?,?,?)");
		$stmt->bind_param("iis",$User_ID,$Rank,$Password);
		$stmt->execute();
		echo "Registered";
		$stmt->close();
		$conn->close();
	}
?>