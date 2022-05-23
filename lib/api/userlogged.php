<?php 
require_once("../db.php");
session_start();
$response = array("success" => false, 'user' => " ");
if(isset($_SESSION['user']))
{
    $response["success"] = true; 
    $response['user'] = $_SESSION['user'];
}
echo json_encode($response);
?>