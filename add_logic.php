<?php
include ('connect.php');
$name=mysqli_real_escape_string($conn,$_POST['Student_name']);
$email=mysqli_real_escape_string($conn,$_POST['Email']);
$pass_1=mysqli_real_escape_string($conn,$_POST['Password']);
$gender=mysqli_real_escape_string($conn,$_POST['Gender']);
$adr=mysqli_real_escape_string($conn,$_POST['Adress']);
$count=0;
$check_query="SELECT * FROM student WHERE Email='$email' ";
$result=mysqli_query($conn,$check_query);
$count=mysqli_num_rows($result);
if($count>0){
echo "email id already exist.";

} else{

	$query="INSERT INTO student(Student_name,Email,Password,Gender,Adress) VALUES ('$name','$email','$pass_1','$gender','$adr')";
	mysqli_query($conn,$query);
	header('location:dashboard.php');
}
?> 