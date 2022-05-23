<?php
session_start();
require_once("../db.php");
$res = array("success" => false,"msg" => "email not send");
$name = $_POST['name'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$uemail = $_POST['email'];
$country = $_POST['country'];
$user = $_SESSION['user'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$date = date("Y-m-d");

function function_alert($message) {   
    //$su ="File Uploaded Successfully";
    // Display the alert box    
       echo "<script type ='text/JavaScript'>";  
       echo "alert('$message')";  
       echo "</script>";   
       //echo "<script>window.open('../index.php','_self')</script>";         
   } 

$message = "
    <h2 align='center' text-color='green'>Payment Successfull</h2>
    <h3 align='center'>Order Delivery</h3>
  <center>
  <table border='1'  cellspacing='0' class=' table table-striped table-condensed table-bordered' >
  <tr>
  <th>Product Name</th><th>Price</th>
  </tr>";

if(isset($_SESSION['mycart']))
{
foreach ($_SESSION['mycart'] as $key => $value) {
	$message.="<tr>
	    <td>".$value['name']."</td>
	    <td>".$value['quantity'] * $value['price']."</td>
	    </tr>";
 }
 $message.="</table></center>";	

       $owner_mail = "medicooproject123@gmail.com";

   
                                          // secure transfer enabled REQUIRED for Gmail
                                           require '../phpmailer/PHPMailerAutoload.php';
   
                                           //create an instance of PHPMailer
                                           $mail = new PHPMailer;
   
                                           $mail->Host = "smtp.gmail.com";
                                           //enable SMTP
                                           $mail->isSMTP();
                                           //$mail->SMTPDebug = 2;   
   
                                           //set authentication to true
                                           $mail->SMTPAuth = true;
   
                                           //set login details for Gmail account
                                           $mail->Username = "medicooproject123@gmail.com";
                                           $mail->Password = "Medicoo@123";
   
                                           //set type of protection
                                           $mail->SMTPSecure = "tls";         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                                           $mail->Port  = 587;  
   
                                           //set subject
                                           $mail->Subject = "Delivery of Medicoo Products";
   
                                           //set HTML to true
                                           $mail->isHTML(true);
   
                                           //set body
                                           $mail->Body = $message;
   
                                           //add attachment
                                           $mail->AltBody = "This is the body in plain text for non-HTML mail  clients";
                                           //set who is sending an email
                                           $mail->setFrom($owner_mail, "Medicoo");
                                           //set where we are sending email (recipients)
                                           $mail->addAddress($uemail);

                                           if($mail->send()){
                                            foreach ($_SESSION['mycart'] as $key => $value) {
                                            $pid = $value['id'];
                                            $price = $value['quantity'] * $value['price'];
                                            $q = "INSERT INTO `tbl_order`(`name`, `email`, `date`, `userid`, `price`, `productid`, `phone`, `address`, `zipcode`, `state`, `county`) VALUES 
                                            ($name,$uemail,$date,$user,$price,$pid,$phone,$address,$zipcode,$state,$country)";
                                            if($db->exec($q))
                                             {
                                                 continue;
                                             }
                                             else{
                                                 function_alert("Query is not executed");
                                             }
                                            }
                                            $res["success"] = true;
                                            $res["msg"]="Your Order is Delivered Successfully..Visit  Our Store Again!";
                                            unset($_SESSION['mycart']);
                                           } 
                                           else {
                                            $res["msg"]= "The Mail is not Sent!" ;
                                          }  
}
else{
    $res['msg'] = "No orders are there to proccess";
}
echo json_encode($res);

?>