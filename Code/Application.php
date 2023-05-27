<?php
	$User_ID = $_POST['User_ID'];
	$First_Name = $_POST['First_Name'];
	$Last_Name = $_POST['Last_Name'];
	$Middle_Name = $_POST['Middle_Name'];
	$HSC= $_POST['HSC'];
	$SSC = $_POST['SSC'];
	$CET = $_POST['CET'];
	$Phone_Student = $_POST['Phone_Student'];
	$Phone_Mother = $_POST['Phone_Mother'];
	$Phone_Father = $_POST['Phone_Father'];
	$DOB = $_POST['DOB'];
	$Gender = $_POST['Gender'];
	$Address= $_POST['Address'];

	

	$conn = new mysqli('localhost','root','','admission_process');
	if($conn->connect_error)
	{
		die('connection Failed :'.$conn->connect_error);
	}
	else
	{
		$stmt = $conn->prepare("insert into application_form(User_ID,First_Name,Last_Name,Middle_Name,HSC,SSC,CET,Phone_Student,Phone_Mother,Phone_Father,DOB,Gender,Address) values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("isssiiiiiisss",$User_ID,$First_Name,$Last_Name,$Middle_Name,$HSC,$SSC,$CET,$Phone_Student,$Phone_Mother,$Phone_Father,$DOB,$Gender,$Address);
		$stmt->execute();
		echo "Registered";
		$stmt->close();
		$conn->close();
	}
?>