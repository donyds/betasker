<?php

// required headers

header("Access-Control-Allow-Origin: *");

header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Methods: POST");

header("Access-Control-Max-Age: 3600");

header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

  

// get database connection

include_once '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET')

{

    $products_arr=array();

    $products_arr["records"]=array();

  

    $task_id       = mysqli_escape_string($con,$_GET['task_id']);



    $sql = mysqli_query($con,"SELECT account.fullname,account.img, task_apply.date,task_apply.task_proposal, task_apply.budget,task_apply.account_id,task_apply.task_id,task_apply.proposal_id,task_apply.id FROM account JOIN task_apply ON account.account_id = task_apply.account_id WHERE task_apply.task_id='$task_id' AND task_apply.status='0'");

         

    

    while ($row = mysqli_fetch_array($sql)){

        // extract row

  

        $product_item=array(

            "id" => $row['id'],

            "fullname" => $row['fullname'],

            "task_id" => $row['task_id'],

            "date" =>$row['date'],

            "task_proposal" => $row['task_proposal'],

            "budget" => $row['budget'],

            "proposal_id" => $row['proposal_id'],

            "img"         => $row['img'],

            "account_id" => $row['account_id']



        );

  

        array_push($products_arr["records"], $product_item);

    }

  

    // set response code - 200 OK

    http_response_code(200);

  

    // show products data in json format





         

}









else{

  

    $products_arr = array(



        "status" => "error",



        "response" => "Access Denied Method Not Allowed!"



         );

   }

   

    echo json_encode($products_arr);



?>



