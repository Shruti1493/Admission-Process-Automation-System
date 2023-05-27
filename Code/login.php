<?php
$User_ID = $_POST['User_ID'];
$Password = $_POST['Password'];

// echo $User_ID;
// echo $Password;

// Connect to the database
$servername = 'localhost';
$db_username = 'root';
$db_password = '';
$dbname = 'admission_process';
$conn = mysqli_connect($servername, $db_username, $db_password, $dbname);

// Check if the connection is successful
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}

// Query the database for the user's information
$sql = "SELECT * FROM register WHERE User_ID='$User_ID'";
$result = mysqli_query($conn, $sql);

echo " Connected";

// Check if the user exists and the password is correct
if (mysqli_num_rows($result) == 1) 
{
    $row = mysqli_fetch_assoc($result);
    if($Password == $row['Password'])
    {
        echo "Congo!!!";
    } 
    else
    {
      echo $row['Password'] ;

        echo " Wrong Password";
    } 
} 
else 
{
    echo " User doesnt exist";
}


mysqli_close($conn);
?>