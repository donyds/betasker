<?php

include_once '../config.php';

$products_arr=array();

$products_arr["result"]=array();

$products_arr["wallet"]=array();

$account_id = $_GET['id'];

//get wallet

$getu     = mysqli_query($con,"Select * FROM account WHERE account_id='$account_id'");

$udetails = mysqli_fetch_array($getu);

$wallet   = $udetails['wallet'];

//get user data from the database

$query = mysqli_query($con,"SELECT * FROM payment_transaction WHERE account_from = '$account_id' AND title='Fund Transfer' ORDER BY id DESC");

while ($userData = mysqli_fetch_array($query)){

         

    $p_item = array(


            "transaction_id"          => $userData['transaction_id'],


              "date"                  => $userData['date'],
              

            "title"                  => $userData['title'],
        

            "time"                    => $userData['time'],


            "amount"                  => $userData['amount'],


            "account_from"            => $userData['account_from'],


            "billing_type"            => $userData['billing_type'],

            "to_name"                 => $userData['to_name'],
            

            "wallet"                  => $wallet


        );

  array_push($products_arr["result"], $p_item);

     
 }

   array_push($products_arr["wallet"], $wallet);

   echo json_encode($products_arr);

?>