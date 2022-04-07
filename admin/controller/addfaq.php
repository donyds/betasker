<?php

 session_start();
include("../../controller/config.php");

 if(isset($_POST['submit']))
 {

    $title = mysqli_real_escape_string($con,$_POST['title']);
    $descp = mysqli_real_escape_string($con,$_POST['descp']);
    $sql = "INSERT INTO faq (title,descp) VALUES('$title','$descp')";
    $reteval=mysqli_query($con, $sql);
    $_SESSION['succ'] = 'Add Successfully';
    header('location: ../faq.php');
        
  }
?>