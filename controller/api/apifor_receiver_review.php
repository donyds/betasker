<?php
include_once '../config.php';

$products_arr=array();
$products_arr["result"]=array();
$account_id = mysqli_escape_string($con,$_GET['id']);
//get user data from the database
//AND is_from='receiver'
$query = mysqli_query($con,"SELECT * FROM review_for_receiver WHERE creator='$account_id' ORDER BY id DESC");


while ($userData = mysqli_fetch_array($query)){

$receiver   = $userData['receiver'];

$task_id   = $userData['task_id'];

$get_task = mysqli_query($con,"SELECT * FROM task_create WHERE task_id ='$task_id'");

$my_task = mysqli_fetch_array($get_task);

$title_t = $my_task['task_title'];


$sqls = mysqli_query($con,"SELECT * FROM account WHERE account_id ='$receiver'");

$uget = mysqli_fetch_array($sqls);

$img       = $uget['img'];
$fullname  = $uget['fullname'];

$p_item = array(

"date"      => $userData['date'],
"time"      => $userData['time'],
"task_id"   => $userData['task_id'],
"creator"   => $userData['creator'],
"receiver"  => $userData['receiver'],
"rate"      => $userData['rate'],
"review"    => $userData['review'],
"is_from"   => $userData['is_from'],
"img"       => $img,
"fullname"  => $fullname,
"task_title"=> $title_t

);

array_push($products_arr["result"], $p_item);


}

echo json_encode($products_arr);

?>