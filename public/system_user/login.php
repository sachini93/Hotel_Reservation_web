<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
    <link rel="stylesheet" href="../../css/body.css">
    <style>
        body{
            background-color: #0059b3;
        }
        .reservation_body{
            width:200px;
            height:400px;
            /*align-self: center;*/
            margin: 300px;
            z-index: 2;
            overflow-y:hidden;

        }
    </style>
</head>
<body>
<div class="reservation_body" id="ss" style="padding-right: 220px">
    <h1 style="color: white;font-size: 40px">Login</h1>
	

	<form method="POST" action="../login.php">
		<!--display validation errors here-->
		
<table border=0>
<tr>
	<td> <label class="naming-label" style="font-size: 25px;">Username</label></td>
	<td><input type="text" class="input-txt" name="username"></td>
</tr>
<tr>
	<td> <label class="naming-label" style="font-size: 25px;">Password</label></td>
	<td><input type="Password" class="input-txt" name="password"></td>
</tr>
<tr>		
	<td><button type="submit" name="login" class="btn"> Login</button></td>
</tr>
</table>
		<p>
			Not yet a member?<a href="registration.php">Sign up</a>
		</p>
	</form>
</div>
</body>
</html>