<?php
include_once '../config.php';

if(isset($_POST['submit'])){

    //variables input type
    $mobile_no   = mysqli_escape_string($con,$_POST['mobile_no']);
   
    $task_id     = mysqli_escape_string($con,$_POST['task_id']);
    
    //user id 
    $uid       = $_COOKIE['id'];


    $sql = "UPDATE `account` SET mobile_no='$mobile_no' WHERE account_id='$uid'";
        
    $run = mysqli_query($con,$sql); 
    if(!empty($task_id)){
    header('Location : ../../confirm-your-offer.php?task_id='.$task_id.'&mob');
    }else{
    header('Location : ../../account_setting.php?mob');

    }
  }
?>