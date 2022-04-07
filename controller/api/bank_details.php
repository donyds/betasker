<?php
include_once '../config.php';

if(isset($_POST['submit'])){

    //variables input type
    $acc_name  = mysqli_escape_string($con,$_POST['acc_name']);
    $bsb       = mysqli_escape_string($con,$_POST['bsb']);
    $acc_no    = mysqli_escape_string($con,$_POST['acc_no']);
    $task_id   = mysqli_escape_string($con,$_POST['task_id']);
   
    //user id 
    $uid       = $_COOKIE['id'];

    
    //insert query 

    $check   = mysqli_query($con,"SELECT * FROM bank_details WHERE account_id ='$uid'");
    $already = mysqli_num_rows($check); 

    if($already > 0){

    $sql = "UPDATE `bank_details` SET acc_name='$acc_name',acc_no='$acc_no',bsb='$bsb' WHERE account_id='$uid'";
        
    $run = mysqli_query($con,$sql); 

    }else{

    $sql = "INSERT INTO `bank_details` (`id`, `account_id`, `acc_name`, `acc_no`, `bsb`, `status`) VALUES (NULL, '$uid', '$acc_name', '$acc_no', '$bsb', '1')";
        
    $run = mysqli_query($con,$sql); 

    }
        
    
    if(!empty($task_id)){
      header('Location : ../../confirm-your-offer.php?task_id='.$task_id.'&bank');
      }else{
      header('Location : ../../account_setting.php?bank');
  
      }

    
  }
?>



