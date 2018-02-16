<?php require_once("Classes/SessionCheck.php"); 
$EmpID = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Employee Detail</title>
</head>
<body>
	<?php
		require_once("Classes/DemoClass.php");
		$Obj = new DemoClass();
		$Result = $Obj->getDetailsByEmpID($EmpID); 
	?>
	<form action="con_editEmp.php" method="post" accept-charset="utf-8">
	<!-- $first_name,$middle_name,$last_name,gender,$department,$contact,$address,$email -->
		<table>
			<tbody>
				<tr>
					<th>First Name</th>
					<td>:</td>
					<td><input type="text" name="first_name" value="<?php echo("$Result[1]"); ?>"></td>
				</tr>
				<tr>
					<th>Middle Name</th>
					<td>:</td>
					<td><input type="text" name="middle_name" value="<?php echo("$Result[2]"); ?>"></td>
				</tr>
				<tr>
					<th>Last Name</th>
					<td>:</td>
					<td><input type="text" name="last_name" value="<?php echo("$Result[3]"); ?>"></td>
				</tr>
				<tr>
					<th>Gender</th>
					<td>:</td>
					<td><input type="text" name="gender" value="<?php echo("$Result[4]"); ?>"></td>
				</tr>
				<tr>
					<th>Department</th>
					<td>:</td>
					<td><input type="text" name="department" value="<?php echo("$Result[5]"); ?>"></td>
				</tr>
				<tr>
					<th>Contact</th>
					<td>:</td>
					<td><input type="text" name="contact" value="<?php echo("$Result[6]"); ?>"></td>
				</tr>
				<tr>
					<th>Address</th>
					<td>:</td>
					<td><input type="text" name="address" value="<?php echo("$Result[7]"); ?>"></td>
				</tr>
				<tr>
					<th>Email</th>
					<td>:</td>
					<td><input type="text" name="email" value="<?php echo("$Result[8]"); ?>"></td>
				</tr>
				<input type="hidden" value="<?php echo $EmpID; ?>" name="EmpID">
			</tbody>
		</table><br>
		<input type="submit" name="editEmpBtn" value="Edit Employee">
	</form>
</body>
</html>