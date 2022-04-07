<?php include("controller/cookie.php");?>

<?php

include'controller/config.php';
$task_id   = $_GET['task_id'];
$cookie_id = $_COOKIE['id'];

$bank      = mysqli_query($con,"SELECT * FROM bank_details WHERE account_id ='$cookie_id' AND status='1'");
$billing   = mysqli_query($con,"SELECT * FROM billing_details WHERE account_id ='$cookie_id' AND status='1'");

$mob    = mysqli_query($con,"SELECT * FROM account WHERE account_id ='$cookie_id'");
$get_no = mysqli_fetch_array($mob);
$mobile = $get_no['mobile_no'];

$bnk  = mysqli_num_rows($bank);  
$bill = mysqli_num_rows($billing);  

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
.link-custom {
    border-bottom: 1px solid #d7d6d6;
    padding: 5px 20px 5px;
}
.link-custom .fa {
    padding-right: 10px;
}
.link-custom a {
    color: #05a0c7;
}
.link-custom a:hover {
    color: #000;
}

.footer {
    opacity: 0;
}

.center-set {
    width: 60%;
    margin: 0 auto;
    position: absolute;
    bottom: 0px;
    
    left: 100px;
}

.center-set a {
  border-radius: 20px;
  background:#05a0c7;
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Confirm your offer</h6></span></div>

<div class="right">


</div>


</div>
</div>


<!---->
<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:40px"></div>
 


    <div class="container pl-0 pr-0">

   <div class="row mt-3 mx-0 px-0">
    
    <?php if(isset($_GET['bank'])){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Bank Account is Successfully Updated!</strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <?php } ?>

    <?php if(isset($_GET['bill'])){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Billing Address is Successfully Updated!</strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <?php } ?>

    <?php if(isset($_GET['mob'])){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Mobile Number is Successfully Updated!</strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <?php } ?>

    <div class="alert alert-danger alert-dismissible fade show show_alert" role="alert" style="display: none;">
    <strong>Provide Bank Details, Billing Address, Mobile Number!</strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>


    <div class="col-12 mt-3 mb-4">
      <div class="link-custom">
      <a class="" href="provide-bank-ac.php?task_id=<?php echo $_GET['task_id'];?>"> <i class="fa fa-credit-card"></i> Provide bank account </a>
    </div>
    </div>

     <div class="col-12 mt-3 mb-4">
      <div class="link-custom">
      <a class="" href="provide-billing-address.php?task_id=<?php echo $_GET['task_id'];?>"> <i class="fa fa-map-marker"></i> Provide billing address </a>
    </div>
    </div>

     <div class="col-12 mt-3 mb-4">
      <div class="link-custom">
      <a class="" href="provide-your-mobile.php?task_id=<?php echo $_GET['task_id'];?>"> <i class="fa fa-phone"></i> Provide your mobile number </a>
    </div>
    </div>

    
    <center>


        
        <div class="center-set">
        <?php if($bnk > 0 && $bill > 0 && $mobile !='0'){ ?>

        <a href="make-an-offer.php?task_id=<?php echo $_GET['task_id'];?>" class="col button button-large button-round btn btn-success button-fill text-white pb-2 text-capitalize mb-3" style="font-size: 16px;">continue</a>

        <?php }else{ ?>

            <a class="col button button-large button-round btn btn-danger button-fill text-white pb-2 text-capitalize mb-3 alerterr" >continue</a>
   
        <?php } ?>

        </div>
        <div class="col-12 mt-3 mb-4">
        </center>
        </div> 
    </div>
 </div>

</div>


</div><!--container-->
   
  </div>


<div style="height:110px"></div>

<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include-----> 

</div><!----page-content---> 
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
$(".alerterr").click(function(){
    $(".show_alert").show();
  });


});

</script>

</body>
</html>

