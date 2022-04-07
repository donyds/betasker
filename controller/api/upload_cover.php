<?php
include_once '../config.php';

$uid      = $_COOKIE['id'];

$file           =   $_FILES['cover']['name'];
$file_image     =   '';
if($_FILES['cover']['name']!=""){
    extract($_REQUEST);
    
    $infoExt        =   getimagesize($_FILES['cover']['tmp_name']);
     
    if(strtolower($infoExt['mime']) == 'image/gif' || strtolower($infoExt['mime']) == 'image/jpeg' || strtolower($infoExt['mime']) == 'image/jpg' || strtolower($infoExt['mime']) == 'image/png'){
         
        
        $f_tmp       = $_FILES['cover']['tmp_name'];
        $f_size      = $_FILES['cover']['size'];
        $f_extension = explode('.', $file);
     
        $f_extension = strtolower(end($f_extension));
     
        $f_newfile   = uniqid() . '.' . $f_extension;
       
         
        $path   =   '../../img/'.$f_newfile;
         
        move_uploaded_file($_FILES['cover']['tmp_name'],$path);
        
        //$insert     =   $db->insert('images',$data);
        $upd_acc = mysqli_query($con,"UPDATE `account` SET cover_img='$f_newfile' WHERE account_id='$uid'");

        if($upd_acc){ echo 1; } else { echo 0; }
        }else{
        echo 2;
        }
 
}
?>

