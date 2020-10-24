<!-- Author Amlana-P -->
<?php include('./backend/server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="loginstyling.css">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
</head>
<body>
	<form method="post" action="login.php">
		<div class="login">
			<div class="login-header">
				<h1>Login</h1>
			</div>
			<div class="login-form">
				<div class="error">
					<?php include('./backend/errors.php'); ?>
				</div>
				<h3>Username:</h3>
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>"/><br>
				<h3>Password:</h3>
				<input type="password" placeholder="Password" name="password"/>
				<br>
				<input type="Submit" value="Login" class="login-button" name="login_user">
				<br>
			</div>
		</div>
	</form>
</body>
</html>