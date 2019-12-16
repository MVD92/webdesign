<?php
include('connect.php');
$name=mysqli_real_escape_string($conn,$_POST['Username']);
$fname=mysqli_real_escape_string($conn,$_POST['Forename']);
$lname=mysqli_real_escape_string($conn,$_POST['Lastname']);
$dob=mysqli_real_escape_string($conn,$_POST['Birthdate']);
$email=mysqli_real_escape_string($conn,$_POST['Email']);
$gender=mysqli_real_escape_string($conn,$_POST['Gender']);
$pass_1=mysqli_real_escape_string($conn,$_POST['Password_1']);
$pass_2=mysqli_real_escape_string($conn,$_POST['Password_2']);
//verification

$count=0;
$check_query="SELECT * FROM user WHERE Username='$name' OR Email='$email' LIMIT 1";
$result=mysqli_query($conn,$check_query);
$count=mysqli_num_rows($result);
if($count>0){
echo "This username or email id already exist.";

} 
else if ($pass_1!=$pass_2){
	echo "The password doesn't match try again.";
}
else{   
	
	$query="INSERT INTO user (Username,Forename,Lastname,Birthdate,Email,Gender,Password_1,Password_2) VALUES ('$name','$fname','$lname','$dob','$email','$gender','$pass_1','$pass_2')";
	mysqli_query($conn,$query);
	$_SESSION['Username']=$name;
	$_SESSION['success']="Your registration is completed";
	header('location:dashboard.php');
}
?>