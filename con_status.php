<?php
session_start();
require_once("Classes/DemoClass.php");
$EmpID = $_GET['dis'];
$obj = new DemoClass();
if (isset($_GET['dis'])) {
	$resultdis = $obj->disEmp($EmpID);
	header("location: home.php");
}
elseif (isset($_GET['Ena'])){
	$EmpEnaID = $_GET['Ena'];
	$resultdis = $obj->enaEmp($EmpEnaID);
	header("location: home.php");
}
?>