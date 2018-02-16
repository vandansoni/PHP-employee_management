<?php

session_start();
ob_start();
require_once("Classes/DemoClass.php");
extract($_POST);
$Obj = new DemoClass();


if($resultcheck = $Obj->signUpCheck($username))
{
	if($password == $Cpassword)
	{

		if($Result = $Obj->signUp($first_Name,$last_Name,$username,$password)) {

		$_SESSION['RegSucces'] = "Registration Successfull.";
		header("Location: index.php");

		}
		else
		{

		header("location: index.php?Fail");

		}
	}
	else
	{
		$_SESSION['RegFail'] = "Password does not match.";
		header("Location: registration.php");
	}

}
else
{
	$_SESSION['Exist'] = "Username/Email already exist.";
		header("location: registration.php?Exist");
}

?>