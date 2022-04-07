<?php
include_once '../config.php';

if (isset($_POST)) {
  
   $price    = mysqli_escape_string($con,$_POST['price']);
   $location = mysqli_escape_string($con,$_POST['location']);
   
   //$getad    = explode(',',$location);
   //$getad1   = $getad[0];

  if (!empty($location)) {

   header('Location : ../../browse-tasks.php?location='.$location.'&price='.$price);

  }else{
  
   header('Location : ../../browse-tasks.php?price='.$price);

  }
 

  
  }

?>



