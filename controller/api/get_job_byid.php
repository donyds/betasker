<?php
include_once '../config.php';
$task_id       = mysqli_escape_string($con,$_GET['task_id']);

$sql = mysqli_query($con,"Select * FROM task_create WHERE task_id='$task_id'");
$get = mysqli_fetch_array($sql);   
$account_id = $get['account_id'];

$sqls = mysqli_query($con,"Select * FROM account WHERE account_id ='$account_id'");
$uget = mysqli_fetch_array($sqls);
$fullname  = $uget['fullname'];
$img  = $uget['img'];


$job_arr = array(

"id"               => $get['id'],

"date"             => $get['date'],

"time"             => $get['time'],

"timestamp"        => $get['timestamp'],

"task_title"       => $get['task_title'],

"task_description" => $get['task_description'],

"task_budget"      => $get['task_budget'],

"task_currency"    => $get['task_currency'],

"img"              => $img,

"fullname"         => $fullname,

"task_location"    => $get['task_location'],

"task_hour"        => $get['task_hour'],

"task_end"         => $get['task_end'],

"time_prefer"      => $get['time_prefer'],

"task_type"        => $get['task_type'],

"account_id"       => $get['account_id']

);



// set response code - 200 OK

http_response_code(200);

echo json_encode($job_arr);

?>