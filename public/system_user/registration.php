
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>

</head>
<body>
<h2>Register</h2>
	
<form method="POST" action="Registration.php">
	<!--display validation errors here-->
		
<table border=0>
<tr>
	<td>Username</td>
	<td><input type="text" name="username"></td>
</tr>		
<tr>		
	<td>Email</td>
	<td><input type="text" name="email"> </td>
</tr>
<tr>
	<td> Password</td>
	<td><input type="Password" name="password_1"></td>
</tr>
<tr>
	<td> Confirm Password</td>
	<td><input type="Password" name="password_2"></td>
</tr>
<tr><td><button type="submit" name="register" class="btn"> Register</button></td></tr>
</table>
<p>Already a member?<a href="login.php">Sign in</a></p>
</form>
</body>
</html>