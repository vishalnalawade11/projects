<?php
session_start();
$res= array("msg" => "data not found", "total" => 0 );
$p = array(array());
$i = 0;
if(isset($_SESSION['mycart']))
{
    foreach($_SESSION['mycart'] as $k => $v)
    {
        $p[$i][0] = $v['name'];
        $p[$i][1]= $v['quantity'];
        $p[$i][2] = $v['price'] * $v['quantity'];
        $i++;
    }
    $res["msg"] = "Data found";
}
$res['total'] = $_SESSION['total_price'];
$res["data"] = $p;

echo json_encode($res);
?>