<?php 
$result = array();
require_once("../db.php");
$res = array("success" => false, "data" => null);
$cat = $_GET["category"];   
$query = "select * from tbl_products where pcategory='$cat'";
$rs = $db->prepare($query);
$rs->execute();
$flag = false;
while($rw = $rs->fetch())
{
   $arr = array();
   foreach($rw  as $k => $val)
   {
      $arr[$k] = $val;
   }
   array_push($result,$arr);
   if(!$flag) $flag = true;
}
if($flag)
{
    $res["success"] = true;
    $res["data"] = $result;
}

echo json_encode($res);
?>