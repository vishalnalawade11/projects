<?php
require_once("../db.php");
$response = array("success"  => false, "message" => "user registration failed", "f" => 0);
$userid= $_POST['userid'];
$pass=$_POST['pass'];
$mob = $_POST['mobi'];

$qry = "insert into tbl_user (username,password,mobileno) values('$userid' ,'$pass','$mob')";
if($db->exec($qry)){
    $response["success"] = true;
    $response["message"] = "user registration Successfull";
}

echo json_encode($response);
?>