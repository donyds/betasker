<?php

   include('config.php');

   session_start();

   

   $user_check = $_SESSION['admin'];

   $ses_sql = mysqli_query($con,"SELECT * FROM admin WHERE email ='$user_check' ");
  
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   
  if(!isset($_SESSION['admin'])){

     header("location:  ./index.php");

     die();

  }

?>