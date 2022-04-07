<?php
include_once '../config.php';

if(isset($_POST['submit'])){

    //variables input type
    $mobile_no   = mysqli_escape_string($con,$_POST['mobile_no']);
   
    //user id 
    $uid       = $_COOKIE['id'];


    $sql = "UPDATE `account` SET mobile_no='$mobile_no' WHERE account_id='$uid'";
        
    $run = mysqli_query($con,$sql); 
  
    header('Location : ../../mobile-verification.php?succ');
    
  }
?>