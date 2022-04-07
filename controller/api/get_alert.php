<?php
// get database connection
include_once '../config.php';

$sql = mysqli_query($con,"Select * FROM task_alert ORDER BY id DESC");

$products_arr=array();
$products_arr["records"]=array();

while ($row = mysqli_fetch_array($sql)){

$product_item = array(

    "uname"   => $row['uname'],

    "title"   => $row['title'],
    
    "descp"   => $row['descp'],

    "task_id" => $row['task_id'],

    "at"      => $row['at'],
    
   "time"     => $row['time'],
    
    "uid"     => $row['uid']

    );

    array_push($products_arr["records"], $product_item);
    }

    echo json_encode($products_arr);
?>