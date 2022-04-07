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
$lookingfor	             = mysqli_escape_string($con,$_POST['lookingfor']);
$category	             = $_POST['keyword'];
$suburb	                = mysqli_escape_string($con,$_POST['suburb']);

//$category  = implode(',',$cat);

// print_r($category);
// die;

$getu     = mysqli_query($con,"SELECT * FROM task_alert_log WHERE uid='$account_id'");

$udetails = mysqli_num_rows($getu);

if(empty($lookingfor)){

$response = array(
"status" => "error",
"response" => "What kind of task... is Empty!"
);
} 

 else if(empty($category)){
$response = array(
"status" => "error",
"response" => "category is Empty!"
);
}
// else if(empty($suburb)){  

//     $response = array(
//         "status" => "error",
//         "response" => "suburb is Empty!"
//         );
// }
else{

    if($udetails > 0){

    $sql    = mysqli_query($con,"UPDATE `task_alert_log` SET cat='$category',lookingfor='$lookingfor',subrub='$suburb' WHERE uid='$account_id'");
         
    }else{

    $sql    = mysqli_query($con,"INSERT INTO `task_alert_log` (`cat`, `lookingfor`, `subrub`, `uid`) VALUES ('$category', '$lookingfor', '$suburb', '$account_id')");


    }


 $response = array(

              "status" => "success",
              "response" => "Task alert added successfully!"
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



