<?php 
session_start();
    $total = 0;

    
$to = 0;

$output = "";

$output .= "
  <table class='table table-bordered table-striped'>
    <tr >
       <th>ID</th>
       <th>IMAGE</th>
       <th>NAME</th>
       <th>PRICE</th>
       <th>QUANTITY</th>
       <th>Total</th>
       <th>ACTION</th>
    </tr>
";

if (!empty($_SESSION['mycart'])) {
$cnt=1;
	foreach ($_SESSION['mycart'] as $key => $value) {
		
    $output .= "
           <tr>
             <td>".$cnt."</td>
             <td><img src='".$value['img']."' alt='image' width=100 height=100/></td>
             <td>".$value['name']."</td>
             <td>₹.".$value['price']."</td>
             <td>".$value['quantity']."</td>
             <td>₹.".number_format($value['quantity'] * $value['price'], 2)."</td>
             <td>
               <button class='btn btn-danger remove' id='".$value['id']."'>Remove</button>
             </td>           
		";
		$total = $total + $value['quantity'] * $value['price'];
    $_SESSION['total_price'] = $total;	
    $cnt++;
	}
	$output .= "
         <tr>
         <td><b></b></td>
         <td><b></b></td>
         <td><b></b></td>
         <td><b>Total Price</b></td>
         <td><b>₹.".number_format($total, 2)."</b></td>
         <td>
            <a href='checkout.php'> <button class='btn btn-warning btn-block' >Checkout</button></a>
            </td>
            <td>
              <button class='btn btn-warning btn-block clearAll' id='".$value['id']."'>Clear All</button>
            </td>
         </tr>
	";
	$to = count($_SESSION['mycart']);
	
}else{
}
$data = array();
$data['count'] = $to;
$data['total'] = $total;
$data['data'] = $output;

echo json_encode($data);
 ?>