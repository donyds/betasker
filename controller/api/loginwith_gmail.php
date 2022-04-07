<?php
include_once '../config.php';

require 'google-api/vendor/autoload.php';

// Creating new google client instance
$client = new Google_Client();

// Enter your Client ID
$client->setClientId('62350480345-4vo9o16juvhvcnu0pjl56urucobc2iuk.apps.googleusercontent.com');
// Enter your Client Secrect
$client->setClientSecret('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');
// Enter the Redirect URL
$client->setRedirectUri('https://sharukh.dbtechserver.online/betasker/controller/api/loginwith_gmail.php');

// Adding those scopes which we want to get (email & profile Information)
$client->addScope("email");
$client->addScope("profile");


if(isset($_GET['code'])):

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    if(!isset($token["error"])){

        $client->setAccessToken($token['access_token']);

        // getting profile information
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
    
        // Storing data into database
        $id = mysqli_real_escape_string($con, $google_account_info->id);
        $full_name = mysqli_real_escape_string($con, trim($google_account_info->name));
        $email = mysqli_real_escape_string($con, $google_account_info->email);
        $profile_pic = mysqli_real_escape_string($con, $google_account_info->picture);

        // checking user already exists or not
        $get_user = mysqli_query($con, "SELECT * FROM `account` WHERE `google_id`='$id'");
        $rows     = mysqli_fetch_array($get_user,MYSQLI_ASSOC);

       
        if(mysqli_num_rows($get_user) > 0){

             //$_SESSION['login_id'] = $id; 
             $account_id     = $rows['account_id'];
             $fullname       = $rows['fullname'];
             $email_address  = $rows['email_address'];
             $role           = $rows['role'];


             setcookie('id', $account_id, time()+(86400 * 7), '/');
             setcookie('username', $fullname, time()+(86400 * 7), '/');
             setcookie('user', $email_address, time()+(86400 * 7), '/');
             setcookie('role', $role, time()+(86400 * 7), '/');

             header('Location: ../../browse-tasks.php');

            exit;

        }
        else{

            date_default_timezone_set("Asia/Kolkata");
            $date          = date('d-m-Y');
            $time          = date('H:i:s');
            $uniqid        = uniqid();
            $verify_status = "1";
            $rolenew       = "Both";

            // if user not exists we will insert the user
            //$insert = mysqli_query($con, "INSERT INTO `users`(`google_id`,`name`,`email`,`profile_image`) VALUES('$id','$full_name','$email','$profile_pic')");

            // $Check_is   = mysqli_query($con,"SELECT * FROM account WHERE email_address='$email'");
            // $is_email   = mysqli_num_rows($Check_is);

            // if($is_email > 0 ){

            // header('Location: ../../signup-signin.php?al');


            // }else{

            $insert = mysqli_query($con,"INSERT INTO `account`(`date`,`time`,`account_id`,`google_id`,`fullname`,`email_address`,`verify_status`,`role`) VALUES('" . $date . "','" . $time . "','" . $uniqid . "','" . $id . "','".$full_name."','".$email."','".$verify_status."','".$rolenew."')");
         
            if($insert){
                setcookie('id', $uniqid, time()+(86400 * 7), '/');
                setcookie('username', $full_name, time()+(86400 * 7), '/');
                setcookie('user', $email, time()+(86400 * 7), '/');
                setcookie('role', $rolenew, time()+(86400 * 7), '/');
                
                //$_SESSION['login_id'] = $id; 
                header('Location: ../../get-started.php');
                exit;
            }
            else{

                header('Location: ../../signup-signin.php?wr');

                //echo "Sign up failed!(Something went wrong).";
            }

            //}

        }

    }
    else{
        header('Location: ../../signup-signin.php');
        exit;
    }
    
else: 
    // Google Login Url = $client->createAuthUrl(); 
?>


<?php endif; ?>