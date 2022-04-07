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
$date       = date('Y-m-d');
$stamp      = date('Y-m-d H:i:s');

$account_id     = $_COOKIE['id'];
$amount         = mysqli_escape_string($con,$_POST['amount']);
$task_id        = mysqli_escape_string($con,$_POST['task_id']);
$task_currency  = mysqli_escape_string($con,$_POST['task_currency']);
$task_creator   = mysqli_escape_string($con,$_POST['task_creator']);
$task_receiver  = mysqli_escape_string($con,$_POST['task_receiver']);
$task_budget    = mysqli_escape_string($con,$_POST['task_budget']);
$chat_id        = mysqli_escape_string($con,$_POST['chat_id']);

//get chat data

$getchats = mysqli_query($con,"SELECT * FROM chat_message WHERE room_id='$chat_id' ORDER BY id DESC LIMIT 1");
$get_chat = mysqli_fetch_array($getchats);

//end
$check_alred  = mysqli_query($con,"SELECT * FROM chat_req_pay WHERE task_receiver='$task_receiver' AND status='0'");
$get_ck = mysqli_num_rows($check_alred);




if(empty($amount)){

$response = array(
"status" => "error",
"response" => "Amount is Empty!"
);
}else if($task_budget == '0'){

$response = array(
"status" => "error",
"response" => "Task Budget is Already Done!"
);
}
else if($get_ck > 0){
$response = array(
"status" => "error",
"response" => "Payment Request Sent Already!"
);
}

else if($amount > $task_budget){
  
$response = array(
"status" => "error",
"response" => "Entered Amount Should Be Less Than Equal To Task Budget!"
);

}


else{
   
   $uname    = $_COOKIE['username']; 
   $message  = $uname." has Sent €".$amount." Amount Request Sent";

   $sql = mysqli_query($con,"INSERT INTO `chat_req_pay` (`date`, `amount`, `currency`, `task_id`, `task_creator`, `task_receiver`) VALUES ('$date', '$amount', '$task_currency', '$task_id', '$task_creator', '$task_receiver')");
      
   $chat = mysqli_query($con,"INSERT INTO `chat_message` (`timestamp`, `room_id`, `account_id`, `role`, `message`, `img`, `status`) VALUES ('$stamp', '$chat_id', '$task_receiver', 'user', '$message', '0', '0')"); 

 $response = array(

              "status" => "success",
              "chat_id" => $chat_id,
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



