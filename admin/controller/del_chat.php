<?php

   include("../../controller/config.php");
   session_start();

   if(isset($_GET['id'])) { 
     
      $id            = $_GET['id'];
     
      $sql = mysqli_query($con,"DELETE FROM chat_room WHERE room_id='$id'");
       //for all chat msg delete
      $sql2 = mysqli_query($con,"DELETE FROM chat_message WHERE room_id='$id'");
      
      header('location: ../chatlist.php');

   }

?>