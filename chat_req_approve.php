<?php 
include("controller/cookie.php");
include_once 'controller/config.php';
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
.toolbar.messagebar {
position: fixed !important;
bottom: 0px !important;
}

a {
 color: #383838 !important
}

.button-round {
 border-radius: 50px;
}

ul {
list-style: none;
padding-left: 15px !important;
margin-bottom: 5px;
}



p{
  font-weight:400;
  font-size: 13px;
  margin-bottom: 4px;
}
.right a {
    color: #f7f7f7 !important;
    font-weight:400;
}
.row{
  margin-right:0px !important;
  margin-left:0px !important;
}

img.foo-ico {
    width: 30px;
    height: auto;
    padding-bottom: 15px;
}

.ftmanage {
    color: #807e7e !important;
  }

.card{
  margin:0px 0px 7px 0px;
      border-bottom: 1px solid rgba(0,0,0,.125);
      border-top:none;
    border-radius: 0px;
    border-left: 4px solid #7fb145;
        padding:0px 5px;
}


input {
  outline: none;
}
input[type=search] {
  -webkit-appearance: textfield;
  -webkit-box-sizing: content-box;
  font-family: inherit;
  font-size: 100%;
}
input::-webkit-search-decoration,
input::-webkit-search-cancel-button {
  display: none; 
}


input[type=search] {
  border: solid 1px #ccc;
  padding: 9px 10px 9px 32px;
  width: 55px;
  
  -webkit-border-radius: 10em;
  -moz-border-radius: 10em;
  border-radius: 10em;
  
  -webkit-transition: all .5s;
  -moz-transition: all .5s;
  transition: all .5s;
}
input[type=search]:focus {
  width: 130px;
  background-color: #fff;
  border-color: #66CC75;
  
  -webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
  -moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
  box-shadow: 0 0 5px rgba(109,207,246,.5);
}


input:-moz-placeholder {
  color: #999;
}
input::-webkit-input-placeholder {
  color: #999;
}

/* Demo 2 */
#demo-2 input[type=search] {
  width: 28px;
  padding-left: 10px;
  color: transparent;
  cursor: pointer;
}
#demo-2 input[type=search]:hover {
  background-color: #fff;
}
#demo-2 input[type=search]:focus {
  width: 130px;
  padding-left: 32px;
  color: #000;
  background-color: #fff;
  cursor: auto;
}
#demo-2 input:-moz-placeholder {
  color: transparent;
}
#demo-2 input::-webkit-input-placeholder {
  color: transparent;
}

a.nav-link.active {
    background: transparent!important;
    border: none;
    border-bottom: 2px solid #fff;
    color: #fff !important;
}
a.nav-link{
  color:#fff !important;
  font-size:18px;
  font-weight:500;
}

a:hover{
  text-decoration:none;
}
/*----------*/
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Payment Request</h6></span></div>

<div class="right">
<!-- <form id="demo-2">
  <input type="search" placeholder="Search"> 
  <i class="fa fa-search pr-3"></i>
</form>-->
</div>


</div>
</div>

<!---->
<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:7px"></div>
  
    <div class="toolbar tabbar toolbar-bottom" style="background:#05a0c7">
        <ul class="nav nav-tabs text-center" role="tablist" style="border:none;">
    <li class="nav-item col-6">
      <a class="nav-link active" data-toggle="tab" href="#Earned">Earned</a>
    </li>
    <li class="nav-item col-6">
      <a class="nav-link" data-toggle="tab" href="#Outgoing">Outgoing</a>
    </li>
   
  </ul>
    </div>
    <div class="tabs tabs-routable">
        <div class="tab-content">
    <div id="Earned" class="tab-pane active"><br>
<?php 
$account_id = $_COOKIE['id'];
$api_url1       = 'https://sharukh.dbtechserver.online/betasker/controller/api/get_earn.php?id='.$account_id;
$json_data1     = file_get_contents($api_url1);
$response_data1 = json_decode($json_data1);
$getacc = $response_data1->result;
$count_ern = COUNT($getacc);
//print_r($getacc);

if($count_ern > 0){     

foreach ($getacc as $row) { ?>
<div class="card">
<div class="card-content">
<a href="#" class="item-content">
<div class="row d-flex" style="align-content:center;" style="margin-right:0px!important;margin-left:0px!important;"> 

          <div class="col-8">
               <h4 style="font-size: 20px;"><?php echo $row->title;?></h4>
              
          <div class="col-12 pl-0"><p>Fund Received</p></div>

          <div class="col-12 pl-0"> <p class="text-info"><span><i class="fa fa-calendar"></i>&nbsp; <?php echo $row->date;?></span>
          <span><i class="fa fa-clock-o"></i>&nbsp; <?php echo $row->time;?></span>
          </p></div>
          
          
               
          </div>
           <div class="col-4 text-center"> <h4 class="pt-4">£<?php echo $row->amount;?></h4>
            <!--  <img class="pt-3" src="img/my-user.png" width="60"> -->
           </div>
          
 </div>

</a>
</div>

</div><!------>

<?php } }else{?>

     <center> <img class="img-fluid" src="img/payment-history.jpg">
       <p> You haven't earned from any Task yet. How about looking for One to do Now?</p>
     </center>


<?php } ?>
</div>



    <div id="Outgoing" class="tab-pane fade"><br>
    
<?php 

$api_url2       = 'https://sharukh.dbtechserver.online/betasker/controller/api/get_msend.php?id='.$account_id;
$json_data2    = file_get_contents($api_url2);
$response_data2 = json_decode($json_data2);
$getacc2 = $response_data2->result;

$count_outgo = COUNT($getacc2);
//print_r($getacc);

if($count_outgo > 0){     

foreach ($getacc2 as $val) { ?>

<div class="card">
<div class="card-content">
<a href="#" class="item-content">
<div class="row d-flex" style="align-content:center;" style="margin-right:0px!important;margin-left:0px!important;"> 

          <div class="col-8">
               <h4 style="font-size: 20px;"><?php echo $val->title;?></h4>
              
          <div class="col-12 pl-0"><p>Fund Transfer</p></div>

          <div class="col-12 pl-0"> <p class="text-info"><span><i class="fa fa-calendar"></i>&nbsp; <?php echo $val->date;?></span>
          <span><i class="fa fa-clock-o"></i>&nbsp; <?php echo $val->time;?></span>
          </p></div>
          
          
               
          </div>
           <div class="col-4 text-center"> <h4 class="pt-4">£<?php echo $val->amount;?></h4>
            <!--  <img class="pt-3" src="img/my-user.png" width="60"> -->
           </div>
          
 </div>

</a>
</div>

</div><!------>

<?php } }else{?>

     <center> <img class="img-fluid" src="img/payment-history.jpg">
       <p> You haven't earned from any Task yet. How about looking for One to do Now?</p>
     </center>


<?php } ?>



    </div>
   
  </div>
    </div>
  </div>
<div class="row">
<div class="container pl-0 pr-0">




</div><!--container-->


</div><!---row--->
</div>
<div style="height:110px"></div>
</div>
<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include-----> 

</div><!----page-content---> 
</div>


</body>
</html>