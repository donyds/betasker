<?php

   include("../../controller/config.php");
   session_start();

 if(isset($_GET['id'])) { 
     
       $id            = $_GET['id'];
     
       $sql = mysqli_query($con,"DELETE FROM task_create WHERE id='$id'");
      
       header('location: ../task.php');

   }

?>