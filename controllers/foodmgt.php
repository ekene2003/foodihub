<?php
require_once("../config/db.php");
$table = "foods";
$folder = $_SERVER['DOCUMENT_ROOT'."foodihub"];
if (isset($_POST['createFood'])) {
     $foodname =$db->real_escape_string($_POST['foodname'])
     $price =$db->real_escape_string($_POST['price'])
     $quantity =$db->real_escape_string($_POST['quantity'])
     $category_id =$db->real_escape_string($_POST['category_id'])
     $description =$db->real_escape_string($_POST['description'])
     $image =$db->basename($_FILES['image']['name']);
     $image =strtolower($image);
     $ext = pathinfo ($image, PATHINFO_EXTENSION);
     $valid_extension = ['jpg','jpeg','png'];
     if (in_array($ext,$valid_extension)) {
          // $insertFood = insertFcn($table,"foodname,price,quantity,category_id,description,vendor_id,image","?,?,?,?,?,?,?","sssisis","$foodname,$price,$quantity,$category_id,$description,$vendor_id,$image")
          $insertQuery = $db->prepare("INSERT INTO $table(foodname,price,quantity,catergory_id,description,vendor_id,image) VALUES (?,?,?,?,?,?,?)");
          $insertQuery->bind_param("sssisis",$foodname,$price,$quantity,$catergory_id,$description,$vendor_id,$image);
          $insertFood = $insertQuery->execute();
          if ($insertFood) {
               move_uploaded_file($_FILES['image']['tmp_name'],"$folder/images/foods/$image");
               echo json_encode(['status' => true, 'title' => "Food created sucesssfully", 'comment' => "We now have a new food, thanks to you.", 'icon' => 'success', 'btn' => 'btn btn-success'],true);
          }
          else {
               echo json_encode(['status' => false, 'title' => 'Unable to Create Account', 'comment' => "Darn! We are unable to create your food record.$th", 'icon' => 'error', 'btn' => 'btn btn-error'],true);
          }
     }
     else {
        echo json_encode(['status' => false, 'title' => 'Invalid image extension', 'comment' => 'Invalid Image extension. Only jpg, jpeg or png are allowed', 'icon' => 'error', 'btn' => 'btn btn-error'],true);
     }
}
?>