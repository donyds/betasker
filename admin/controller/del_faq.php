<?php

   include("../../controller/config.php");
   session_start();

 if(isset($_GET['id'])) { 
     
       $id            = $_GET['id'];
     
       $sql = mysqli_query($con,"DELETE FROM faq WHERE id='$id'");
      
       header('location: ../faq-list.php');

   }

?>