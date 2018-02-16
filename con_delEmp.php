<?php 

session_start();
require_once("Classes/DemoClass.php");
extract($_POST);
$EmpID = $_GET['del'];
$obj = new DemoClass();
$result = $obj->delEmp($EmpID);
header("location: home.php");
?>