<?php include'controller/cookie.php'?>

<?php
$account_id = $_COOKIE['id'];

$api_url = 'https://sharukh.dbtechserver.online/betasker/controller/api/getuData.php?id='.$account_id;
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);
$udata = $response_data->result;
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
font-weight:400;
font-size:14px;
}

i.fa.fa-angle-right {
    font-size: 30px !important;
    padding-top: 15px !important;
    padding-left: 20px;
}
.card{
  margin:0px;
  border:none;
  border-radius: 0px;
  padding:0px;
}

.bg-i {
    background-size: contain;
    position: relative;
}

.profileimg {
    position: relative;
}

img.center-img {
    height: 100px;
    width: 100px;
    position: relative;
    top: 100px;
    border-radius: 50%;
    border: 2px solid #05a0c7;
}


.background-change {
   position: absolute;
    right: 20px;
    top: 20px;
}


.pro-change {
   
    position: absolute;
    bottom: -66px;
    left: 80px;
    z-index: 999;
}

.fa-camera{
  font-size:18px;
   color: #fff;
}

.list{
  padding:0px !important;
}

.switch-field {
  font-family: "Lucida Grande", Tahoma, Verdana, sans-serif;
  padding-top: 20px;
  overflow: hidden;
}

.switch-title {
  margin-bottom: 6px;
}

.switch-field input {
    position: absolute !important;
    clip: rect(0, 0, 0, 0);
    height: 1px;
    width: 1px;
    border: 0;
    overflow: hidden;
}

.switch-field label {
  float: left;
}

.switch-field label {
  display: inline-block;
  width: auto;
  background-color: #e4e4e4;
  color: rgba(0, 0, 0, 0.6);
  font-size: 16px;
  font-weight: normal;
  text-align: center;
  text-shadow: none;
  padding: 10px 15px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
  -webkit-transition: all 0.1s ease-in-out;
  -moz-transition:    all 0.1s ease-in-out;
  -ms-transition:     all 0.1s ease-in-out;
  -o-transition:      all 0.1s ease-in-out;
  transition:         all 0.1s ease-in-out;
}

.switch-field label:hover {
  cursor: pointer;
}

.switch-field input:checked + label {
  background-color: #05a0c7;
  -webkit-box-shadow: none;
  box-shadow: none;
  color:#fff;
}

.switch-field label:first-of-type {
  border-radius: 20px 0 0 20px;
}

.switch-field label:last-of-type {
  border-radius: 0px 20px 20px 0px;
}

.bor-radius{
  border-radius:20px;
}

h6{
      font-size: 14px;
    font-weight: 500;
}

.h3, h3 {
    font-size: 22px;
}
.page-content {
    overflow: unset !important;
 
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6 class="pro_img"><?php echo ucwords($udata->fullname);?></h6></span></div>
<!-- <div class="right"> <span class="pr-3"><i class="fa fa-pencil"></i> </span> <span class="pr-3"><i class="fa fa-share-alt"></i></span>  </div> -->
</div>
</div>

<!-- registration form start -->
<div class = "page-content pt-5 pl-3">
<!-- <div class="" style="margin-top:40px"></div> -->
<div class="list media-list sortable">
   <form method="post" action="controller/api/profile.php" id="uploadImage" class="mx-auto text-center" enctype="multipart/form-data">
 
 <!---->
<div class="card text-center">
<div class="card-content card-content-padding bg-i" style="background-image:url(https://coastalvacationschristianteam.files.wordpress.com/2014/06/ocean-chair-banner.jpg);min-height: 170px;background-size: cover;">
<!--   <i class="fa fa-camera background-change"></i> -->
<div class="profileimg">

  <span style="position: relative;">
   <!-- <i class="fa fa-camera pro-change"></i> -->
  <img class="center-img" src="img/<?php echo $udata->img;?>" id="image_from_url">
</span>
</div>
</div>
</div>
 <!---->
<div class="row text-center mt-5">
 <div class="col-12 text-center"> <h2><strong class="pro_img"><?php echo ucwords($udata->fullname);?></strong></h2>
   <!--<p>Address here</p>-->
 </div>
 </div>

 <div class="row text-left">
  <div class="alert alert-danger signupalert" role="alert" style="display: none;"></div>
  <div class="alert alert-success success" role="alert" style="display: none;"></div>

<div class="col-11 mx-auto text-center">
<div class="switch-field">
     <input type="radio" id="switch_3_left" name="role" value="Task Provider" class="role" <?php echo (($udata->role)== 'Task Provider') ?  "checked" : "" ;  ?>/>
      <label for="switch_3_left">Task Provider</label>
      <input type="radio" id="switch_3_center" name="role" value="Freelancer" class="role" <?php echo (($udata->role)== 'Freelancer') ?  "checked" : "" ;  ?>/>
      <label for="switch_3_center">Freelancer</label>
      <input type="radio" id="switch_3_right" name="role" value="Both" class="role" <?php echo (($udata->role)== 'Both') ?  "checked" : "" ;  ?>/>
      <label for="switch_3_right">Both</label>
    </div>

  <!--<p style="font-size:16px">Looking like you haven't received any reviews just yet.</p> -->
</div><!---->



<div class="col-12 pt-2 pb-2">

   <div class="form-group">
    <label for="exampleInputEmail1">Fullname</label>
    <input type="text" class="form-control fname" name="fname" value="<?php echo $udata->fullname;?>" aria-describedby="emailHelp" placeholder="Enter Fullname">
   </div>

</div>

<div class="col-12 pt-2 pb-2">

   <div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input type="text" class="form-control email" name="email" value="<?php echo $udata->email_address;?>" aria-describedby="emailHelp" placeholder="Enter E-mail">
   </div>

</div>

<div class="col-12 pt-2 pb-2">

   <div class="form-group">
    <label for="exampleInputEmail1">Mobile</label>
    <input type="text" class="form-control mobile" name="mobile" value="<?php echo $udata->mobile_no;?>" aria-describedby="emailHelp" placeholder="Enter Mobile No.">
   </div>

</div>


<div class="col-12 pt-2 pb-2">

   <div class="form-group">
    <label for="exampleInputEmail1">Profile</label>
    <input type="file" class="form-control img" name="photo" id="" aria-describedby="emailHelp">
   </div>

</div>

<div class="col-12 pt-2 pb-2">

   <div class="form-group">
    <label for="exampleInputEmail1">About</label>
    <textarea class="form-control about" name="about" placeholder="Enter About"><?php echo $udata->about;?></textarea>
    
   </div>

</div>
  


</div>

<div class="col-10 text-center pt-2 pb-2 mx-auto">
<button class="btn btn-outline-info btn-block bor-radius"  style="font-size: 20px">Update </button>
</div>  
</form>
 </div> 



 </div>  <!-----page----->


<div style="height:350px"></div>  
<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include----->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  
     <script>
$('#uploadImage').submit(function(e){
 e.preventDefault();
 
 //Creating an ajax method
 $.ajax({
 
 url: $(this).attr('action'),
 
 //For file upload we use post request
 type: "POST",
 
 //Creating data from form 
 data: new FormData(this),
 
 //Setting these to false because we are sending a multipart request
 contentType: false,
 cache: false,
 processData: false,
 success: function(data){
 if (data.status=='success') {
           
            ///$("#myform")[0].reset();

            $('.success').show();   

            $(".success").html("<p>"+data.response+"</p>");


            }

            else{

            $('.signupalert').show();   

            $(".signupalert").html("<p>"+data.response+"</p>");

            }
 },

 });
});
     </script>

</body>
</html>   