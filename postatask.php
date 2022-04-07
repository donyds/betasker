<?php include("controller/cookie.php");?>
<?php 

$getcat   = file_get_contents('https://sharukh.dbtechserver.online/betasker/controller/api/get_allcat.php');
$category = json_decode($getcat, true); 

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

.reg-btn {
    background: #0090b5 !important;
    border-radius: 50px;
    font-size: 25px;
    min-height: 45px;
    max-width: 45%;
    margin: 0 auto;
    text-transform: capitalize;
    font-family: 'Ubuntu', sans-serif;
}

a.selects {
    color: #000;
    font-size: 13px;
    text-align: center;
}

img.icon-bx-bg {
 padding: 15px 5px;
}

img.icon-bx-bg.img-fluid {
    max-width: 75%;
}

.icon-bx {
    background: #0090b5;
    padding: 5px;
    height: 70px;
    width: 70px;
    border-radius: 50px;
    margin: 0 auto;
}

.navbar a.link, .subnavbar a.link, .toolbar a.link{
 color:#807e7e !important;
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Post a task </h6></span></div>



</div>
</div>


<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:10px"></div>
  
<div class="container">
<div class="row pl-2 mt-5">

<?php 

$task_uniqid = uniqid();

foreach($category['records'] as $cat){

?>

<div class="col-4 text-center mb-3">
	<a class="selects" href="tell-us-2.php?cat=<?php echo $cat['cat'];?>&task_id=<?php echo $task_uniqid; ?>">
<div class="icon-bx">
 <img class="icon-bx-bg img-fluid" src="admin/images/<?php echo $cat['cat_img'];?>">
</div>
<span class="name-title"><?php echo $cat['cat'];?></span>
</a>	
</div>
<?php 
}
?>

<!-- <div class="col-4 text-center mb-3">
	<a class="selects" href="tell-us-2.php">
<div class="icon-bx">
 <img class="icon-bx-bg img-fluid" src="img/delivery-truck.png">
</div>
<span class="name-title">Full house Removals</span>
</a>	
</div>

<div class="col-4 text-center mb-3">
	<a class="selects" href="tell-us-2.php">
<div class="icon-bx">
 <img class="icon-bx-bg img-fluid" src="img/work-from-home.png">
</div>
<span class="name-title">Few items Removals</span>
</a>	
</div>

<div class="col-4 text-center mb-3">
	<a class="selects" href="#">
<div class="icon-bx">
 <img class="icon-bx-bg img-fluid" src="img/driller.png">
</div>
<span class="name-title">Assembly</span>
</a>	
</div>

<div class="col-4 text-center mb-3">
	<a class="selects" href="tell-us-2.php">
<div class="icon-bx">
 <img class="icon-bx-bg img-fluid" src="img/boxes.png">
</div>
<span class="name-title">Delivery</span>
</a>	
</div>

<div class="col-4 text-center mb-3">
	<a class="selects" href="tell-us-2.php">
<div class="icon-bx">
 <img class="icon-bx-bg img-fluid" src="img/gardening.png">
</div>
<span class="name-title">Gardening</span>
</a>	
</div>

<div class="col-4 text-center mb-3">
	<a class="selects" href="tell-us-2.php">
<div class="icon-bx">
 <img class="icon-bx-bg img-fluid" src="img/portfolio.png">
</div>
<span class="name-title">Bussiness & admin</span>
</a>	
</div>

<div class="col-4 text-center mb-3">
	<a class="selects" href="tell-us-2.php">
<div class="icon-bx">
 <img class="icon-bx-bg img-fluid" src="img/party.png">
</div>
<span class="name-title">Events & Photography</span>
</a>	
</div>

<div class="col-4 text-center mb-3">
	<a class="selects" href="tell-us-2.php">
<div class="icon-bx">
 <img class="icon-bx-bg img-fluid" src="img/brush.png">
</div>
<span class="name-title">Handyman</span>
</a>	
</div> -->

<!-- <div class="col-4 text-center mb-3">
	<a class="selects" href="tell-us-2.php">
<div class="icon-bx">
 <img class="icon-bx-bg img-fluid" src="img/infinity.png">
</div>
<span class="name-title">Everything else</span>
</a>	
</div> -->


</div><!---row--->
</div><!--container-->



<div style="height:110px"></div>

<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include-----> 
</div>
</div><!----page-content---> 
</div>


</body>
</html>