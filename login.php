<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
		<div class="login-box">
			<h1>Login here</h1>		
		<form action="login_logic.php" method="post">
			<div>
		      <p><label for="username">Username :</label></p>
				<input type="text" name="Username" placeholder="Enter username" required>
			</div>
			<div>
			  <p><label for="password">Password :</label></p>
				<input type="password" name="Password_1" placeholder="Enter password"  required>
			</div><br>
			<input type="submit" name="log_btn" value="Log in"><br><br>
			<p>Not a user?<a href="register.php"><b><u>  Register here</u></b></a></p>
		</form>
	</div>

</body>
</html>
