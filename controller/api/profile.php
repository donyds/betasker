mysqli_escape_string($con,<?php

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
        $fullname      = mysqli_escape_string($con,$_POST['fname']);
        $email_address = mysqli_escape_string($con,$_POST['email']);
        $mobile_no     = mysqli_escape_string($con,$_POST['mobile']);
        $uid           = $_COOKIE['id'];
        $role          = mysqli_escape_string($con,$_POST['role']);
        $about         = mysqli_escape_string($con,$_POST['about']);
     //check email already

        $f_name      = $_FILES['photo']['name'];
        $f_tmp       = $_FILES['photo']['tmp_name'];
        $f_size      = $_FILES['photo']['size'];
        $f_extension = explode('.', $f_name);
        $f_extension = strtolower(end($f_extension));
        $f_newfile   = uniqid() . '.' . $f_extension;
        $store       = "../../img/" . $f_newfile;
        if ($f_extension == 'jpg' || $f_extension == 'jpeg' || $f_extension == 'png' || $f_extension == 'gif') {
            if ($f_size >= 1000000) {
                //echo "max size is 10 mb";
            } else {
                if (move_uploaded_file($f_tmp, $store)) {
                    //echo "uploaded";
                }
            }
        }

 
 
 
 
   
  
    // make sure data is not empty

    if(empty($fullname)){

         $response = array(

        "status" => "error",

        "response" => "Fullname is Empty!"

         );

    }else if(empty($email_address)){


        $response = array(

        "status" => "error",

        "response" => "Email is Empty!"

         );

    }else if(empty($mobile_no)){

       $response = array(

        "status" => "error",

        "response" => "Mobile is Empty!"

         );
    }

    else{

      if(empty($f_name)){
          
         $sql = mysqli_query($con,"UPDATE account SET fullname='$fullname',email_address='$email_address',mobile_no='$mobile_no',role='$role',about='$about' WHERE account_id='$uid'");
        
    $response = array(

        "status" => "success",

        "response" => "Successfully Profile Update!"

         );
          
      }else{
          
          $sql = mysqli_query($con,"UPDATE account SET fullname='$fullname',email_address='$email_address',mobile_no='$mobile_no',role='$role',about='$about',img='$f_newfile' WHERE account_id='$uid'");
         
     $response = array(

        "status" => "success",

        "response" => "Successfully Profile Update!"

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

//Json decode

echo json_encode($response);


?>

