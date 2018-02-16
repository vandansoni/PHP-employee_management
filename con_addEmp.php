<?php
session_start();
require_once("Classes/DemoClass.php");

$obj = new DemoClass();
extract($_POST);
$result = $obj->addEmpDetails($first_name,$middle_name,$last_name,$date_of_joining,$gendr,$department,$contact,$address,$email,$users_id,$is_active,$is_delete,$created_by,$update_by,$created_at,$updated_at);

header("location: home.php");die();
?>