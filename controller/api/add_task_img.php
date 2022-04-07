<?php

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// get database connection
include_once '../config.php';

// post method
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

//$data = json_decode(file_get_contents("php://input"),TRUE);
// set product property values

date_default_timezone_set("Asia/Kolkata");


    $cat       = mysqli_escape_string($con,$_POST['cat']);
    $task_id   = mysqli_escape_string($con,$_POST['task_id']);
    
    $fileNames  = array_filter($_FILES['img']['name']); 
    $count_img  = count($fileNames);
       
     foreach($_FILES['img']['name'] as $key=>$val){ 
      //for ($key=0; $key<$count_img; $key++) { 
       
        $f_name      = $_FILES['img']['name'][$key];
        $f_tmp       = $_FILES['img']['tmp_name'][$key];
        $f_size      = $_FILES['img']['size'][$key];
        
        $f_extension = explode('.', $f_name);
        $f_extension = strtolower(end($f_extension));
        $f_newfile   = uniqid() . '.' . $f_extension;
        $store       = "../../img/" . $f_newfile;
        
        if ($f_extension == 'jpg' || $f_extension == 'jpeg' || $f_extension == 'png') {
        
        if (move_uploaded_file($f_tmp, $store)) {

        } 
       
        }
        
        if(!empty($f_name)){

        $check    = mysqli_query($con,"SELECT * FROM task_img WHERE task_id='$task_id'");
        $count_al = mysqli_num_rows($check);
        
        $sql = mysqli_query($con,"INSERT INTO `task_img` (`img`,`cat`,`task_id`) VALUES ('$f_newfile','$cat','$task_id')"); 

         }
        
        }

      header('Location : ../../tell-us-2.php?cat='.$cat.'&task_id='.$task_id);

    }
       
     
?>



