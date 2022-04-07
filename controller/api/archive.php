<?php
include_once '../config.php';

if ($_GET['task_id'])
{
    $task_id  = mysqli_escape_string($con,$_GET['task_id']);
    $status   = mysqli_escape_string($con,$_GET['status']);
    $sqls    = "UPDATE task_create SET status='$status' WHERE task_id='$task_id'";
    $results = mysqli_query($con,$sqls);
    
    
    header('Location : ../../my-task.php?tab=booking');
    
  }

?>

