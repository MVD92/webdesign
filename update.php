<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="update.css">
</head>
<body>
</body>
<?php $id=$_GET['i']; ?>
	<div class="up_box">
			<h1><u>Update your data here</u></h1>
		<form action="update_logic.php" method="post">
			<div>
				<input type="hidden" name="Id" value="<?php echo $id;?>">
			</div>
			<div>
				<p><label for="Student_name">Student name :</label></p>
				<input type="text" name="Student_name" placeholder="Enter student name"  required>
			</div>
			<div>
				<p><label for="email">Email :</label></p>
				<input type="email" name="Email" placeholder="Enter valid email id" required>
			</div>
			<div>
				<p><label for="gender">Gender :</label></p>
				<input type="text" name="Gender" placeholder="Male/Female"  required>
			</div>
			<div>
				<p><label for="password">Password :</label></p>
				<input type="password" name="Password" placeholder="Update your password"  required>
			</div>
			<div>
				<p><label for="password">Adress :</label></p>
				<input type="text" name="Adress" placeholder="Enter city name" required>
			</div>
			
			<input type="submit" name="upd" value="Update data">
		</form>
	</div>

</body>
</html>

