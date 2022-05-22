<?php 
require_once("../db.php");
$pid = $_GET['pid'];
$q = "select * from tbl_products where productid = '$pid'";
$rs = $db->prepare($q);
$rs->execute();
$rw = $rs->fetch();
echo json_encode($rw);
?>