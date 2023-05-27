<?php
	$User_ID = $_POST['User_ID'];
	$Rank = $_POST['Rank'];
	$P_1 = $_POST['P_1'];
	$P_2 = $_POST['P_2'];
	$P_3 = $_POST['P_3'];
	$P_4 = $_POST['P_4'];

	

	$conn = new mysqli('localhost','root','','admission_process');
	if($conn->connect_error)
	{
		die('connection Failed :'.$conn->connect_error);
	}
	else
	{
		$stmt = $conn->prepare("insert into preferences(User_ID,Rank,P_1,P_2,P_3,P_4) values(?,?,?,?,?,?)");
		$stmt->bind_param("iissss",$User_ID,$Rank,$P_1,$P_2,$P_3,$P_4);
		$stmt->execute();
		echo "Registered";
		$stmt->close();
		$conn->close();
	}
?>