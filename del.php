<?php 
$id=$_GET['i'];
include ('connect.php');

	mysqli_query($conn,"DELETE FROM student WHERE Id='$id'");
    header('location:dashboard.php');
?> 