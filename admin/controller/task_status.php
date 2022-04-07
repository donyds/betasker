<?php

   include("../../controller/config.php");
   session_start();

 if(isset($_GET['id'])) { 


    $id               = $_GET['id'];
    $status           = $_GET['status'];
  
         
         $sql = "UPDATE task_create SET task_status ='$status' WHERE id='$id'";

          $reteval=mysqli_query($con, $sql);

         if($status =='1'){
          $_SESSION['task_succ'] = 'Task is Open Now';
       
         } else{
          $_SESSION['task_succ'] = 'Task is Close Now';

         }
          header('location: ../task.php');
        
  }
?>