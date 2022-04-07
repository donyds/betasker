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

date_default_timezone_set("Asia/Kolkata");

    $date         = date('d-m-Y');
    $time         = date('H:i:s');
    $currnt_time  =  date("Y-m-d H:i:s");

    $account_id   = $_COOKIE['id'];

    //$task_id    = uniqid(); 
    $task_title        = mysqli_escape_string($con,$_POST['task_title']);
    $task_description  = mysqli_escape_string($con,$_POST['descp']);
    $task_location     = mysqli_escape_string($con,$_POST['task_location']);
    $task_end          = mysqli_escape_string($con,$_POST['task_end']);

    $task_cat         = mysqli_escape_string($con,$_POST['task_cat']);
    $task_type        = mysqli_escape_string($con,$_POST['task_type']);
    $task_id          = mysqli_escape_string($con,$_POST['task_id']);
    $task_hour        = mysqli_escape_string($con,$_POST['hours']);

    if($task_type =='Hourly'){
    
    $task_budget      = ($_POST['hourly_budget']) * $task_hour ;

    }else{
    
    $task_budget      = $_POST['budget'];

    } 
    
    if(!empty($_POST['time_prefer'])){
    $time_prefer       = $_POST['time_prefer'];
    }else{
    $time_prefer       = "Anytime";
    }


    //$task_currency    = $_POST['task_currency'];
    //$task_tag         = $_POST['tag'];

    $get_u = mysqli_query($con,"SELECT * FROM account WHERE account_id='$account_id'");

    $getdata = mysqli_fetch_array($get_u);

    $name  = $getdata['fullname'];
    
  // make sure data is not empty
  if(empty($task_title)){

        $response = array(

        "status" => "error",

        "response" => "Task Title is Empty!"

         );

  }else if(empty($task_description)){

       $response = array(

        "status" => "error",

        "response" => "Task Description is Empty!"

         );

    }else if(empty($task_end)){

         $response = array(

        "status" => "error",

        "response" => "When do you need it done is Empty!"

         );

    }

    // else if($task_type =='Hourly'){
         
    //     if(empty($task_hour)){
        
    //        $response = array(
    //        "status" => "error",
    //        "response" => "Hour is Empty!"
    //          );

    //     }else if(empty($_POST['hourly_budget'])){ 
         
    //        $response = array(
    //        "status" => "error",
    //        "response" => "Price per hour is Empty!"
    //          );

    //     }
   
    // }else if($task_type =='Fixed'){

    //     if(empty($task_budget)){ 
         
    //        $response = array(
    //        "status" => "error",
    //        "response" => "Task Budget is Empty!"
    //          );

    //     }

           
    // }

    else{


         $sql = mysqli_query($con,"INSERT INTO task_create(date,time,task_id,account_id,task_title,task_description,task_cat,task_type,task_location,task_budget,task_end,time_prefer,task_currency,task_hour,timestamp) VALUES('$date','$time','$task_id','$account_id','$task_title','$task_description','$task_cat','$task_type','$task_location','$task_budget','$task_end','$time_prefer','€','$task_hour','$currnt_time')");



         $sql2 = mysqli_query($con,"INSERT INTO task_alert(at,time,uname,title,descp,task_id,uid) VALUES('$date','$time','$name','$task_title','$task_description','$task_id','$account_id')");



        // set response code - 201 

        

    $response = array(

        "status" => "success",

        "task_id" => $task_id,

        "response" => "Successfully Job Post!"

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
