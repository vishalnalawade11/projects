
<?php
require_once("lib/db.php");
$response = array("success" => false, "message" => "File not uploaded");

$pid = $_POST["p_id"];
$pname = $_POST["p_name"];
$pdesc = $_POST["p_desc"];
$pcat = $_POST["p_category"];
$pingr = $_POST["p_ingr"];
$price = $_POST["p_price"];

$img = $_FILES["p_img"]["name"];
echo $img;
$target_dir = "images/upload/";

$target_file = $target_dir . basename($_FILES["p_img"]["name"]);

// Check if file already exists
if (file_exists($target_file)) {
  $response["message"] = "Sorry, file already exists.";
}
else{  
    // Check file size
    if ($_FILES["p_img"]["size"] > 5000000) $response["message"] ="Sorry, your file is too large.";
    else{
          $d = move_uploaded_file($_FILES["p_img"]["tmp_name"], $target_file);
          echo $d;

        if($d) {
            $query = "insert into tbl_products (productid, pname, pdescription, pimg,pcategory,pingredients,pprice)
            values('$pid','$pname','$pdesc','$img','$pcat','$pingr','$price')";

            if($db->exec($query)){
                $response["message"] = "Data Saved Successfully to the Database!";
                $response["success"] = true;
            }
            else{
                $response["message"] = "data not inserted to database";
            }
        } 
        else {
            $response["message"] = "Sorry, there was an error uploading your file.";
        }
    }
}
echo json_encode($response);

?>
