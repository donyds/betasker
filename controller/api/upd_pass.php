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
    $uid         = mysqli_escape_string($con,$_POST['uid']);
    $password    = mysqli_escape_string($con,$_POST['password']);
    $cpassword   = mysqli_escape_string($con,$_POST['cpassword']);
    
    if($password == ''){

        $response = array(
                      "status" => "error",
                      "response" => "Passwprd is empty!"

             );

    }else if ($cpassword == '') {
        
         $response = array(
                      "status" => "error",
                      "response" => "Confirm Passwprd is empty!"

             );

    }else if($password != $cpassword){



         $response = array(

        "status"   => "error",
        "response" => "Password and Confirm Password is does not match!"

         );

    }else{
     
     $sqls    = "UPDATE account SET password='$password' WHERE account_id='$uid'";
     $results = mysqli_query($con,$sqls);
     $response = array(

        "status"   => "success",
        "response" => "Successfully Updated!"

         );

    }
    
    
  }


else{
  
     $response = array(

        "status" => "error",

        "response" => "Access Denied Method Not Allowed!"

         );
        
   
   }

//Json decode

echo json_encode($response);


?>

