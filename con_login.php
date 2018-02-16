<?php
	session_start();
	require_once ("Classes/DemoClass.php");

	if (isset($_POST['loginbtn'])) {

		extract($_POST);
		$Obj = new DemoClass();
		$result = $Obj-> login($username,$password);

		if ($row = mysqli_fetch_assoc($result)) {
			$_SESSION['UserID'] = $row['UserID'];
			$_SESSION['FirstName'] = $row['FirstName'];
			header("location: home.php");
		}
		else
		{
			$_SESSION['LoginErr'] = "Please Enter Correct Username/Password";
			header("location: index.php?err");
		}

		
	}

?>