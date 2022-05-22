<?php 
session_start();

$res = array("success" => false, "message" => "Product is not added to cart");

if (isset($_SESSION['mycart'])) {

    $is_available = 0;
     
    foreach ($_SESSION['mycart'] as $key => $value) {
        
        if ($_SESSION['mycart'][$key]['id'] == $_POST['productid'] ) {
            $is_available++;

            $_SESSION['mycart'][$key]['quantity'] = $_SESSION['mycart'][$key]['quantity'] + $_POST['quantity'];
            $res['message'] = "Product count is updated cart";
            $res["success"] = true;
        }
    }

    if ($is_available == 0) {
        $item_array = array(
       'id'  => $_POST['productid'],
       'name' => $_POST['pname'],
       'price' => $_POST['pprice'],
       'img' => $_POST["pimg"],
       'quantity' => $_POST['quantity']
    );

    $_SESSION['mycart'][] = $item_array;
    $res['message'] = "Data is Added to the cart";
    $res["success"] = true;

    }

}else{

    $item_array = array(
       'id'  => $_POST['productid'],
       'name' => $_POST['pname'],
       'price' => $_POST['pprice'],
       'img' => $_POST["pimg"],
       'quantity' => $_POST['quantity']
    );

    $_SESSION['mycart'][] = $item_array;
    $res['message'] = "Data is Added to the cart";
    $res["success"] = true;
    
}
echo json_encode($res);

?>