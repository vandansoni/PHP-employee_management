<?php require_once("Classes/SessionCheck.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<?php 
		$UserID = $_SESSION['UserID'];
		require_once("Classes/DemoClass.php");
		$Obj = new DemoClass();
		$ResultEmp = $Obj->getEnableEmpDetails($UserID);
		$ResultDisEmp =  $Obj->getDisableEmpDetails($UserID);
	?>

	<h1>Hello <?php echo $_SESSION['FirstName']; ?>!<a href="con_logout.php"><button " type="button">  Logout</button></a></h1>

	<a href="add_employee.php"><button type="button">Add Employee</button></a>
	<br><br>
	<table border="1">
		<caption>Employee List</caption>
		<thead>
			<tr>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Date of Joining</th>
				<th>Gender</th>
				<th>Department</th>
				<th>Contact Number</th>
				<th>Address</th>
				<th>Email</th>
				<th>Edit</th>
				<th>Delete</th>
				<th>Disable</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($ResultEmp as $RowEmp)
				{
			?>
			<tr>
				<td><?php echo($RowDisEmp[1]); ?></td>
				<td><?php echo($RowDisEmp[2]); ?></td>
				<td><?php echo($RowDisEmp[3]); ?></td>
				<td><?php echo($RowDisEmp[4]); ?></td>
				<td><?php echo($RowDisEmp[5]); ?></td>
				<td><?php echo($RowDisEmp[6]); ?></td>
				<td><?php echo($RowDisEmp[7]); ?></td>
				<td><?php echo($RowDisEmp[8]); ?></td>
				<td><?php echo($RowDisEmp[9]); ?></td>
				<td><a href="edit_employee.php?id=<?php echo($RowEmp[0]); ?>">Edit</a></td>
				<td><a href="con_delEmp.php?del=<?php echo($RowEmp[0]); ?>">Delete</a></td>
				<td><a href="con_Status.php?dis=<?php echo($RowEmp[0]); ?>">Disable</a></td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
	<br><br>
	<table border="1">
		<caption>Disabled Employee List</caption>
		<thead>
			<tr>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Date of Joining</th>
				<th>Gender</th>
				<th>Department</th>
				<th>Contact Number</th>
				<th>Address</th>
				<th>Email</th>
				<th>Edit</th>
				<th>Delete</th>
				<th>Enable</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($ResultDisEmp as $RowDisEmp)
				{
			?>
			<tr>
				<td><?php echo($RowDisEmp[1]); ?></td>
				<td><?php echo($RowDisEmp[2]); ?></td>
				<td><?php echo($RowDisEmp[3]); ?></td>
				<td><?php echo($RowDisEmp[4]); ?></td>
				<td><?php echo($RowDisEmp[5]); ?></td>
				<td><?php echo($RowDisEmp[6]); ?></td>
				<td><?php echo($RowDisEmp[7]); ?></td>
				<td><?php echo($RowDisEmp[8]); ?></td>
				<td><?php echo($RowDisEmp[9]); ?></td>
				<td><a href="edit_emp.php?id=<?php echo($RowDisEmp[0]); ?>">Edit</a></td>
				<td><a href="con_delEmp.php?del=<?php echo($RowDisEmp[0]); ?>">Delete</a></td>
				<td><a href="con_Status.php?Ena=<?php echo($RowDisEmp[0]); ?>">Enable</a></td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</body>
</html>