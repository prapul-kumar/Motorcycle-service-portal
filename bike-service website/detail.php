<?php

 $Company =  $_POST ['Company'];
 $Model = $_POST ['Model'];
 $Colour =  $_POST ['Colour'];
 $CC = $_POST ['CC'];
 $RC_NO = $_POST [ 'RC_NO'];
 $Insurance = $_POST [ 'Insurance'];




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
$sql = "INSERT INTO `bike_details` (`Company`, `Model`, `Colour`, `CC`, `RC_NO`,`Insurance`) VALUES ('$Company', '$Model', '$Colour', '$CC', '$RC_NO','$Insurance')";
if ($conn->query($sql) === TRUE) {
    echo "<b>Registered successfully</b><br>";
	echo "<b>login now</b>";
			include("login.html");

} else {
    echo "<b>Enter correct RC_NO</b>";
	include("detail.html");
}
$conn->close();


?>