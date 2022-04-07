<?php
include_once '../config.php';

if(isset($_POST['submit'])){

    //variables input type
    $address   = mysqli_escape_string($con,$_POST['address']);
    $address2  = mysqli_escape_string($con,$_POST['address2']);
    $suburb    = mysqli_escape_string($con,$_POST['suburb']);
    $state     = mysqli_escape_string($con,$_POST['state']);
    $postcode  = mysqli_escape_string($con,$_POST['postcode']);
    $country   = mysqli_escape_string($con,$_POST['country']);
    $task_id   = mysqli_escape_string($con,$_POST['task_id']);
    
    //user id 
    $uid       = $_COOKIE['id'];

    
    //insert query 
 
    $check   = mysqli_query($con,"SELECT * FROM billing_details WHERE account_id ='$uid'");
    $already = mysqli_num_rows($check); 

    if($already > 0){

    $sql = "UPDATE `billing_details` SET address='$address',address2='$address2',suburb='$suburb',state='$state',postcode='$postcode',country='$country' WHERE account_id='$uid'";
        
    $run = mysqli_query($con,$sql); 

    }else{

    $sql = "INSERT INTO `billing_details` (`id`, `account_id`, `address`, `address2`, `suburb`, `state`, `postcode`, `country`, `status`) VALUES (NULL,'$uid','$address', '$address2', '$suburb', '$state', '$postcode', '$country', '1')";
        
    $run = mysqli_query($con,$sql); 

    }
        
    
    if(!empty($task_id)){
      header('Location : ../../confirm-your-offer.php?task_id='.$task_id.'&bill');
      }else{
      header('Location : ../../account_setting.php?bill');
  
      }

    
  }
?>



