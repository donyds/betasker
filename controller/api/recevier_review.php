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

    $date       = date('Y-m-d');
    $time       = date('H:i:s');

    $rate       = mysqli_escape_string($con,$_POST['rate']);

    $review     = mysqli_escape_string($con,$_POST['review']);

    $task_id    = mysqli_escape_string($con,$_POST['task_id']);
    
    
    //get data from transaction table when i paid 
    $get_tdata = mysqli_query($con,"SELECT SUM(amount) FROM payment_transaction WHERE task_id='$task_id' AND status='accept'");

    $get_tdata = mysqli_fetch_array($get_tdata);

    $paid_amount   = $get_tdata['SUM(amount)'];

    //get data from award table
    $get_task = mysqli_query($con,"SELECT * FROM task_award WHERE task_id='$task_id' AND is_close='1'");

    $getdata = mysqli_fetch_array($get_task);

    $creator      = $getdata['task_creator'];
    $receiver     = $getdata['task_receiver'];
    $task_budget  = $getdata['task_budget'];
    
    $remain_amt = $task_budget - $paid_amount ; 
    //check already 

    $sql3   = mysqli_query($con,"SELECT * FROM review_for_receiver WHERE task_id='$task_id' AND is_from='receiver'");

    $count2 = mysqli_num_rows($sql3);

    // make sure data is not empty

  

  if($rate < 0){

    $response = array(
        "status" => "error",
        "response" => "Select Rating!"
         );

    } else if(empty($review)){

       $response = array(
        "status" => "error",
        "response" => "Write Something!"
         );

    }else if($count2 > 0){

    
      $response = array(
        "status" => "error",
        "response" => "Alreday Done Review!"
         );

    }else{

        $task_done_per = ($remain_amt * 100)/$task_budget ;
        $task_done_per = round($task_done_per);

        $sql = mysqli_query($con,"INSERT INTO review_for_receiver(date,time,creator,receiver,rate,review,task_id,task_done_per,is_from) VALUES('$date','$time','$creator','$receiver','$rate','$review','$task_id','$task_done_per','receiver')");

         $response = array(
                    "status"   => "success",
                    "task_id"  => $task_id,
                    "response" => "Review Add Successfully!"
                    );


        }

}else{

     $response = array(

        "status" => "error",
        "response" => "Access Denied Method Not Allowed!"
         );

    }
   
   echo json_encode($response);

?>