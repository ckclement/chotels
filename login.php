<?php
	include 'loginserver.php'
?>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

	<div class="login">
		<h1 align="center">Login</h1>
		<form action="" method="POST" style="text-align:center;">
			<input type="text" placeholder="Username" id="username" name="username"><br/><br/>
			<input type="password" placeholder="Password" id="password" name="password"><br/><br/>
			<input type="submit" value="Login" name="submit" class="btn btn-block btn-primary">
			<a href="register.php">No Account?Register</a>
			<span><?php echo $invalid; ?></span>
		</form>
	</div>
	
</body>
</html>
