<!DOCTYPE html>
<html>
<head>
	<title>Record</title>
	<link rel="stylesheet" type="text/css" href="studrec.css">
</head>
<body>
	<div class="rec">
	<font style="chiller"><h1>Students record</h1></font>
	<table border="1" align="center" cellpadding="10" cellspacing="0">
		<tr>
			<th>Id</th>
			<th>Student name</th>
			<th>Email id</th>
			<th>Password</th>
			<th>Gender</th>
			<th>Adress</th>
			<th>Update</th>			
			<th>Delete</th>
			
		</tr>
		<?php include('connect.php'); 
		$s=mysqli_query($conn,"SELECT * FROM student"); 
		while($r=mysqli_fetch_array($s))
		{		
		?>
        <tr>
        	<td><?php echo $r['Id'];?> </td>
			<td><?php echo $r['Student_name'];?></td>
			<td><?php echo $r['Email'];?></td>
			<td><?php echo $r['Password'];?></td>
			<td><?php echo $r['Gender'];?></td>
			<td><?php echo $r['Adress'];?></td>
			<td><button name="btn1"><a href="update.php?i=<?php echo $r['Id'];?>">Update</a></button></td>
			<td><button name="btn2"><a href="del.php?i=<?php echo $r['Id'];?>">Delete</a></button></td>
		</tr>
		<?php
	    }
	    ?>
	</table><br><br>
	<center><a href="add.php"><input type="submit" name="add" value="Add new record"></a></center><br><br>
	 <center><a href="login.php"><input type="submit" name="add" value="Logout"></a></center>
	       
</div>
</body>
</html>