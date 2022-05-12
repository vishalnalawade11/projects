<?php 
require_once("../db.php");
session_start();
$response = array("success" => false);
if(isset($_SESSION['user']))
{
    $response["success"] = true; 
}
echo json_encode($response);
?>