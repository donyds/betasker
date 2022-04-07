<?php

include("../../controller/config.php");
session_start();

if(isset($_POST['submit'])){ 

$email     = $_POST['email'];
$password  = $_POST['password'];

$sql = "UPDATE admin SET email ='$email',password='$password' WHERE id='1'";
$reteval=mysqli_query($con, $sql);

$_SESSION['succ'] = 'Update Successfully';

header('location: ../upd_setting.php');

}

?>