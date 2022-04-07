<?php

include_once 'config.php';


   $user_check = $_COOKIE['user'];

   $ses_sql = mysqli_query($con,"select * from account where email_address = '$user_check' ");
  
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   
  if(!isset($_COOKIE['user'])){

     header("location:  ./login.php");

     die();

  }

?>