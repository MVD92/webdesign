<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
	<link rel="stylesheet" type="text/css" href="addrec.css">	
</head>
<body>
	<div class="add_box">
			<h1><b><u>Add your record here</u></b></h1>
		<form action="add_logic.php" method="post">
			<div>
			<p>	<label for="Student_name">Student name :</label></p>
				<input type="text" name="Student_name" placeholder="Enter student name" required>
			</div>
			<div>
			<p>	<label for="email">Email :</label></p>
				<input type="email" name="Email" placeholder="Ex.alexlee@gmail.com" required>
			</div>
			<div>
			<p>	<label for="gender">Gender :</label></p>
				<input type="text" name="Gender" placeholder="Male/Female" required>
			</div>
			<div>
			<p>	<label for="password">Password :</label></p>
				<input type="password" name="Password" placeholder="Enter your password" required>
			</div>
			<div>
			<p>	<label for="password">Adress :</label></p>
				<input type="text" name="Adress" placeholder="Enter your city name" required>
			</div>	
			<input type="submit" name="add" value="Add record">
		</form>
	</div>

</body>
</html>

