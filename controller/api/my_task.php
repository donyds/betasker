<?php

include_once '../config.php';

$products_arr=array();
$products_arr["result"]=array();

$account_id = mysqli_escape_string($con,$_GET['id']);
$val        = mysqli_escape_string($con,$_GET['val']);

if($val){

  if($val =='offer'){

  $query = mysqli_query($con,"SELECT task_create.date,task_create.task_location,task_create.account_id,task_create.task_description,task_create.time_prefer,task_create.task_title,task_create.status,task_create.task_id FROM task_create INNER JOIN task_apply ON task_create.task_id = task_apply.task_id WHERE task_apply.account_id='$account_id'");


  }else{

  $query = mysqli_query($con,"SELECT task_create.date,task_create.task_location,task_create.account_id,task_create.task_description,task_create.time_prefer,task_create.task_title,task_award.timestmap,task_award.task_creator,task_award.task_receiver,task_award.task_id,task_award.task_currency,task_create.status,task_award.task_budget FROM task_create INNER JOIN task_award ON task_create.task_id = task_award.task_id WHERE task_award.task_receiver='$account_id' AND task_create.status='$val' AND task_award.status='1'");


  }


  }else{

  $query = mysqli_query($con,"SELECT task_create.date,task_create.task_location,task_create.account_id,task_create.task_description,task_create.time_prefer,task_create.task_title,task_award.timestmap,task_award.task_creator,task_award.task_receiver,task_award.task_id,task_award.task_currency,task_create.status,task_award.task_budget FROM task_create INNER JOIN task_award ON task_create.task_id = task_award.task_id WHERE task_award.task_receiver='$account_id' AND task_award.status='1'");


}

//get user data from the database

  while ($userData = mysqli_fetch_array($query)){
   
   if($val =='offer'){
   
    $task_creator   = $userData['account_id'];
   
    }else{
    
    $task_creator   = $userData['task_creator'];

    }
    
    $sqls = mysqli_query($con,"SELECT * FROM account WHERE account_id ='$task_creator'");

    $uget = mysqli_fetch_array($sqls);

    $img  = $uget['img'];
  


    $p_item = array(
       
            "task_title"          => $userData['task_title'],
            
            "account_id"          => $userData['account_id'],

            "task_description"    => $userData['task_description'],

            "timestmap"           => $userData['timestmap'],

            "task_location"       => $userData['task_location'],
            "date"                => $userData['date'],

            "task_creator"        => $userData['task_creator'],

            "task_receiver"       => $userData['task_receiver'],

            "task_id"             => $userData['task_id'],

            "task_currency"       => $userData['task_currency'],

            "status"              => $userData['status'],

            "time_prefer"         => $userData['time_prefer'],

            "img"                 => $img,

            "task_budget"         => $userData['task_budget']

        );


        array_push($products_arr["result"], $p_item);

    }

    echo json_encode($products_arr);

?>