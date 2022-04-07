<?php
include_once '../config.php';

if(isset($_POST['submit'])){

    date_default_timezone_set('Asia/Kolkata');
    $date      =  date('Y-m-d H:i');

    $question  = mysqli_escape_string($con,$_POST['question']);
    $rep_id    = mysqli_escape_string($con,$_POST['rep_id']);
    $uid       = $_COOKIE['id'];
    
       
    $f_name    = $_FILES['qimg']['name'];
    $f_tmp     = $_FILES['qimg']['tmp_name'];
    $f_size    = $_FILES['qimg']['size'];
    
   
    $f_extension = explode('.', $f_name);
    $f_extension = strtolower(end($f_extension));
    $f_newfile   = uniqid() . '.' . $f_extension;
    $store       = "../../img/" . $f_newfile;
    
    if ($f_extension == 'jpg' || $f_extension == 'jpeg' || $f_extension == 'png') {
    
    if (move_uploaded_file($f_tmp, $store)) {

    } 
   
    }
        
    if(!empty($f_name)){


    $sql = "INSERT INTO `question_rep` (`rep_id`,`msg`,`img`,`date`,`uid`) VALUES ('$rep_id','$question','$f_newfile','$date','$uid')";

    
    }else{


    $sql = "INSERT INTO `question_rep` (`rep_id`,`msg`,`date`,`uid`) VALUES ('$rep_id','$question','$date','$uid')";


   }
    

   
    $run = mysqli_query($con,$sql); 
    header('Location : ../../task-details-reply.php?rep_id='.$rep_id);
    
  }
?>



