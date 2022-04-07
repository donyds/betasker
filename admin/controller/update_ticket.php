<?php
include("../../controller/config.php");
session_start();

if(isset($_GET['t'])) { 

    $t                = $_GET['t'];
    $status           = $_GET['status'];
         

     $sql = "UPDATE create_ticket SET status ='$status' WHERE ticket_id='$t'";
     $reteval=mysqli_query($con, $sql);
       
    header('location: ../tickets_list.php');

        

  }

?>