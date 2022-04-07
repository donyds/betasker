<?php

include_once '../config.php';

$products_arr=array();
$products_arr["result"]=array();
$products_arr["wallet"]=array();


$account_id = mysqli_escape_string($con,$_GET['id']);
//get wallet

//get user data from the database

$query = mysqli_query($con,"SELECT * FROM payment_transaction WHERE account_from = '$account_id' AND title='Fund Transfer' ORDER BY id DESC");

while ($userData = mysqli_fetch_array($query)){

    $task_id = $userData['task_id'];

    $get_task     = mysqli_query($con,"Select * FROM task_create WHERE task_id='$task_id'");
    $uget_task  = mysqli_fetch_array($get_task);

    $task_title     = $uget_task['task_title'];

          
    $p_item = array(

            "transaction_id"          => $userData['transaction_id'],

              "date"                  => $userData['date'],

            "title"                   => $task_title,

            "time"                    => $userData['time'],

            "amount"                  => $userData['amount'],

            "account_from"            => $userData['account_from'],

            "billing_type"            => $userData['billing_type'],

            "to_name"                 => $userData['to_name']

        );

      array_push($products_arr["result"], $p_item);
      

    }

    echo json_encode($products_arr);

?>