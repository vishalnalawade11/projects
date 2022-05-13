<?php 
session_start();
require_once("../db.php");
$response = array("success"  => false, "message" => "user Login Failed");
$userid = $_POST['userid'];
$pass = $_POST['pass'];

$qry = "select * from tbl_user where username = '$userid' and password ='$pass' ";
$rs = $db->prepare($qry);
$rs->execute();
$rw = $rs->fetch();

if($rw!=0)
{
    $_SESSION['user'] = $userid;
    $response["success"] = true;
    $response["message"] = "user Login Successfully!";
}
echo json_encode($response);
?>