<?php include("controller/cookie.php");?>

<!DOCTYPE html>
<html>
<head>
<meta name = "viewport" content = "width = device-width, initial-scale = 1,
maximum-scale = 1, minimum-scale = 1, user-scalable = no, minimal-ui" />
<meta name="theme-color" content="#05b2de">
<meta name = "apple-mobile-web-app-capable" content = "yes" />
<meta name = "apple-mobile-web-app-status-bar-style" content = "black" />
<title>Betasker</title>
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.min.css" />

<link rel = "stylesheet"href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.colors.min.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
.toolbar.messagebar {
position: fixed !important;
bottom: 0px !important;
}

a {
 color: #159489 !important;
}

.button-round {
 border-radius: 50px;
}

ul {
list-style: none;
padding-left: 15px !important;
margin-bottom: 5px;
}

.bg-set{
background-image:none;
}

.ico-user {
font-weight: 600!important;
background-size: cover;
border-radius: 40px;
width: 40px;
height: 40px;
right: 0;
background-color: rgb(4 8 13 / 87%)!important;
}

.custom-b{
      background: #149388;
    font-size: 20px;
    font-weight: 600;
    min-height: 45px;
    padding-top: 5px;
}

h4{
	font-size:22px;
}
p{
	font-weight:400;
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Term and condition </h6></span></div>


</div>
</div>

<!---->
<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:40px"></div>


<div class="card">
<div class="card-content card-content-padding px-2 pt-3">
<div class="content">
<?php
$query = mysqli_query($con,"SELECT * FROM terms WHERE id='1'");
$userData = mysqli_fetch_array($query);
echo $userData['descp'];
?>


</div>
</div>
</div><!---->



<div style="padding-bottom:20px; padding-top:70px"></div>
</div>  <!----page-content---> 

<!----footer----->
<div class="footer">
<div class="toolbar" style="background: linear-gradient(to right, #e1effb, #f9f9f9);height: 62px;">
<div class="toolbar-inner" style="padding-bottom: 10px">
<a href="home.php" class="link external">
<i class="fa fa-home fa-2x setfooternav-active pb-3" aria-hidden="true"></i><h1 class="ftmanage pt-2">Home</h1>
</a>

<a href="job.php" class="link external">
<i class="fa fa-briefcase fa-2x setfooternav pb-3" aria-hidden="true"></i>
<h1 class="ftmanage pt-2">Job</h1>
</a>

<a href = "pay.php" class = "link">
<i class="fa fa-money fa-2x setfooternav pb-3" aria-hidden="true"></i>
<h1 class="ftmanage pt-2">Payment</h1>
</a> 
<a href="chat-list.php" class="link external">
<i class="fa fa-commenting-o fa-2x setfooternav pb-3" aria-hidden="true"></i>
<h1 class="ftmanage pt-2">Chat</h1>
</a>

<a href="settings.php" class="link external">
<i class="fa fa-cog fa-2x setfooternav pb-3" aria-hidden="true"></i>
<h1 class="ftmanage pt-2">Setting</h1>
</a>

</div>
</div>
</div>            

<!----footer------>
<?php include 'include/footer2.php';?> 
<!----footer------>
</body>
</html>