<?php
session_start();
$res = array("cnt" => 0, 'f' => false );
$cnt = count($_SESSION["mycart"]);
if($cnt > 0)
{
    $res['cnt'] = $cnt;
    $res['f'] = true;
}
else{
    $res['cnt'] = 0;
}

echo json_encode($res); 
?>