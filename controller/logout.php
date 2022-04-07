<?php

include_once 'config.php';

$account_id = $_COOKIE['id'];
date_default_timezone_set("Asia/Calcutta");
$last_activity  =  date("Y-m-d H:i:s");

// Remove cookie variables

if(isset($_COOKIE['user'])):

setcookie('user', '', time()-(86400 * 7), '/');
setcookie('id', '', time()-(86400 * 7), '/');
setcookie('role', '', time()-(86400 * 7), '/');
setcookie('username', '', time()-(86400 * 7), '/');
endif;

$upd_activity = mysqli_query($con,"UPDATE account SET last_activity='$last_activity' WHERE account_id = '$account_id' ");

header("Location: ../signup-signin.php");

?>