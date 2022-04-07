<?php
include("controller/cookie.php");
include_once 'controller/config.php';

$chat_id     = $_GET['id'];
$task_id     = $_GET['task_id'];

$account_id  = $_COOKIE['id'];

$get_project = mysqli_query($con,"SELECT * FROM task_award WHERE task_receiver='$account_id' AND task_id='$task_id'");
$allot       = mysqli_fetch_array($get_project);

$task_id         = $allot['task_id'];
$task_budget     = $allot['task_budget'];
$task_currency   = $allot['task_currency'];

$task_creator    = $allot['task_creator'];
$task_receiver   = $allot['task_receiver'];

//sum chat req
$check_req  = mysqli_query($con,"SELECT SUM(amount) FROM chat_req_pay WHERE task_receiver='$task_receiver' AND task_id='$task_id' AND status='1'");

$chk_req_details = mysqli_fetch_array($check_req);

$check_alrdy     = $chk_req_details['SUM(amount)'];

$remaining_budget = $task_budget - $check_alrdy;

?>

<?php

$api_url1       = 'https://sharukh.dbtechserver.online/betasker/controller/api/get_trans.php?id='.$account_id;
$json_data1     = file_get_contents($api_url1);
$response_data1 = json_decode($json_data1);
$getacc = $response_data1->result;
$wall = $response_data1->wallet ;
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

<div class="title pt-1 pl-2"><span class="subtitle"><h6>Payment Request</h6></span></div>
</div>
</div>
<!---->

<div class="page-content pt-5">

<div class="" style="margin-top:40px"></div>

<div class="mt-0 text-center">
<h4 class="pt-0" style="color:#05a0c7">Project Budget 

<span style="color:#000"><i class=""></i><?php echo $task_currency; ?><?php echo $remaining_budget; ?>.00 </span></h4>
<h1 class="pt-2"></h1>
</div>

<div class="mt-0 text-center">
<h4 class="pt-0" style="color:#05a0c7">Wallet Balance</h4>
<h1 class="pt-2"><i class=""></i>€<?php echo $wall[0]; ?>.00</h1>
</div>


<div class="mt-3 pb-4 text-center">

<div id="msg"></div>

<form method="Post" id="myform">
<div class="form-group mx-3" >
<input class="form-control amount" type="number" name="amount" placeholder="Enter Amount" min="1" style="text-align:center; border-radius:50px; min-height: 50px">
<input type="hidden" class="task_id" name="task_id" value="<?php echo $task_id;?>"> 
<input type="hidden" class="task_budget" name="task_budget" value="<?php echo $remaining_budget;?>">
<input type="hidden" class="task_currency" name="task_currency" value="<?php echo $task_currency;?>">
<input type="hidden" class="task_creator" name="task_creator" value="<?php echo $task_creator;?>">
<input type="hidden" class="task_receiver" name="task_receiver" value="<?php echo $task_receiver;?>">

<input type="hidden" class="chat_id" name="chat_id" value="<?php echo $_GET['id'];?>">
</div>  
<center> <a type="button" class="col button button-large button-round button-fill w-50 text-white custom-b add_req"  style="font-size: 20px;height: 45px;padding-top:5px"><i class="fa fa-money"></i>&nbsp; Send Request </a></center> 

</form>
</div> 

<?php 
$get_req_d = mysqli_query($con,"SELECT * FROM chat_req_pay WHERE task_receiver='$task_receiver' AND task_id='$task_id' ORDER BY id DESC");

while($value = mysqli_fetch_array($get_req_d)){ 


?>

<div class="card">
<div class="card-content card-content-padding set-ft">
<a href="#" class="item-link item-content">
<div class="row d-flex text-center py-2" style="align-content:center;">	

<div class="col-40 pl-2">
<div class="pt-1 text-left">
<p><i class="fa fa-check-circle"></i> <?php echo $value['title'];?></p>
<p><i class="fa fa-calendar"></i> <?php echo $value['date'];?></p>
</div>
</div>
<div class="col-30 center-font pt-3">
<i class=" pt-4"></i><?php echo $value['currency'];?><?php echo $value['amount'];?>

</div>

<div class="col-30">
 <i class="fa fa-angle-right pt-3" style="font-size:20px"></i>
</div>

</div>
</a>
</div>

</div>

<?php
}
?>

<div style="padding-bottom:20px; padding-top:70px"></div>

</div>  <!----page-content---> 
</div>
<div style="height:70px"></div>  

<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include----->
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script>
         //signup using ajax

    $(document).ready(function() {

        $('.add_req').click(function(e){
        $("#msg").html('<div class="alert alert-info"><i class="fa fa-spin fa-spinner"></i> Please wait...!</div>');

            e.preventDefault();

            var amount        = $(".amount").val();
            var task_id       = $(".task_id").val();
            var task_budget   = $(".task_budget").val();
            var task_currency = $(".task_currency").val();
            var task_creator  = $(".task_creator").val();
            var task_receiver = $(".task_receiver").val();
            var chat_id       = $(".chat_id").val();
            $.ajax({type: "POST", url: "controller/api/chat_req.php",dataType: "json",

            data: {amount:amount,task_id:task_id,task_budget:task_budget,task_currency:task_currency,task_creator:task_creator,task_receiver:task_receiver,chat_id:chat_id},

            success : function(data){

            if (data.status=='success') {
           
            $("#myform")[0].reset();
            
            $("#msg").html(
            '<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Add Request Successfully!</div>'
             );

            window.location.href = "view-chat.php?room_id="+data.chat_id;

            }

            else{

             $("#msg").html('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i>'+data.response+'</div>');
            }

                }

            });

         

        });
        

    });

     </script>
     <!--library  -->

</body>
</html>