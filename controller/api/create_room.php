<?php

// get database connection
include_once '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{   

    date_default_timezone_set('Asia/Kolkata');

    $date       =  date('d-m-Y H:i');
    $time       = date('H:i:s');

    //$account_id  = $_COOKIE['id'];
    $room_id     = uniqid();

    $task_creator    = mysqli_escape_string($con,$_POST['task_creator']);

    $user_id         = mysqli_escape_string($con,$_POST['user_id']);

    $name            = mysqli_escape_string($con,$_POST['name']);

    $task_title      = mysqli_escape_string($con,$_POST['task_title']);
    $task_id         = mysqli_escape_string($con,$_POST['task_id']);

    $access = $user_id.','.$task_creator;

    $check2 = mysqli_query($con,"SELECT * FROM chat_room WHERE access_id='$access' AND task_id='$task_id'");

    $count2 = mysqli_num_rows($check2);

    $getr = mysqli_fetch_array($check2);

    $get_room_id = $getr['room_id'];

    if($count2 =='1'){

         header('Location : ../../chat-list.php');

    }else{


         $sql = mysqli_query($con,"INSERT INTO chat_room(timestamp,room_id,task_creator,user_id,room_title,access_id,status,task_title,task_id) VALUES('$date','$room_id','$task_creator','$user_id','$name','$access','0','$task_title','$task_id')");
     

        // set response code - 201 

         header('Location : ../../chat-list.php');

    }

}

   

?>



