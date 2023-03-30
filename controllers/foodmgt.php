<?php
require_once("../config/db.php");
$table = "foods";
$folder = $_SERVER['DOCUMENT_ROOT']."/foodihub";

if(isset($_POST['createFood'])){
    $foodname = $db->real_escape_string($_POST['foodname']);
    $price = $db->real_escape_string($_POST['price']);
    $quantity= $db->real_escape_string($_POST['quantity']);
    $category_id = $db->real_escape_string($_POST['category_id']);
    $description = $db->real_escape_string($_POST['description']);
    $vendor_id = $_SESSION['user_id'];
    $image = basename($_FILES['image']['name']);
    $image = strtolower($image);
    $image = str_repeat(" ",'_',$image);
    $ext = pathinfo($image, PATHINFO_EXTENSION);
    $valid_extension = ['jpg', 'jpeg', 'png'];
    if(in_array($ext, $valid_extension)){
        $insertFood = insertFcn($table, "foodname,price,quantity,category_id,description,vendor_id,image","?,?,?,?,?,?,?","sssisis",$foodname,$price,$quantity,$category_id,$description,$vendor_id,$image);
        // $insertQuery = $db->prepare("INSERT INTO $table (foodname,price,quantity,category_id,description,vendor_id,image) VALUES (?,?,?,?,?,?,?)");
        // $insertQuery->bind_param("sssisis", $foodname,$price,$quantity,$category_id,$description,$vendor_id,$image);
        // $insertFood = $insertQuery->execute();
        if($insertFood){
            move_uploaded_file($_FILES['image']['tmp_name'], "$folder/images/foods/$image");
            echo json_encode(['status' => true, 'title' => "Food Created Successfully", 'comment' => 'We now have a new food...', 'icon' => 'success', 'btn' => 'btn btn-success']);
        }
        else{
            echo json_encode(['status' => false, 'title' => 'Unable to Create Account', 'comment' => "Darn! We are unable to create your food record.", 'icon' => 'error', 'btn' => 'btn btn-error']);
        }
    }
    else{
        echo json_encode(['status' => false, 'title' => 'Invalid image extension', 'comment' => 'Invalid Image extension. Only jpg, jpeg or png are allowed', 'icon' => 'error', 'btn' => 'btn btn-error']);
    }
}
if(isset($_POST['updateFood'])){
    $foodname = $db->real_escape_string($_POST['foodname']);
    $food_id = $db->real_escape_string($_POST['updateFood']);
    $price = $db->real_escape_string($_POST['price']);
    $quantity= $db->real_escape_string($_POST['quantity']);
    $category_id = $db->real_escape_string($_POST['category_id']);
    $description = $db->real_escape_string($_POST['description']);
    $image = $db->real_escape_string($_POST['image']);
    $vendor_id = $_SESSION['user_id'];
    $image = $_FILES['image']['name'] != "" ? basename($_FILES['image']['name']) : $_POST['image'];
    $image = strtolower($image);
    $image = str_replace(" ",'_',$image);
    $ext = pathinfo($image, PATHINFO_EXTENSION);
    $valid_extension = ['jpg', 'jpeg', 'png'];
    if(in_array($ext, $valid_extension)){
        $insertFood = updateFcn($table, "foodname='$foodname',price='$price',quantity='$quantity',category_id='$category_id',description='$description',vendor_id='$vendor_id',image='$image.$ext'","WHERE food_id = ?","i",$food_id);
        // $insertQuery = $db->prepare("INSERT INTO $table (foodname,price,quantity,category_id,description,vendor_id,image) VALUES (?,?,?,?,?,?,?)");
        // $insertQuery->bind_param("sssisis", $foodname,$price,$quantity,$category_id,$description,$vendor_id,$image);
        // $insertFood = $insertQuery->execute();
        if($insertFood){
               isset($_FILES['image']) ? move_uploaded_file($_FILES['image']['tmp_name'], "$folder/images/foods/$image") : "";
            echo json_encode(['status' => true, 'title' => "Food updated Successfully", 'comment' => 'We now have a new food...', 'icon' => 'success', 'btn' => 'btn btn-success']);
        }
        else{
            echo json_encode(['status' => false, 'title' => 'Unable to update Account', 'comment' => "Darn! We are unable to update your food record.", 'icon' => 'error', 'btn' => 'btn btn-error']);
        }
    }
    else{
        echo json_encode(['status' => false, 'title' => 'Invalid image extension', 'comment' => 'Invalid Image extension. Only jpg, jpeg or png are allowed', 'icon' => 'error', 'btn' => 'btn btn-error']);
    }
}
if(isset($_POST['delete_id'])){
    $food_id = $db->real_escape_string($_POST['delete_id']);
        $user_id = $_SESSION['user_id'];
        $findFood  = selectFcn("foods","foodname,image","WHERE food_id = ? AND vendor_id = ?","ii",$food_id,$user_id );
    if ($findFood->num_rows > 0) {
        $row = $findFood->fetch_assoc();
        $foodname = $row["foodname"];
        $image = $row["image"];
         $deleteFood = deleteFcn($table,"WHERE food_id = ? AND vendor_id = ?","ii",$food_id,$user_id);
            if ($deleteFood) {
                unlink("$folder/images/foods/$image");
                echo json_encode(['status' => true, 'title' => "$foodname Deleted Successfully", 'comment' => 'you have deleted this food', 'icon' => 'success', 'btn' => 'btn btn-success']);
            }
        else{
            echo json_encode(['status' => false, 'title' => 'Unable to delete food', 'comment' => 'Sorry, we could not process your request ', 'icon' => 'error', 'btn' => 'btn btn-error']);
        }
    }
    else{
        echo json_encode(['status' => false, 'title' => 'Unable to find food', 'comment' => 'Sorry, it appears this food was not uploaded by you', 'icon' => 'error', 'btn' => 'btn btn-error']);
    }
}
?>