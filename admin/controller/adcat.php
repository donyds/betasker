<?php

 session_start();
include("../../controller/config.php");

 if(isset($_POST['submit']))
 {

    $cat      = mysqli_real_escape_string($con,$_POST['cat']);
    $keywords = mysqli_real_escape_string($con,$_POST['keywords']);
    
    $f_name      = $_FILES['cat_img']['name'];
    $f_tmp       = $_FILES['cat_img']['tmp_name'];

    $f_size      = $_FILES['cat_img']['size'];
    $f_extension = explode('.', $f_name);

    $f_extension = strtolower(end($f_extension));

    $f_newfile   = uniqid() . '.' . $f_extension;

    $store       = "../images/" . $f_newfile;
    
    if ($f_extension == 'jpg' || $f_extension == 'jpeg' || $f_extension == 'png' ) {
   
      if (move_uploaded_file($f_tmp, $store)) {
        
         } 
       
    }
    
    if (empty($f_name)) {
          
        $sql = "INSERT INTO cat (cat,keywords) VALUES('$cat','$keywords')";
        
    }else{
         
         $sql = "INSERT INTO cat (cat,keywords,cat_img) VALUES('$cat','$keywords','$f_newfile')";
        
        
        }
         
    $reteval=mysqli_query($con, $sql);
   
    header('location: ../cat.php');
        
  }
?>