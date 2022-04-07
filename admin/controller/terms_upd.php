<?php

include("../../controller/config.php");
session_start();

if(isset($_POST['submit'])){ 

$descp               = mysqli_real_escape_string($con,$_POST['descp']);
$id                  = mysqli_real_escape_string($con,$_POST['id']);


$sql = "UPDATE terms SET descp ='$descp' WHERE id='$id'";
$reteval=mysqli_query($con, $sql);

$_SESSION['succ'] = 'Update Successfully';
if($id =='1'){
header('location: ../tc.php');
}else{
    header('location: ../pc.php');

    
}
}

?>