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
  

    // set product property values
    // $mobile      = mysqli_escape_string($con,$_POST['mobile']);
    // $mob_otp     = $_POST['mob_otp'];
  
    $email_otp  = mysqli_escape_string($con,$_POST['email_otp']);
    $sql        = "SELECT * FROM account WHERE reg_otp_email='$email_otp' AND verify_status='0'";
    $result     = mysqli_query($con,$sql);
    $count      = mysqli_num_rows($result);

    $row        = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $account_id = $row['account_id'];
    //chk ref id is in it
    $ref_id     = $row['ref_id'];

    //get ref price

    $getref     = mysqli_query($con,"SELECT * FROM refer_price WHERE id='1'");
    $refp       = mysqli_fetch_array($getref,MYSQLI_ASSOC);
    $price_ref  = $refp['price'];

    $date       = date('Y-m-d H:i');
    //get refferal data

    $referral     = mysqli_query($con,"SELECT * FROM account WHERE account_id='$ref_id'");
    $user_d       = mysqli_fetch_array($referral,MYSQLI_ASSOC);
    $u_wallet     = $user_d['wallet'];
    $new_price    = $price_ref + $u_wallet ;

    // make sure data is not empty

    if($count == '1'){
     
      if($ref_id !='0'){

      $referral_u  = mysqli_query($con,"UPDATE `account` SET wallet = '$price_ref' WHERE account_id='$account_id'");
      $referral    = mysqli_query($con,"UPDATE `account` SET wallet = '$new_price' WHERE account_id='$ref_id'");
      
      $ref_log     = mysqli_query($con,"INSERT INTO `ref_log` (`uid`, `ref_id`, `ref_price`, `timestamp`) VALUES ('$account_id', '$ref_id', '$price_ref', '$date')");

      }
   
    $update     = "UPDATE `account` SET verify_status = '1' WHERE account_id='$account_id'";
    $sql_update = mysqli_query($con, $update);
    
    $response = array(

                "status" => "success",

                "response" => "Successfully Register!"

                 );
     
    }
    else{
         
         
     $response = array(

        "status" => "error",

        "response" => "OTP is Does not Match!"

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

