<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div align="center">
	<h1>Login</h1>
	<?php 
		if (isset($_SESSION['LoginErr'])) {
			$LoginErr = $_SESSION['LoginErr'];
			echo ('<div style="color: red">'.$LoginErr.'</div>');
			unset($_SESSION['LoginErr']);
		}
		elseif (isset($_SESSION['RegSucces'])) {
			echo ('<div style="color: red">'.$_SESSION['RegSucces'].'</div>');
			unset($_SESSION['RegSucces']);
		}
	?>
	<a href="registration.php">Registration</a><br><br>
	<form action="con_login.php" method="post">
		<table>
			<tbody>
				<tr>
					<td>Username/Email :<input type="text" name="username" placeholder="Username/email" title="Enter your email address as username" required=""></td>
				</tr>
				<tr>
					<td>Password :<input type="password" name="password" placeholder="Enter your password" title="Password must between 8 to 14 character" required=""></td>
				</tr>
			</tbody>
		</table>
		<br>
		<input type="submit" name="loginbtn" value="Login">
	</form>
	</div>

</body>
</html>