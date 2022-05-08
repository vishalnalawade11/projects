<?php 
include_once("../db.php");

$response = array("success" => false, "message" => "Data Not inserted");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message =$_POST['message'];

$query = "insert into tbl_contact(fname,lname,email,subject,message) values ('$fname','$lname','$email','$subject','$message')";

if($db->exec($query))
{
    $response["success"] = true;
    $response["message"] = "Data Inserted";
    
}
echo json_encode($response);


?>