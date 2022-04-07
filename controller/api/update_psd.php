<?php

include_once '../config.php';

if(isset($_POST['submit'])){

    $cpass       = mysqli_escape_string($con,$_POST['cpass']);
    $npass       = mysqli_escape_string($con,$_POST['npass']);
    $mpass       = mysqli_escape_string($con,$_POST['mpass']);
    $uid         = $_COOKIE['id'];

    $check    = mysqli_query($con,"SELECT * FROM account WHERE password='$cpass' AND account_id='$uid'");
    $chk_pass = mysqli_num_rows($check);

    if($chk_pass > 0 ){

     if($npass == $mpass){

        $sqls    = "UPDATE account SET password='$npass' WHERE account_id='$uid'";
        $results = mysqli_query($con,$sqls);
        
        header('Location: ../../change-password.php?succ');


     }else{
      
        header('Location: ../../change-password.php?match');
     
     }

     
    }else{

        header('Location: ../../change-password.php?wr');
    }
     
    }
    ?>