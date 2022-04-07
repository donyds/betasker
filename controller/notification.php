<?php

class Notification
{  


    // Create function for multiple notification..
    
    function Notify_alert($ad1,$ad2,$ad3)
    {   
    	include_once 'config.php';

    	date_default_timezone_set("America/New_York");
        $date  =  date("Y-m-d H:i:s");

        $send = mysqli_query($con,"INSERT INTO `notification` (`date`, `title`, `task_creator`, `task_id`) VALUES ('$date', '$ad1', '$ad2', '$ad3')");
        // echo $title;
        // echo $uid;
        // echo $username;
        echo $"Notificationis is send";
    }
    
   
}

$ad1 = "NotificationFor RTask";
$ad2 = "Mr khan ";
$ad3 = "None";

$notification = new Notification();
$notification->Notify_alert($ad1,$ad2,$ad3);  

?>