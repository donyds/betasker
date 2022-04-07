<?php include("controller/cookie.php");?>

<!DOCTYPE html>
<html>
<head>
<meta name = "viewport" content = "width = device-width, initial-scale = 1,
maximum-scale = 1, minimum-scale = 1, user-scalable = no, minimal-ui" />

<meta name = "apple-mobile-web-app-capable" content = "yes" />
<meta name="theme-color" content="#05b2de">
<meta name = "apple-mobile-web-app-status-bar-style" content = "black" />
<title>Betasker</title>
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.min.css" />

<link rel = "stylesheet"href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.colors.min.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style type="text/css">

.reg-btn {
    background: #0090b5 !important;
    border-radius: 50px;
    font-size: 25px;
    min-height: 45px;
    max-width: 45%;
    margin: 0 auto;
    text-transform: capitalize;
    font-family: 'Ubuntu', sans-serif;
}
</style>
</head>


<body class="bg-set" style="background:#fff">
<div class = "views">

<div class="navbar">
<div class="navbar-bg"></div>
<div class="navbar-inner sliding">
<div class="left">
<a href="#" onclick="goBack()"  class="link back">
<i class="icon icon-back"></i>
</a>
</div>
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Account-verify </h6></span></div>



</div>
</div>

<!---->
<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:50px"></div>
  
 <center> <img src="img/mail-v.png" width="75%">
       <h5 class="pt-5 pl-2 pr-2"> Verify Account Mail Sent on your Email Address Please check your Email Account! </h5>
     </center>
     <div class="pt-5">
<button type="submit" class="reg-btn col button button-sm button-round button-fill login">
                    <!-- <i class="fa fa-paper-plane"><i> --> <img class="img-fluid custom-with" src="img/send.png" style="filter:unset;">   Login
                   </button>
  </div>
<div class="row">
<div class="container pl-0 pr-0">




</div><!--container-->


</div><!---row--->

<div style="height:110px"></div>

<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include-----> 
</div>
</div><!----page-content---> 
</div>


</body>
</html>