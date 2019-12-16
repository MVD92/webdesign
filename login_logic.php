<?php
include('connect.php');
$name=mysqli_real_escape_string($conn,$_POST['Username']);
$pass_1=mysqli_real_escape_string($conn,$_POST['Password_1']);
//varification
$check_query="SELECT * FROM user WHERE Username='$name' AND Password_1='$pass_1'";
$result=mysqli_query($conn,$check_query);
if($r=mysqli_fetch_array($result)){
header('location:dashboard.php');
}else{
	echo "Wrong username/password.Please,try again.";
}

?>