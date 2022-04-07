<?php

// get database connection

include_once '../config.php';

$search   = mysqli_escape_string($con,$_GET['search']);
$price    = mysqli_escape_string($con,$_GET['price']);
$location = mysqli_escape_string($con,$_GET['location']);


$account_id      = $_COOKIE['id'];

if(!empty($search)){

$sql = mysqli_query($con,"SELECT * FROM task_create WHERE task_title LIKE '%$search%'");
// /|| task_budget LIKE '%$search%'

}else if(!empty($location)){

$sql = mysqli_query($con,"SELECT * FROM task_create WHERE task_status='1' AND status='runing' AND task_location LIKE '%$location%' AND task_budget <= '$price'");


}else if(!empty($price)){

 $sql = mysqli_query($con,"SELECT * FROM task_create WHERE task_status='1' AND status='runing' AND task_budget <= '$price'");


}
else{
 
 $sql = mysqli_query($con,"SELECT * FROM task_create WHERE task_status='1' AND status='runing' ORDER BY id DESC");
   
}
    
    $products_arr=array();
    $products_arr["records"]=array();
  


  while ($row = mysqli_fetch_array($sql)){

        // extract row
          $account_id = $row['account_id'];
          $sqls = mysqli_query($con,"SELECT * FROM account WHERE account_id ='$account_id'");
          $uget = mysqli_fetch_array($sqls);
          $img  = $uget['img'];
  

        $product_item = array(

            

            "id"                => $row['id'],

            "task_title"        => $row['task_title'],
            
            "task_description"  => $row['task_description'],

            "task_budget"       => $row['task_budget'],

            "date"              => $row['date'],
           
            "img"               => $img,

            "task_id"           => $row['task_id'],
            
            "account_id"        => $row['account_id'],
            
            "time_prefer"       => $row['time_prefer'],
           
            "task_status"       => $row['task_status'],
           
            "task_location"     => $row['task_location'],
            
            "status"            => $row['status'],

            "task_currency"     => $row['task_currency']

        );

        array_push($products_arr["records"], $product_item);
  }

        echo json_encode($products_arr);
?>