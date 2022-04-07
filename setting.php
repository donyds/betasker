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
<link rel = "stylesheet"href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.min.css" />
<link rel = "stylesheet"href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.colors.min.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">



.bg-set{
background-color:#fff;
background:#fff;
background-image:none;
}

.toolbar.messagebar {
position: fixed !important;
bottom: 0px !important;
}

a {
color: #05a0c7 !important;
}

p {
margin:0;
font-weight: 600;
}

i.fa.fa-angle-right {
    font-size: 30px !important;
    padding-top: 15px !important;
    padding-left: 20px;
}
.card{
  margin:0px 0px 7px 0px;
    border-bottom: none;
      border-top:none;
    border-radius: 0px;
    border-bottom: 1px solid #ededed !important;
    box-shadow:none;
  }

.list{
  padding:0px !important;
}

.media-body {
    padding-left: 0px;
    padding-top: 15px;
}
</style>
</head>


<body class="bg-set">
<div class = "views">
<div class="navbar">
<div class="navbar-bg"></div>
<div class="navbar-inner sliding">
<div class="left">
<a href="#" onclick="goBack()"  class="link back">
<i class="icon icon-back"></i>
</a>
</div>
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Settings</h6></span></div>

</div>
</div>

<!-- registration form start -->
<div class = "page-content pt-5 pl-3">

  <div class="" style="margin-top:40px"></div>

<div class="list media-list sortable">



<!------------>
<div class="card">
<div class="card-content card-content-padding set-ft">
<a href="edit-account.php" class="item-link item-content">
<div class="row pt-2 pb-2"> 
 
<div class="col-80 item-inner">
 <div class="item-inner">
<div class="media">
<div class="media-body">
<h5 class="mt-0 text-dark">Edit account</h5>
</div>
</div>
</div>

</div>
<div class="col-20 item-inner">
  <i class="fa fa-angle-right pt-3" style="font-size:18px"></i>
</div>
</div>
</a>
</div>
</div>
<!------------>

<!------------>
<!-- <div class="card">
<div class="card-content card-content-padding set-ft">
<a href="#" class="item-link item-content">
<div class="row pt-2 pb-2"> 
 
<div class="col-80 item-inner">
 <div class="item-inner">
<div class="media">
<div class="media-body">
<h5 class="mt-0 text-dark">Notification setting</h5>
</div>
</div>
</div>

</div>
<div class="col-20 item-inner">
  <i class="fa fa-angle-right pt-3" style="font-size:18px"></i>
</div>
</div>
</a>
</div>
</div> -->

<!------------>
<div class="card">
<div class="card-content card-content-padding set-ft">
<a href="change-password.php" class="item-link item-content">
<div class="row pt-2 pb-2"> 
 
<div class="col-80 item-inner">
 <div class="item-inner">
<div class="media">
<div class="media-body">
<h5 class="mt-0 text-dark">Change password</h5>
</div>
</div>
</div>

</div>
<div class="col-20 item-inner">
  <i class="fa fa-angle-right pt-3" style="font-size:18px"></i>
</div>
</div>
</a>
</div>
</div>
<!------------>


<!------------>
<div class="card">
<div class="card-content card-content-padding set-ft">
<a href="mobile-verification.php" class="item-link item-content">
<div class="row pt-2 pb-2"> 
 
<div class="col-80 item-inner">
 <div class="item-inner">
<div class="media">
<div class="media-body">
<h5 class="mt-0 text-dark">Mobile verification</h5>
</div>
</div>
</div>

</div>
<div class="col-20 item-inner">
  <i class="fa fa-angle-right pt-3" style="font-size:18px"></i>
</div>
</div>
</a>
</div>
</div>
<!------------>

<div class="card">
<div class="card-content card-content-padding set-ft">
<a href="account_setting.php" class="item-link item-content">
<div class="row pt-2 pb-2"> 
 
<div class="col-80 item-inner">
 <div class="item-inner">
<div class="media">
<div class="media-body">
<h5 class="mt-0 text-dark">Account Details</h5>
</div>
</div>
</div>

</div>
<div class="col-20 item-inner">
  <i class="fa fa-angle-right pt-3" style="font-size:18px"></i>
</div>
</div>
</a>
</div>
</div>

</div>  <!-----page----->


<div style="height:70px"></div>  


<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include----->

<script type="text/javascript">
  function myAlertTop(){
  $(".myAlert-top").show();
  setTimeout(function(){
    $(".myAlert-top").hide(); 
  }, 2000);
}

function myAlertBottom(){
  $(".myAlert-bottom").show();
  setTimeout(function(){
    $(".myAlert-bottom").hide(); 
  }, 2000);
}

</script>
</body>
</html>