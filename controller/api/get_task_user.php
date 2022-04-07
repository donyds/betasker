<?php
include_once '../config.php';

$products_arr           = array();
$products_arr["result"] = array();
$products_arr["wallet"] = array();

$task_id    = mysqli_escape_string($con,$_POST['task_id']);
$account_id = $_COOKIE['id'];

//get wallet

$get_task       = mysqli_query($con,"Select * FROM task_award WHERE task_id='$task_id'");
$getal          = mysqli_fetch_array($get_task);

$receiver       = $getal['task_receiver'];
$task_currency  = $getal['task_currency'];
$task_budget    = $getal['task_budget'];
$task_id        = $getal['task_id'];

    
$getsum     = mysqli_query($con,"Select SUM(amount) FROM payment_transaction WHERE task_id='$task_id' AND account_from='$account_id'");

$get_d      = mysqli_fetch_array($getsum);
$send_amount      = $get_d['SUM(amount)'];

$getu     = mysqli_query($con,"Select * FROM account WHERE account_id='$receiver'");
$udetails = mysqli_fetch_array($getu);
$name     = $udetails['fullname'];

$get_taskd = mysqli_query($con,"Select * FROM task_create WHERE task_id='$task_id'");
$taskbud   = mysqli_fetch_array($get_taskd);
$total_budget   = $taskbud['task_budget'];




if(!empty($name)){



     $response = array(



        "status" => "success",

        

        "task_currency" => $task_currency,    

        

        "task_budget" => $task_budget, 

        

        "fullname"    => $name,
          
        "receiver"    => $receiver,

        "send_amount" => $send_amount,
 
        "total_budget" => $total_budget,
        
        "response" => "Successfully!"



         );

        

        

    }else{

        

        $response = array(



        "status" => "error",

        

        "response" => "Not Found!"



         );

        

    }

         

 echo json_encode($response);



?>