<?php require_once("Classes/SessionCheck.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
</head>
<body>
	<form action="con_addEmp.php" method="post" accept-charset="utf-8">
		<table>
			<tbody>
				<tr>
					<td>Employee First Name :
					<input type="text" name="first_name" required="required">
					</td>
				</tr>
				<tr>
					<td>Employee Middle Name :
					<input type="text" name="middle_name" required="required">
					</td>
				</tr>
				<tr>
					<td>Employee Last Name :
					<input type="text" name="last_name" required="required">
					</td>
				</tr>
				<tr>
					<td>Employee Date of Joining :
					<input type="date" name="date_of_joining" required="required">
					</td>
				</tr>
				<tr>
					<td>Employee Gender :
					<input type="radio" name="gender" value="male"> Male<br>
					<input type="radio" name="gender" value="female"> Female<br>
					</td>
				</tr>
				<tr>
					<td>Employee Department :
					<select required="required" name="department">
						<option value="Manager" >Manager</option>
						<option value="HR" >HR</option>
						<option value="Developer" >Developer</option>
						<option value="Embedded" >Embedded</option>
					</select>
					</td>
				</tr>
				<tr>
					<td>Employee Email :
					<input type="email" name="email" required="required">
					</td>
				</tr>
				<tr>
					<td>Employee Contact Number:
					<input type="number" name="contact" required="required">
					</td>
				</tr>
				<tr>
					<td>Employee Address :
					<input type="text" name="address" required="required">
					</td>
				</tr>
				
				<input type="hidden" name="users_id" value="<?php echo $_SESSION['UserID']; ?>">
				<!-- <input type="hidden" name="is_active" value="1">
				<input type="hidden" name="is_delete" value="0"> -->

			</tbody>
		</table><br>
		<input type="submit" name="addEmpBtn" value="Add Employee">
	</form>
</body>
</html>