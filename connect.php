<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = '';

//Create a connection
$conn = new mysqli($servername,$username,$password,'student_management');

//Check Connect is Established.
if($conn->connect_error)
{
	die("Connection could not be established". $conn->connect_error);
}
//echo "Connection established.";
//To close the connection
//$conn->close();
?>