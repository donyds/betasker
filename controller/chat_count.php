<?php

require_once('config.php'); 

$account_id = $_COOKIE['id']; 
$sum = 0;

$sql = mysqli_query($con,"SELECT * FROM chat_room WHERE FIND_IN_SET('$account_id',access_id)");

while($data =mysqli_fetch_array($sql)){
    
$user_id      = $data['user_id'];
$room_id      = $data['room_id'];
$str          =  explode(" ",$data['room_title']);
$acc_id       = $data['access_id'];
$matches      = explode(',', $acc_id);

$chat_receiver  = $matches[0];
$chat_creator   = $matches[1];


    if($account_id == $chat_receiver){
    //count msg here
    $get_msg = mysqli_query($con,"SELECT COUNT(status) FROM chat_message WHERE account_id='$chat_creator' AND status='0' AND room_id='$room_id'");
    $get_rom   = mysqli_fetch_array($get_msg);
    $total = $get_rom['COUNT(status)'];

    }else if($account_id == $chat_creator){

    //count msg here
    $get_msg = mysqli_query($con,"SELECT COUNT(status) FROM chat_message WHERE account_id='$chat_receiver' AND status='0' AND room_id='$room_id'");
    $get_rom   = mysqli_fetch_array($get_msg);
    $total = $get_rom['COUNT(status)'];

    } 

    $sum_total += $total;
    

  }
    echo "(".$sum_total.")";
 
?>