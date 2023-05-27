<html>
	<body>
		<table>
			<tr>
				<th>Branch<th>
					<th> Rank<th>
						<th>User ID<th>
</tr>

			</tr>

<?php
// $conn = new mysqli('localhost','root','','admission_process');
// if($conn->connect_error)
// 	{
// 		die('connection Failed :'.$conn->connect_error);
// 	}
// 	else
// 	{
// 		$query = "select * from cap_1";
// $data = mysqli_connect($conn,$query);
// $total = mysqli_num_rows($data);
// echo "$total";
// if($total!= 0)
// {
//     echo "Table has records";
// }
// else{
//     echo "No records";
// }
// 	}
    
    $conn = new mysqli('localhost','root','','admission_process');
	
	$sql  = "SELECT * FROM cap_1";
    $data = mysqli_query($conn,$query);
    // $result = $conn-> query($sql);
    // if($results->num_rows > 0)
    // {
    //     while($row = $results->fetch_assoc())
    //     {
    //         echo "<tr><td>" .$row["Branch"]. "<tr><td>" .$row["Rank"]. "<tr><td>" .$row["User_Id"]. "</td><td>";
    //     }
    // }
    // else{
    //     echo "no results";

    // }
    // $conn->close();
    
?>
</table>
</body>
</html>