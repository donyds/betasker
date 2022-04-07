<?php include("controller/cookie.php");?>
<?php
 include_once 'controller/config.php';

$account_id = $_COOKIE['id'];
$api_url1       = 'https://sharukh.dbtechserver.online/betasker/controller/api/get_trans.php?id='.$account_id;
$json_data1     = file_get_contents($api_url1);
$response_data1 = json_decode($json_data1);
$getacc = $response_data1->result;
$wall = $response_data1->wallet ;

$chat_id     = $_GET['id'];
$task_id     = $_GET['task_id'];

$get_project = mysqli_query($con,"SELECT * FROM task_award WHERE task_creator='$account_id' AND task_id='$task_id'");
$allot = mysqli_fetch_array($get_project);

$task_id         = $allot['task_id'];
$task_budget     = $allot['task_budget'];
$task_currency   = $allot['task_currency'];

$task_creator    = $allot['task_creator'];
$task_receiver   = $allot['task_receiver'];

//sum chat req
$check_req  = mysqli_query($con,"SELECT SUM(amount) FROM chat_req_pay WHERE task_creator='$task_creator' AND task_id='$task_id' AND status='1'");

$chk_req_details = mysqli_fetch_array($check_req);

$check_alrdy     = $chk_req_details['SUM(amount)'];

$remaining_budget = $task_budget - $check_alrdy;

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

<div class="title pt-2 pl-2">
    <span class="subtitle"><h6>Payment Request</h6></span>
</div>

</div>




<div class="right d-inline-flex">
    <a href="pay.php" class="text-white text-right" style="display: inline-flex!important;">
      <span class="pl-2 pt-2">Add Funds </span>&nbsp;&nbsp;  <img class="" src="img/wallet.png" style="width: 50px;height: auto;padding-right:10px;"> 
    </a>
</div>    




</div>
</div>
<!---->

<div class="page-content pt-5">
<div class="" style="margin-top:40px"></div>

<div class="mt-0 text-center">
<h4 class="pt-0" style="color:#05a0c7">Project Budget <span style="color:#000"> <i class=""></i><?php echo $task_currency; ?><?php echo $remaining_budget; ?>.00</span></h4>
<h1 class="pt-2"></h1>
</div>

<div class="mt-0 text-center">
<h4 class="pt-0" style="color:#05a0c7">Wallet Balance</h4>
<h1 class="pt-2"><i class=""></i>€<?php echo $wall[0]; ?>.00</h1>
</div>
<?php if(isset($_GET['en'])){ ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Available Balance is Insuffitient!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
<?php

include_once 'controller/config.php';
$account_id = $_COOKIE['id']; 
$task_id    = $_GET['task_id'];
$sql = mysqli_query($con,"SELECT * FROM chat_req_pay WHERE task_creator='$account_id' AND task_id='$task_id' ORDER BY id DESC");
        
while($data =mysqli_fetch_array($sql)){
    
    $task_receiver      = $data['task_receiver'];
    $task_creator       = $data['task_creator'];
  
  ?>

<div class="card">
<div class="card-content card-content-padding set-ft">
<a href="#" class="item-link item-content">
<div class="row d-flex text-center py-2" style="align-content:center;"> 

<div class="col-40 pl-2">
<div class="pt-1 text-left">
<p> <i class="fa fa-check-circle"></i> <?php echo $data['title'];?></p>
<p><i class="fa fa-calendar"></i> <?php echo $data['date'];?></p>



</div>
</div>
<div class="col-30 center-font">
<i class=" pt-4"></i><?php echo $data['currency'];?><?php echo $data['amount'];?>

</div>

<div class="col-30">
 <i class="fa fa-angle-right pt-3" style="font-size:20px"></i>
</div>

</div><!------>


<div class="row d-flex text-center py-2" style="align-content:center;"> 
    <?php if($data['status']=='0'){


 ?>
    
    

     <div class="col-100 text-center mx-auto">
        <a class="text-center bg-success px-2 py-1 text-white" href="controller/api/req_updchat.php?id=<?php echo $data['id'];?>&chat=<?php echo $_GET['chat']?>">Approve</a>
       <a  class="text-center bg-danger px-2 py-1 text-white" href="controller/api/req_decline.php?id=<?php echo $data['id'];?>&chat=<?php echo $_GET['chat']?>">Decline</a>

    </div> 
   

    <?php } ?>  

</div>    



</a>
</div>

</div>

<?php } if(mysqli_num_rows($sql)=='0'){ ?>

 <center> <img src="img/no-data.jpg" width="100%">
       <h2> No Data Available</h2>
     </center>


<?php } ?>

<div style="padding-bottom:20px; padding-top:70px"></div>

</div>  <!----page-content---> 
</div>
<div style="height:70px"></div>  

<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include----->


</body>
</html>