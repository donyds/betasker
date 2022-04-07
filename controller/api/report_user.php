<?php

header("Access-Control-Allow-Origin: *");

header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Methods: POST");

header("Access-Control-Max-Age: 3600");

header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


include_once '../config.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST')

{
// set product property values

date_default_timezone_set("Asia/Kolkata");

    $date       = date('Y-m-d H:i:s');
    $type       = mysqli_escape_string($con,$_POST['type']);
    $comment    = mysqli_escape_string($con,$_POST['comment']);
    $userid     = mysqli_escape_string($con,$_POST['userid']);
    $uid        = $_COOKIE['id'];

    //check already

    $sql3   = mysqli_query($con,"SELECT * FROM report_user WHERE uid='$uid' AND report_user='$userid'");
    $count  = mysqli_num_rows($sql3);

    // make sure data is not empty

  if(empty($comment)){
  
    $response = array(
        "status"   => "error",
        "response" => "Comment is empty!"
         );
  
  }else if($count > 0){


    $response = array(
        "status"   => "error",
        "response" => "Already Reported!"
         );



    }else{



    $sql = mysqli_query($con,"INSERT INTO report_user(date,type,comment,uid,report_user) VALUES('$date','$type','$comment','$uid','$userid')");

    $response = array(
        "status"   => "success",
        "userid"   => $userid,
        "response" => "Successfully Reported!"
         );


}

  

 }

else{

    $response = array(
    
        "status" => "error",
        "response" => "Access Denied Method Not Allowed!"
         );

   }

echo json_encode($response);

?>



