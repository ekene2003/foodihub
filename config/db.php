<?php
//difference between session and cookie?
  


if (!session_id())
    session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$hostName = "localhost";
$user = "root";
$pass = "";
$database = "foodihub_database";
$db = new mysqli($hostName, $user, $pass, $database);
if ($db->connect_error)
    echo "Could not connect to database";

$create_admins_table = "CREATE TABLE IF NOT EXISTS admins (
    admin_id INT(255) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    image VARCHAR(50) NOT NULL,
    passkey VARCHAR(50) NOT NULL,
    status TINYINT(2) DEFAULT 1,
    access TINYINT(2) DEFAULT 1,
    token VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci, ENGINE=InnoDB";
$db->query($create_admins_table);


$create_users_table = "CREATE TABLE IF NOT EXISTS users (
    user_id INT(255) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    image VARCHAR(50) NOT NULL,
    status TINYINT(2) DEFAULT 1,
    token VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci, ENGINE=InnoDB";
    $db->query($create_users_table);
    
    
$create_vendors_table = "CREATE TABLE IF NOT EXISTS vendors (
    vendor_id INT(255) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(50) NOT NULL,
    vendorname VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    image VARCHAR(50) NOT NULL,
    status TINYINT(2) DEFAULT 1,
    token VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci, ENGINE=InnoDB";
$db->query($create_vendors_table);


$create_foods_table = "CREATE TABLE IF NOT EXISTS foods (
    food_id INT(255) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    foodname VARCHAR(50) NOT NULL,
    price DECIMAL(7,2) NOT NULL,
    quantity VARCHAR(7) NOT NULL,
    description VARCHAR(250) NOT NULL,
    image VARCHAR(50) NOT NULL,
    vendor_id INT(255) UNSIGNED NOT NULL,
    category_id TINYINT(2) DEFAULT 1,
    status TINYINT(2) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    
    
) CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci, ENGINE=InnoDB";
$db->query($create_foods_table);

$create_orders_table = "CREATE TABLE IF NOT EXISTS orders (
    order_id INT(255) UNSIGNED AUTO_INCREMENT,
    user_id INT(255) UNSIGNED NOT NULL,
    order_address VARCHAR(250) NOT NULL,
    status TINYINT(2) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(order_id,user_id)
) CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci, ENGINE=InnoDB";
$db->query($create_orders_table);

$create_order_items_table = "CREATE TABLE IF NOT EXISTS order_items (
    order_item_id INT(255) UNSIGNED AUTO_INCREMENT,
    order_id INT(255) UNSIGNED NOT NULL,
    food_id INT(255) UNSIGNED NOT NULL,
    price DECIMAL(7,2) NOT NULL,
    quantity VARCHAR(7) NOT NULL,
    status TINYINT(2) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(order_item_id,order_id,food_id)
) CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci, ENGINE=InnoDB";
$db->query($create_order_items_table);

$create_order_status_table = "CREATE TABLE IF NOT EXISTS order_status (
    order_status_id INT(255) UNSIGNED  PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL
) CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci, ENGINE=InnoDB";
$db->query($create_order_status_table);

$create_statuses_table = "CREATE TABLE IF NOT EXISTS statuses (
    status_id INT(255) UNSIGNED  PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL
) CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci, ENGINE=InnoDB";
$db->query($create_statuses_table);

$create_access_table = "CREATE TABLE IF NOT EXISTS access (
    access_id INT(255) UNSIGNED  PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL
) CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci, ENGINE=InnoDB";
$db->query($create_access_table);
$create_category_table = "CREATE TABLE IF NOT EXISTS category (
    category_id INT(255) UNSIGNED  PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL
) CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci, ENGINE=InnoDB";
$db->query($create_category_table);
// utility functions
function selectFcn($table, $statement, $condition = "", $params ="", ...$args){
    global $db;
    $stmt = $db->prepare("SELECT $statement FROM $table $condition");
    $condition != "" ? $stmt->bind_param("$params", ...$args) : "";
    $stmt->execute();
    $res = $stmt->get_result();
    return $res;
}


function insertFcn($table,$fields,$questions, $params = "", ...$args){
    global $db;
    // $values = implode($values, ",");
    $insertQuery = $db->prepare("INSERT INTO $table ($fields) VALUES ($questions)");
    // echo "$params are my params";
    // echo "$values are my values";
    // $fieldValue = implode($values, ",");
    // echo gettype($fieldValue);
    // $fieldcount = array_fill(0,count($values),$fieldValue);
    
    $insertQuery->bind_param($params, ...$args);
    $status = $insertQuery->execute();
    return $status;
         
}
function updateFcn($table, $statement, $condition = "", $params = "", ...$args){
    global $db;
    $stmt = $db->prepare("UPDATE $table SET $statement  $condition");
    $condition != "" ? $stmt->bind_param("$params", ...$args) : "";
    $status = $stmt->execute();
    return $status;
}
function deleteFcn($table, $condition = "", $params = "", ...$args){
    global $db;
    $stmt = $db->prepare("DELETE FROM $table  $condition");
    $condition != "" ? $stmt->bind_param("$params", ...$args) : "";
    $status = $stmt->execute();
    return $status;
}
?> 