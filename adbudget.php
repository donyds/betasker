<?php include("controller/cookie.php");?>

<?php
 include_once 'controller/config.php';

    // $getu     = mysqli_query($con,"Select * FROM account WHERE account_id='$account_id'");
    // $udetails = mysqli_fetch_array($getu);
    // $wallet   = $udetails['wallet'];
    
 
?>

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
/*background-image:url(img/innerpage-bg.jpg);*/
background-color:#fff;
background:#fff;
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

a{
color: #545858 !important;
}

p {
margin:0;
font-weight: 600;
}
.col-40 {
font-weight: 700;
}

.custom-b{
      background: #05a0c7 !important;
    font-size: 17px;
    font-weight: 500;
   
}
i.fa.fa-angle-right {
    font-size: 30px !important;
    padding-top: 15px !important;
    padding-left: 20px;
}

.row .fa{
	color:#05a0c7;
}

.center-font{
	    font-size: 19px;
    color: #065c71;
    font-family: 'Ubuntu';
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

<div class="title pt-1 pl-2"><span class="subtitle"><h6>Increase Budget</h6></span></div>
</div>
</div>
<!---->

<div class="page-content pt-5">

<div class="" style="margin-top:40px"></div>


<div class="mt-3 pb-4 text-center">
 

<form method="POST" action="controller/api/inc_budget.php" id="myform">
<div class="form-group mx-3" >
<input class="form-control amount" type="number" name="amount" placeholder="Enter Amount" style="text-align:center; border-radius:50px; min-height: 50px" min="1" required="">
<input type="hidden" name="task_id" value="<?php echo $_GET['task_id'];?>">
</div>  
<center> <button type="submit" name="submit" class="col button button-large button-round button-fill w-50 text-white custom-b add_bal"  style="font-size: 20px;height: 45px;padding-top:5px"><i class="fa fa-money"></i>&nbsp; Add</button></center> 

</form>
</div> 



<div style="padding-bottom:20px; padding-top:70px"></div>

</div>  <!----page-content---> 
</div>
<div style="height:70px"></div>  

<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include----->


</body>
</html>