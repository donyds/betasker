<?php

   include("../../controller/config.php");
   session_start();

   if(isset($_GET['id'])) { 
     
      $id       = $_GET['id'];
      $creator  = $_GET['creator'];
      $room_id  = $_GET['room_id'];
       //for all chat msg delete
      $sql2 = mysqli_query($con,"DELETE FROM chat_message WHERE id='$id'");
      
      header('location: ../message_chat.php?id='.$room_id.'&creator='.$creator);

   }

?>