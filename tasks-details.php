<?php include("controller/cookie.php");?>

<?php

 include'controller/config.php';
    $task_id = $_GET['task_id'];
    $cookie_id = $_COOKIE['id'];
    
     //$taskid = $_GET['task_id'];

$api_url = 'https://sharukh.dbtechserver.online/betasker/controller/api/get_job_byid.php?task_id='.$task_id;
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);

//get day 
$post_date = $response_data->date;
$nameOfDay = date('D', strtotime($post_date));
//get month
$datetime  = DateTime::createFromFormat('d-m-Y', $post_date);
$month     = $datetime->format('M');
// get day date
$date_day  = date("d", strtotime($post_date));




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

ui-mobile-viewport, ui-overlay-a, .ui-mobile{
     display:none !important;
}

.circle {
    border-radius: 50%;
}

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
font-weight: 400;
}

i.fa.fa-angle-right {
    font-size: 30px !important;
    padding-top: 15px !important;
    padding-left: 20px;
}
.card {
    margin: 0px 0px 7px 0px;
    border-bottom: 1px solid rgba(0,0,0,.125);
    border-top: none;
    border-radius: 0px;
    border-left: 4px solid #7fb145;
    padding: 0px 5px;
}

.list{
  padding:0px !important;
}

.media-body {
    padding-left: 0px;
    padding-top: 15px;
}

.action-button {
    width: 45%;
    background: #05a0c7;
   /* font-weight: bold;*/
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
    position: fixed;
    bottom: 80px;
    margin: 0 auto;
    left: 120px;
    z-index: 99999;
}
.reg-btn {
    background: #0090b5 !important;
    border-radius: 50px;
    font-size: 17px;
    min-height: 35px;
    max-width: 40%;
    margin: 10px auto;
    text-transform: capitalize;
    font-family: 'Ubuntu', sans-serif;
}

/* The pop (background) */
.pop {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* pop Content */
.pop-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 90%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.cus-btn {
    background: #079ec8;
    min-width: 135px !important;
    float: left !important;
    text-align: center !important;
    border-color: #079ec8;
    border-radius: 20px;
}

a.f-r {
    position: absolute;
    right: 5px;
    top: 10px;
    font-weight: 500;
    font-size: 13px;
    color: #fff !important;
}

ul.share {
    float: left;
    padding-left: 0;
}
ul.share li {
    float: left;
    list-style: none;
}

ul.share li a{
    float: left;
    padding: 8px;
   color:#000;
} 

.media.mb-2 a img {
    width: 75%;
}

.col-3 {
    
    max-width: 32%;
}

.cus-btn {
    min-width: 120px !important;
}

</style>
</head>


<body class="bg-set" onload="bodyOnloadHandler()">
<div class = "views">
<div class="navbar">
<div class="navbar-bg"></div>
<div class="navbar-inner sliding">
<div class="left">
<a href="#" onclick="goBack()"  class="link back">
<i class="icon icon-back"></i>
</a>
</div>
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Job Details</h6></span></div>

</div>
</div>


<!-- registration form start -->
<div class = "page-content pt-5 pl-3">

  <div class="" style="margin-top:40px"></div>

<div class="list media-list sortable">

<div class="card card-outline mx-2 px-2">

<div class="card-content card-content-padding pb-3">

<a href="profile.php?id=<?php  echo $response_data->account_id; ?>">

<img class="img-fluid w-15 float-left circle" src="img/<?php  echo $response_data->img; ?>" alt="" style="border-radius: 50px;
    height: 60px;width: 60px;">
</a>

 <h3 class="pt-2 pl-3" style="font-size:17px;color:#05a0c7;max-width: 270px;"><?php  echo ucwords($response_data->task_title); ?></h3>

<?php 
   
    $check2 = mysqli_query($con,"SELECT * FROM task_create WHERE task_id='$task_id' AND account_id='$cookie_id'");
    $count2 = mysqli_num_rows($check2);

    $check3 = mysqli_query($con,"SELECT * FROM task_award WHERE task_id='$task_id'");
    $count3 = mysqli_num_rows($check3);
    
   
    if($count2 =='1'){
?>

<?php if($count3 > 0){ ?>
<p><a href="add-reviews.php?task_id=<?php echo $_GET['task_id'];?>" class="f-r badge badge-danger" style="font-size:15px;color:red;" onclick="return confirm('Are you sure?')">Close Post</a></p>
<?php } ?>

<!-- increase budget -->

<!-- <p class="float-right"><a href="controller/api/archive.php?task_id=<?php //echo $_GET['task_id'];?>" class="badge badge-info" style="font-size:15px;color:#fff!important;">Archive</a></p> -->

<?php } ?>

<p>Post <i class="fa fa-calendar"></i>&nbsp; <?php echo $nameOfDay ."," ;?> <?php echo $month;?> <?php echo $date_day;?></p>

<p class="pt-1">
<span class="font-weight-bold text-success">Proposal  Amount</span><b>  <?php  echo ucwords($response_data->task_currency).ucwords($response_data->task_budget); ?>/-</b>
</p>


<p class="pt-1"><?php  echo ucwords($response_data->task_description); ?> </p></div>



</div>

<div class="row">
<div class="col-8"><div class="container pt-3 pb-3 text-dark"><h5 style="color:#05a0c7">Recent Proposal</h5></div></div>
<!--<div class="col-4 col-4 text-center"><strong>Share On</strong><br>
 <ul class="share">
    <li> <a href="#"><i class="fa fa-facebook"></i> </a></li>
     <li> <a href="#"><i class="fa fa-whatsapp"></i> </a></li>
      <li> <a href="#"><i class="fa fa-twitter"></i> </a></li>

</ul> 
</div>-->
</div>    


<?php 

$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'https://sharukh.dbtechserver.online/betasker/controller/api/get_proposal.php?task_id='.$task_id);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$phoneList = curl_exec($cURLConnection);
curl_close($cURLConnection);

$jsonArrayResponse = json_decode($phoneList);
//echo '<pre>';
$all_data = $jsonArrayResponse->records;
//print_r($all_data);

foreach($all_data as  $records) { 
  $nameu  =  ucwords($records->fullname);
  $str    =  explode(" ",$nameu);
?>
<!------->
<div class="card card-outline px-2 mx-2 py-3">
<div class="card-content card-content-padding">

<div class="item-inner">
  <div class="col-80">
<div class="media mb-2">
<a href="profile.php?id=<?php  echo $records->account_id; ?>">

    <img class="img-fluid w-15" src="img/<?php echo $records->img;?>" alt="..." style="border-radius: 50px;
    height: 60px;width: 60px;"></a>
<div class="media-body">
<h5 class="mt-0 text-dark pl-2"><?php echo ucwords($str[0]);?></h5>
</div>
<?php 
//get day 
$post_dat = $records->date;
$nameOfDy = date('D', strtotime($post_dat));
//get month
$datetime  = DateTime::createFromFormat('d-m-Y', $post_dat);
$mnth      = $datetime->format('M');
// get day date
$date_dy  = date("d", strtotime($post_dat));


?>
 <div class="col-20">
<p class="pt-2 pb-2"><i class="fa fa-calendar"></i> <?php echo $nameOfDy ."," ;?> <?php echo $mnth;?> <?php echo $date_dy;?></p>
 </div>
</div>
<span class="font-weight-bold text-success">Bid  Amount</span> <b><?php echo ucwords($response_data->task_currency).ucwords($records->budget) ;?>/-</b>
</div>

<P class="pt-1"><?php echo ucwords($records->task_proposal) ;?> </P>

<?php 
   
    $check2 = mysqli_query($con,"Select * FROM task_create WHERE task_id='$task_id' AND account_id='$cookie_id'");
    $count2 = mysqli_num_rows($check2);
    
   
    if($count2 =='1'){
        
 
?>

<div class="row mt-2">
    <div class="col-3 mx-0 px-0">
<form method="post" action="controller/api/create_room.php">
    <input type="hidden" name="task_creator" value="<?php  echo $response_data->account_id; ?>">
    <input type="hidden" name="user_id" value="<?php  echo $records->account_id; ?>" >
    <input type="hidden" name="name" value="<?php  echo ucwords($records->fullname); ?>">
    <input type="hidden" name="task_title" value="<?php  echo ucwords($response_data->task_title); ?>">
    <input type="hidden" name="task_id" value="<?php  echo $_GET['task_id']; ?>" >

    
  
   
    <button type="submit" class="btn btn-success cus-btn">Chat</button>

</form>
</div>
<?php } ?>


<?php
    $check5  = mysqli_query($con,"SELECT * FROM task_award WHERE task_creator='$cookie_id' AND task_id='$task_id'");
    $count5  = mysqli_num_rows($check5);
      if($count5 =='0' && $count2=='1'){
?>
<div class="col-3 mx-0 px-0">
<form method="post" action="controller/api/award.php">
    <!--<input type="hidden" name="task_creator" value="<?php  echo ucwords($response_data->account_id); ?> " >-->
    <input type="hidden" name="task_receiver" value="<?php  echo ucwords($records->account_id); ?>" >
    <input type="hidden" name="task_id" value="<?php  echo ucwords($records->task_id); ?>" >
    <input type="hidden" name="task_currency" value="<?php  echo ucwords($response_data->task_currency); ?>" >
    <input type="hidden" name="task_budget" value="<?php  echo ucwords($records->budget); ?>" >
    <input type="hidden" name="name" value="<?php  echo ucwords($records->fullname); ?>" >

     
    <button type="submit" class="btn btn-success cus-btn" style="background:#07c852;">Award</button>


</form>
</div>

<div class="col-3 mx-0 px-0">
 <a href="controller/api/decline_task.php?id=<?php echo $records->id;?>" class="btn cus-btn text-white" style="background:#ff0000;">Decline</a>
<?php } ?>
</div>

</div><!-----row--->



</div>
</div>
</div>
<!------>

<?php }
?>


</div>  <!-----page----->

<center>
    
    <?php 
   
    $check = mysqli_query($con,"Select * FROM task_create WHERE task_id='$task_id' AND account_id='$cookie_id'");
    $count = mysqli_num_rows($check);
    
    $check1 = mysqli_query($con,"Select * FROM task_apply WHERE task_id='$task_id' AND account_id='$cookie_id'");
    $count1 = mysqli_num_rows($check1);
   
    $check2 = mysqli_query($con,"Select * FROM task_apply WHERE task_id='$task_id' AND status='1'");
    $count2 = mysqli_num_rows($check2);
    
    
    
    if($count !='1' && $count1 != '1' && $count2 =='0'){ 
    ?>

     <!--  <button id="myBtn" type="button" class="action-button">
         add proposal</button> -->

     <a href="add-proposal.php?task_id=<?php echo $_GET['task_id'];?>"> <button id="" type="button" class="action-button">
    Add proposal</button> </a>

  <?php } ?>

</center>

<!-- The pop -->
<div id="mypop" class="pop">

  <!-- pop content -->
  <div class="pop-content">
    <span class="close">&times;</span>
     <div class="alert alert-danger errpost" role="alert" style="display: none;"></div>
          <div class="alert alert-success succpost" role="alert" style="display: none;"></div>
          
    <form id="myform" action="controller/api/task_apply.php"  method="POST"> 

<ul class="fotm-list">


<li class="item-content item-input">
<div class="item-media">

</div>
<div class="item-inner">
<div class="item-input-wrap">
<textarea name="task_descp" class="w-100 task_descp" rows="3" placeholder="Proposal Desc."></textarea>
</div>
</div>
</li>

<li class="item-content item-input">
<div class="item-media">
<i class="icon demo-list-icon"></i>
</div>
<div class="item-inner">
<div class="item-input-wrap">
<input type="number" name="task_budget" placeholder="proposal amount" class="w-100 task_budget">
<span class="input-clear-button"></span>
</div>
</div>
</li>


</ul>

<input type="hidden" name="task_id" class="task_id" value="<?php echo $_GET['task_id'];?>">

<input type="hidden" name="app" class="app" value="no">

<button type="submit" class="reg-btn col button button-sm button-round button-fill mt-5 task_apply"><!-- <img class="img-fluid custom-with" src="img/send.png">  -->Submit</button>

</form>
  </div>

</div>
 
<!-- The pop -->



<div style="height:130px"></div>  

<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include----->

<script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
<script>
// Get the pop
var pop = document.getElementById("mypop");

// Get the button that opens the pop
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the pop
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the pop 
btn.onclick = function() {
  pop.style.display = "block";
}

// When the user clicks on <span> (x), close the pop
span.onclick = function() {
  pop.style.display = "none";
}

// When the user clicks anywhere outside of the pop, close it
window.onclick = function(event) {
  if (event.target == pop) {
    pop.style.display = "none";
  }
}
</script>


</body>
</html>