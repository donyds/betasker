<?php
include_once '../config.php';

if(isset($_POST['submit'])){
   
    //variables input type
    $fname        = mysqli_escape_string($con,$_POST['fname']);
    $lname        = mysqli_escape_string($con,$_POST['lname']);
    $fullname     = $fname." ".$lname ;
    $suburb       = mysqli_escape_string($con,$_POST['suburb']);
    
    $tagline      = mysqli_escape_string($con,$_POST['tagline']);
    $about        = mysqli_escape_string($con,$_POST['about']);
    $dob          = mysqli_escape_string($con,$_POST['dob']);
    $abn          = mysqli_escape_string($con,$_POST['abn']);

    $skills          = mysqli_escape_string($con,$_POST['skills']);
    if($skills =='In person'){
    $postal_code     = mysqli_escape_string($con,$_POST['postal_code']);
    }else{
      $postal_code   = '';
    }


    $transportation  = mysqli_escape_string($con,$_POST['transportation']);
    $language        = mysqli_escape_string($con,$_POST['language']);
    $education       = mysqli_escape_string($con,$_POST['education']);
    $work            = mysqli_escape_string($con,$_POST['work']);
    $specialities    = mysqli_escape_string($con,$_POST['specialities']);
    
    $email    = mysqli_escape_string($con,$_POST['email']);
    $uid      = $_COOKIE['id'];
    
    $check  = mysqli_query($con,"SELECT * FROM `profile` WHERE account_id='$uid'");
    $alredy = mysqli_num_rows($check);

    if($alredy > 0){
    
    $update = mysqli_query($con,"UPDATE `profile` SET fname='$fname',lname='$lname',suburb='$suburb',tagline='$tagline',about='$about',dob='$dob',abn='$abn',skills='$skills',transportation='$transportation',language='$language',education='$education',work='$work',specialities='$specialities',postal_code='$postal_code' WHERE account_id='$uid'");
    
    }else{
    
     $insert = mysqli_query($con,"INSERT INTO `profile` (`account_id`, `fname`, `lname`, `suburb`, `tagline`, `about`, `dob`, `abn`, `transportation`, `skills`,`language`, `education`, `work`, `specialities`,`postal_code`) VALUES ('$uid', '$fname', '$lname', '$suburb', '$tagline', '$about', '$dob', '$abn', '$transportation','$skills', '$language', '$education', '$work','$specialities','$postal_code')");
    }   



   $fileNames   = array_filter($_FILES['portfolio']['name']); 

   if(!empty($fileNames)){ 

      $sql1  = mysqli_query($con,"SELECT * FROM portfolio_img WHERE account_id='$uid'"); 
      $count = mysqli_num_rows($sql1);  
     
      if($count > 0 ){
      
      $sql2 = mysqli_query($con,"DELETE FROM portfolio_img WHERE account_id='$uid'"); 

      }

        
     foreach($_FILES['portfolio']['name'] as $key=>$val){ 
         
     $f_name      = $_FILES['portfolio']['name'][$key];
     $f_tmp       = $_FILES['portfolio']['tmp_name'][$key];
     
     $f_size      = $_FILES['portfolio']['size'][$key];
     $f_extension = explode('.', $f_name);
     
     $f_extension = strtolower(end($f_extension));
     
     $f_newfile   = uniqid() . '.' . $f_extension;
     
     $store       = "../../portfolio/" . $f_newfile;
     
     if ($f_extension == 'jpg' || $f_extension == 'jpeg' || $f_extension == 'png') {
     
    
     
     if (move_uploaded_file($f_tmp, $store)) {
     } 
    
     }
     
     if(!empty($f_name)){
     
     $sql = mysqli_query($con,"INSERT INTO `portfolio_img` (`img`, `account_id`) VALUES ('$f_newfile', '$uid')"); 

     }

     
     }
       
 
    }


    
    $upd_acc = mysqli_query($con,"UPDATE `account` SET email_address='$email',fullname='$fullname' WHERE account_id='$uid'");
   
    header('Location : ../../edit-account.php?succ');
    
  }
?>