<?php

include_once '../config.php';

if(isset($_GET['id'])){

    $room_id  = $_GET['id'];
    
    $sqls     = mysqli_query($con,"DELETE FROM chat_room WHERE room_id='$room_id'");
    $sqls2    = mysqli_query($con,"DELETE FROM chat_message WHERE room_id='$room_id'");
        
    header('Location: ../../chat-list.php');

    }

?>