<?php 
session_start(); 
require_once("../db.php");
$response = array("success"  => false , "message" => "user not found");
$userid = $_POST['userid'];
$pass = $_POST['pass'];

$query = "select * from tbl_admin where userid = '$userid'  and password = '$pass'";
$rs = $db->prepare($query);
$rs->execute();
$rw = $rs->fetch();
if($rw!= 0)
{
    $_SESSION['admin'] = $userid;
    $response["success"] = true;
    $response["message"] ="Admin Login Successfull";
}
else{
    $response["success"] = false;
    $response["message"] ="Admin Login Failed. Please Enter Correct Password and Userid";
}
echo json_encode($response);
?>