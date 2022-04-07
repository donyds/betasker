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

$account_id              = $_COOKIE['id'];
$title	                 = mysqli_escape_string($con,$_POST['title']);
$descp	                 = mysqli_escape_string($con,$_POST['descp']);
$ticket_id = uniqid();
$timestamp = date('Y-m-d H:i:s');

$chk        = mysqli_query($con,"SELECT * FROM create_ticket WHERE title='$title' AND userid ='$account_id'");
$chk_already = mysqli_num_rows($chk);

if(empty($title)){

$response = array(
"status" => "error",
"response" => "Title is Empty!"
);
} else if(empty($descp)){

$response = array(
"status" => "error",
"response" => "Description is Empty!"
);
}else{

    if($chk_already > 0){

    
        $response = array(
            "status" => "error",
            "response" => "Ticket is Already Exist!"
             );
         
    }else{

    $sql    = mysqli_query($con,"INSERT INTO `create_ticket` (`title`, `descp`, `timestamp`, `status`, `userid`, `ticket_id`) VALUES ('$title', '$descp', '$timestamp', '1' ,'$account_id','$ticket_id')");

    $response = array(

        "status" => "success",
        "response" => "Ticket created successfully!"
           );

    }


 
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



