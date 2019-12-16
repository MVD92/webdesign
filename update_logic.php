<?php
include ('connect.php');
$id=mysqli_real_escape_string($conn,$_POST['Id']);
$name=mysqli_real_escape_string($conn,$_POST['Student_name']);
$email=mysqli_real_escape_string($conn,$_POST['Email']);
$pass_1=mysqli_real_escape_string($conn,$_POST['Password']);
$gender=mysqli_real_escape_string($conn,$_POST['Gender']);
$adr=mysqli_real_escape_string($conn,$_POST['Adress']);


$query="UPDATE  student SET Student_name='$name',Email='$email',Password='$pass_1',Gender='$gender',Adress='$adr' WHERE Id='$id'";
	mysqli_query($conn,$query);
	header('location:dashboard.php');

?> 