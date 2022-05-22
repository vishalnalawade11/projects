<?php
session_start();
$res = array("cnt" => 0);
$cnt = count($_SESSION["mycart"]);
if($cnt > 0)
{
    $res['cnt'] = $cnt;
}
echo json_encode($res); 
?>