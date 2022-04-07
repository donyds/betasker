<?php

include_once '../config.php';

//if(!empty($_POST['user_id'])){
$data = array();
$account_id = mysqli_escape_string($con,$_GET['id']);

    
//get user data from the database
$query = mysqli_query($con,"SELECT * FROM account WHERE account_id = '$account_id'");

    

if($query->num_rows > 0){

        $userData = $query->fetch_assoc();

        $data['status'] = 'ok';

        $data['result'] = $userData;

}else{

        $data['status'] = 'err';

        $data['result'] = '';

}

    

 //returns data as JSON format

echo json_encode($data);

//}

?>