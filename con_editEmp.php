<?php
session_start();
require_once("Classes/DemoClass.php");

$obj = new DemoClass();
extract($_POST);
$result = $obj->editEmpDetails($first_name,$middle_name,$last_name,$gender,$department,$contact,$address,$email);

header("location: home.php");die();
?>