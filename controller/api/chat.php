<?php
require_once('../config.php');

date_default_timezone_set("Asia/Calcutta");
$currnt_time  =  date("Y-m-d H:i:s");

if(isset($_POST)){

    $messagesent   = mysqli_escape_string($con,$_POST['chat']); 
    $cht_len       = strlen($messagesent);
    $room_id       = mysqli_escape_string($con,$_GET['room_id']);
    $account_id    = $_COOKIE['id'];

    
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

   $sql_insert = "INSERT INTO `chat_message`(`id`, `timestamp`, `room_id`, `account_id`,`message`) VALUES (null,'" . $currnt_time . "','" . $room_id . "','" . $account_id . "','" . $messagesent . "')";
  

  }else{

   $sql_insert = "INSERT INTO `chat_message`(`id`,`img`, `timestamp`, `room_id`, `account_id`,`message`) VALUES (null,'" . $f_newfile . "','" . $currnt_time . "','" . $room_id . "','" . $account_id . "','" . $messagesent . "')";

  }



   $sql_query = (mysqli_query($con, $sql_insert));


   $response = array(
        "status" => "success",
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