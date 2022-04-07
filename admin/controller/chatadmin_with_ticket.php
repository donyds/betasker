<?php
include("../../controller/config.php");
session_start();
date_default_timezone_set("Asia/Calcutta");
$currnt_time  =  date("Y-m-d H:i:s");

if(isset($_POST)){

    $messagesent   = mysqli_escape_string($con,$_POST['chat']); 
    $cht_len       = strlen($messagesent);
    $room_id       = mysqli_escape_string($con,$_GET['t']);
    $account_id    = $_SESSION['admin_id'];
    $role = "admin";
    
    $f_name      = $_FILES['image']['name'];
    $f_tmp       = $_FILES['image']['tmp_name'];

    $f_size      = $_FILES['image']['size'];
    $f_extension = explode('.', $f_name);

    $f_extension = strtolower(end($f_extension));

    $f_newfile   = uniqid() . '.' . $f_extension;

    $store       = "../../chat_img/" . $f_newfile;

    
    
    if ($f_extension == 'doc' || $f_extension == 'docx' || $f_extension == 'pdf' || $f_extension == 'jpg' || $f_extension == 'jpeg' || $f_extension == 'png' || $f_extension == 'gif') {
   
    if ($f_size >= 1000000) {
      echo "max size is 10 mb";

     } else {

         if (move_uploaded_file($f_tmp, $store)) {
         } 
       }
    }

  if(empty($f_name)){

   $sql_insert = "INSERT INTO `chat_ticket`(`id`, `timestamp`, `ticket_id`, `account_id`,`message`,`role`) VALUES (null,'" . $currnt_time . "','" . $room_id . "','" . $account_id . "','" . $messagesent . "','" . $role . "')";
  

  }else{

   $sql_insert = "INSERT INTO `chat_ticket`(`id`,`img`, `timestamp`, `ticket_id`, `account_id`,`message`,`role`) VALUES (null,'" . $f_newfile . "','" . $currnt_time . "','" . $room_id . "','" . $account_id . "','" . $messagesent . "','" . $role . "')";

  }



   $sql_query = (mysqli_query($con, $sql_insert));


   $response = array(
        "status"   => "success",
        "tid"      => $room_id,
        "response" => "Success!"
         );

}


else{
        
        $response = array(
        "status" => "error",
        "response" => "Access Denied!"
         );
       
     }

echo json_encode($response);
?>