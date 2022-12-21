<?php
	session_start();
	include('connection.php');
    
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>
	<h2>Login Form</h2>
	<form method="POST" action="login.php">
	<label>Username:</label> <input type="text" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="username" required placeholder="Username"><br><br>
	<label>Password:</label> <input type="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password" required placeholder="Password"><br><br>
	<input type="checkbox" name="remember" <?php if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"])){ echo "checked";}?>> Remember me <br><br>
	<input type="submit" value="Login" name="login">
	</form>
 
	<span>
	<?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
</span>
</body>
</html>