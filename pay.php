<?php include("controller/cookie.php");?>

<?php
 include_once 'controller/config.php';

$account_id = $_COOKIE['id'];
$api_url1       = 'https://sharukh.dbtechserver.online/betasker/controller/api/get_trans.php?id='.$account_id;
$json_data1     = file_get_contents($api_url1);
$response_data1 = json_decode($json_data1);
$getacc = $response_data1->result;
$wall = $response_data1->wallet ;
//print_r($wall[0]);

    
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

<div class="title pt-1 pl-2"><span class="subtitle"><h6>Payment</h6></span></div>
</div>
</div>
<!---->

<div class="page-content pt-5">

<div class="" style="margin-top:40px"></div>

<div class="mt-0 text-center">
<h4 class="pt-0" style="color:#05a0c7">Available Balance</h4>
<h1 class="pt-2"><i class=""></i>€<?php echo $wall[0]; ?>.00</h1>
</div>
<div class="mt-3 pb-4 text-center">

<?php if(isset($_GET['pay'])){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong></strong>Successfully Add Amount! 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php } ?>
 
<div class="alert alert-danger signupalert" role="alert" style="display: none;"></div>
<div class="alert alert-success add_alert" role="alert" style="display: none;"></div>

<form method="Post" id="myform">
<div class="form-group mx-3" >
<input class="form-control amount" type="number" name="amount" placeholder="Enter Amount" min="1" style="text-align:center; border-radius:50px; min-height: 50px">
</div>  
<center> <a type="button" class="col button button-large button-round button-fill w-50 text-white custom-b add_bal"  style="font-size: 20px;height: 45px;padding-top:5px"><i class="fa fa-money"></i>&nbsp; Add Fund </a></center> 

</form>
</div> 

<?php 
foreach($getacc as $value){ 


?>

<div class="card">
<div class="card-content card-content-padding set-ft">
<a href="#" class="item-link item-content">
<div class="row d-flex text-center py-2" style="align-content:center;">	

<div class="col-40 pl-2">
<div class="pt-1">
<h5 class="pl-1"> <i class="fa fa-check-circle"></i> <?php echo $value->title;?></h5>
<p><i class="fa fa-calendar"></i> <?php echo $value->date;?></p>
</div>
</div>
<div class="col-30 center-font">
<i class=" pt-4"></i>£<?php echo $value->amount;?>
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

        $('.add_bal').click(function(e){

            e.preventDefault();

            var amount     = $(".amount").val();
                
           // alert(amount);

            $.ajax({type: "POST", url: "controller/api/ad_wallet.php",dataType: "json",

            data: {amount:amount},

            success : function(data){

            if (data.status=='success') {
           
            $("#myform")[0].reset();
            $('.signupalert').hide();   
            //$('.add_alert').show();   

            //$(".add_alert").html("<p>"+data.response+"</p>");
    
             //window.location = 'pay.php';
             window.location = 'paynow.php?tid='+data.tid;

            }

            else{
            
            $('.add_alert').hide();   

            $('.signupalert').show();   

            $(".signupalert").html("<p>"+data.response+"</p>");

            }

                }

            });



        });

    });

     </script>
     <!--library  -->

</body>
</html>