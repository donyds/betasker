<?php

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
// get database connection
include_once '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
date_default_timezone_set("Asia/Calcutta");
$date       = date('d-m-Y');
$time       = date('H:i');

$account_id = $_COOKIE['id'];
$transaction_id	    = uniqid(); 
$amount	             = mysqli_escape_string($con,$_POST['amount']);

$getu     = mysqli_query($con,"Select * FROM account WHERE account_id='$account_id'");

$udetails = mysqli_fetch_array($getu);

$wallet   = $udetails['wallet'];

$total_bal = $wallet + $amount ;
    

if(empty($amount)){

$response = array(
"status" => "error",
"response" => "Amount is Empty!"
);
} else if($amount < 0){

$response = array(
"status" => "error",
"response" => "Amount must be grater than or equal to 1!"
);
}

else{

    $sql    = mysqli_query($con,"INSERT INTO payment_transaction(date,time,amount,transaction_id,account_from,status) VALUES('$date','$time','$amount','$transaction_id','$account_id','0')");
      


 $response = array(

              "status" => "success",
              "tid" => $transaction_id,
              "response" => "Amount Added Successfully!"
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



