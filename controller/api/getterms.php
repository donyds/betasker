<?php
include_once '../config.php';

$products_arr=array();
$products_arr["result"]=array();

$query = mysqli_query($con,"SELECT * FROM terms WHERE id='1'");


$userData = mysqli_fetch_array($query);

$p_item = array(

"descp"      => $userData['descp']
);

array_push($products_arr["result"], $p_item);


}

echo json_encode($products_arr);

?>