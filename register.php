<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="register.css">	
</head>
<body>
	<div class="register_box">
			<h1>Create your account</h1>
		<form action="register_logic.php" method="post">
			<div>
				<p><label for="username">Username :</label></p>
				<input type="text" name="Username" placeholder="Enter username" required>
			</div>
			<div>
				<p><label for="forename">Forename :</label></p>
				<input type="text" name="Forename" placeholder="Enter firstname" required>
			</div>
			<div>
				<p><label for="lastname">Lastname :</label></p>
				<input type="text" name="Lastname" placeholder="Enter surname" required>
			</div>
			<div>
				<p><label for="birthdate">Date of Birth :</label></p>
				<input type="date" name="Birthdate" required>
			</div>
			<div>
				<p><label for="email">Email :</label></p>
				<input type="email" name="Email" placeholder="Ex.alexlee@gmail.com" required>
			</div>
			<div>
				<p><label for="gender">Gender :</label></p>
				<input type="text" name="Gender" placeholder="Male/Female" required>
			</div>
			<div>
				<p><label for="password">Password :</label></p>
				<input type="password" name="Password_1" placeholder="Create a password" required>
			</div>
			<div>
				<p><label for="password">Confirm Password :</label></p>
				<input type="password" name="Password_2" placeholder="Re-enter the password" required>
			</div>
			<input type="submit" name="reg_btn" value="Sign up"><br>
			<p>Already a user?<a href="login.php"><strong><u>Log in</u></strong></a></p>
		</form>
	</div>

</body>
</html>

