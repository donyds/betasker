<?php
include_once '../config.php';

 $uid      = mysqli_escape_string($con,$_GET['uid']);


$sqls = mysqli_query($con,"Select * FROM account WHERE account_id ='$uid'");
$uget = mysqli_fetch_array($sqls);
$img       = $uget['img'];
$uid       = $uget['uid'];
$fullname  = $uget['fullname'];

$job_arr = array(

"account_id"         => $uget['account_id'],

"fullname"           => $uget['fullname'],

"img"                => $uget['img']

);



// set response code - 200 OK

http_response_code(200);

echo json_encode($job_arr);

?>



