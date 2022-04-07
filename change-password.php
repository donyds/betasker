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
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.min.css" />

<link rel = "stylesheet"href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.colors.min.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style type="text/css">
a {
 color: #383838 !important
}

p{
  font-weight:400;
  font-size: 13px;
  margin-bottom: 4px;
}


img.foo-ico {
    width: 30px;
    height: auto;
    padding-bottom: 15px;
}

.box-inner
{
background: #fff;
background-repeat: no-repeat;
background-position:top center;
border: 1px dashed #dddddd;
padding: 0px;
-webkit-transition: all ease .4s;
transition: all ease .4s;
cursor: pointer;
border-radius: 5px;
margin-bottom: 10px;
}
.box-inner input[type="file"] {
    position: absolute;
    height: 80px;
    left: 15px;
    top: 0px;
    max-width: 100px;
}
.box-inner p
{
background: #e2d62d;
color: #fff;
border-radius: 5px;
padding: 2px 10px;
}
.box-inner span
{
margin: 0;
font-size: 14px;
font-weight: 500;
color: #999;
display: inline-block;
padding: 5px 0px;
}
/*----------*/
.bootstrap-tagsinput .tag {
    margin-right: 2px !important;
    color: white !important;
    background: #05a0c7 !important;
    padding: 3px !important;
    margin-bottom: 4px !important;
    line-height: 30px !important;
}

.bootstrap-tagsinput {
    width: 100%;
}

@media all and (max-width:768px){
.bootstrap-tagsinput .tag {
    margin-right: 2px !important;
    color: white !important;
    background: #05a0c7 !important;
    padding: 3px !important;
    margin-bottom: 4px !important;
    line-height: 30px !important;
}
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
<div class="title pt-2 pl-2"><span class="subtitle"><h6>Change Password</h6></span></div>




</div>
</div>

<!---->
<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:40px"></div>
 
 <div class="container">
 
<div class="row">

  <div class="col-12">
    
    <?php if(isset($_GET['match'])) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>New Password and  Confirm Password is does not match!</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <?php } ?>

    <?php if(isset($_GET['wr'])) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Current Password is Invalid!</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <?php } ?>

     <?php if(isset($_GET['succ'])) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Successfully Password Updated!</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <?php } ?>

    <form method="post" action="controller/api/update_psd.php">
       
      <div class="form-group">
        <label class="text-uppercase">Current password</label>
         <div class="input-group">
          <input type="password" class="form-control" name="cpass" id="" required="">
        </div>
      </div>

      <div class="form-group">
        <label class="text-uppercase">New password</label>
         <div class="input-group">
          <input type="password" class="form-control" name="npass" id="" required="">
        </div>
      </div>

      <div class="form-group">
        <label class="text-uppercase">Confirm password</label>
         <div class="input-group">
          <input type="password" class="form-control" name="mpass" id="" required="">
        </div>
      </div>

      <div class="form-group">
        <div class="input-group">
      <input type="submit" name="submit" class="col-4 button button-large button-round button-fill text-white btn-secondary text-capitalize" style="font-size: 20px;background:#91d18b;height: 40px;border-radius:30px;" value="Submit">
      </div>
      </div>


    </form>
     

 </div>
</div>  <!---->  

   

    


</div> 

</div>


</div>


<!--container-->
   
  </div>
</div>

<div style="height:110px"></div>

<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include-----> 


</div><!----page-content---> 
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>





</body>
</html>