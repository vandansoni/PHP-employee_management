<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div align="center">
	<h1>Registration</h1>
	<?php 
		if (isset($_SESSION['Exist'])) {
			echo ('<div style="color: red">'.$_SESSION['Exist'].'</div>');
			unset($_SESSION['Exist']);
		}
		if (isset($_SESSION['RegFail'])) {
			echo ('<div style="color: red">'.$_SESSION['RegFail'].'</div>');
			unset($_SESSION['RegFail']);
		}
	?>
	<form action="con_signup.php" method="post">
		<table>
			<tbody>
				<tr>
					<td>First Name :
					<input type="text" placeholder="First name" required="" name="first_name">
					</td>	
				</tr>
				<tr>
					<td>Last Name :
					<input type="text" placeholder="Last name" name="last_name" required="">
					</td>	
				</tr>
				<tr>
					<td>Username/Email :
					<input type="text" name="Username" placeholder="Username/email" title="Enter your email-ID" required="">
					</td>
				</tr>
				<tr>
					<td>Password :
					<input type="text" name="Password" pattern="(?=^.{8,14}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="Enter your password" title="Password must between 8 to 14 character" required="">
					</td>
				</tr>
				<tr>
					<td>Confirm Password :
					<input type="password" placeholder="Retype Password " required="" name="Cpassword">
					</td>	
				</tr>
			</tbody>
		</table>
		<br>
		<input type="submit" name="loginbtn" value="Register">
	</form>
	</div>

</body>
</html>