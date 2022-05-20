<?php 
require_once("../db.php");
$res = array("success" => false);
$user = $_POST['user'];
$qry2 = "select * from tbl_user where username = '$user'" ;
$rs = $db->prepare($qry2);
$rs->execute();
$rw = $rs->fetch();
if($rw !=0){
    $res["success"] = true;
}
echo json_encode($res);
?>