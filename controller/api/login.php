<?php



// required headers

header("Access-Control-Allow-Origin: *");

header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Methods: POST");

header("Access-Control-Max-Age: 3600");

header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

  

// get database connection

include_once '../config.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST')

{

    //$data = json_decode(file_get_contents("php://input"),TRUE);
    //$mobile      = $_POST['mobile'];
    
    $email         = mysqli_escape_string($con,$_POST['email']);
    $password      = mysqli_escape_string($con,$_POST['password']);

    $sqls    = "SELECT * FROM account WHERE email_address='$email' AND password='$password' AND verify_status='1'";

    $results = mysqli_query($con,$sqls);

    $rows    = mysqli_fetch_array($results,MYSQLI_ASSOC);

    $count   = mysqli_num_rows($results);


     if($count == '1'){

        $account_id     = $rows['account_id'];

        $fullname       = $rows['fullname'];

        $email_address  = $rows['email_address'];

        $role           = $rows['role'];



        setcookie('id', $account_id, time()+(86400 * 7), '/');

        setcookie('username', $fullname, time()+(86400 * 7), '/');

        setcookie('user', $email_address, time()+(86400 * 7), '/');

        setcookie('role', $role, time()+(86400 * 7), '/');



        $response = array(



        "status" => "success",



        "response" => "Success!"



         );

         

         



        }



else{

     $response = array(



        "status" => "error",



        "response" => "Email or Password Does not Match!"



         );

    }



    

  

  }





else{

  

     $response = array(



        "status" => "error",



        "response" => "Access Denied Method Not Allowed!"



         );

        

   

   }



//Json decode



echo json_encode($response);





?>



