<?php
  include_once '../config.php';

  $products_arr=array();
  $products_arr["result"]=array();

  $account_id = mysqli_escape_string($con,$_GET['id']);
  $val        = mysqli_escape_string($con,$_GET['val']);

  $sqls = mysqli_query($con,"SELECT * FROM account WHERE account_id ='$account_id'");
  $uget = mysqli_fetch_array($sqls);
  $img  = $uget['img'];

  //get user data from the database
  if($val){
  if($val !='offer'){
  $query = mysqli_query($con,"SELECT * FROM task_create WHERE account_id='$account_id' AND status='$val' ORDER BY id DESC");
  }
  
  }else{

  $query = mysqli_query($con,"SELECT * FROM task_create WHERE account_id='$account_id' ORDER BY id DESC");

  }
  //$query = mysqli_query($con,"SELECT task_create.task_title,task_award.timestmap,task_award.task_creator,task_award.task_receiver,task_award.task_id,task_award.task_currency,task_award.task_budget FROM task_create INNER JOIN task_award ON task_create.task_id = task_award.task_id
  //WHERE task_award.task_creator='$account_id'");


   while ($userData = mysqli_fetch_array($query)){

          $p_item = array(

            "task_title"          => $userData['task_title'],

            "account_id"          => $userData['account_id'],

            "task_description"    => $userData['task_description'],
             
             "timestmap"          => $userData['date'],
           
            "task_location"       => $userData['task_location'],
            
            "date"                => $userData['date'],


            "task_creator"        => $userData['account_id'],

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