<?php

include("../../controller/config.php");
session_start();

if(isset($_POST['submit'])){ 

$price_ref               = mysqli_real_escape_string($con,$_POST['price_ref']);


$sql = mysqli_query($con,"UPDATE refer_price SET price ='$price_ref' WHERE id='1'");


header('location: ../refferal.php?succ');

}

?>