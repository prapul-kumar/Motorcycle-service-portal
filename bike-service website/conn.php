<?php

 $FIRST_NAME =  $_POST ['FIRST_NAME'];
 $LAST_NAME = $_POST ['LAST_NAME'];
 $RC_NO =  $_POST ['RC_NO'];
 $ADDRESS = $_POST ['ADDRESS'];
 $PH_NO = $_POST [ 'PH_NO'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bike-service";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `owner-details` (`FIRST_NAME`, `LAST_NAME`, `RC_NO`, `ADDRESS`, `PH_NO`) VALUES ('$FIRST_NAME', '$LAST_NAME', '$RC_NO', '$ADDRESS', '$PH_NO')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>