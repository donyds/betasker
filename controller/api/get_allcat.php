<?php
// get database connection
include_once '../config.php';

$products_arr=array();
$products_arr["records"]=array();

$sql = mysqli_query($con,"SELECT * FROM cat ORDER BY id ASC");
   
while ($row = mysqli_fetch_array($sql)){


$cat_item = array(
              
            "id"       => $row['id'],
            "cat"      => $row['cat'],
            "cat_img"  => $row['cat_img']
          
            );

array_push($products_arr["records"], $cat_item);

}

echo json_encode($products_arr);

?>