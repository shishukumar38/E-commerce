<?php
$host = "localhost";
$user ="root";
$password ='';
$database ="shishu_kumar_ecommerce";
$table= "shishu_kumar_ecommerce_user_tbl";
$cst_deteils ="shishu_kumar_ecommerce_costumer_deteils";
$login_tbl ="shishu_kumar_ecommerce_login_tbl";
 // connection to $database
 $conn = new mysqli($host,$user,$password,$database);
 // connection error
 if ($conn->connect_error) {
   die("connection failed: ".$conn->connect_error);
 }
?>
