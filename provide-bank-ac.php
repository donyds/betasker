<?php include("controller/cookie.php");?>

<?php

include'controller/config.php';
$task_id = $_GET['task_id'];
$cookie_id = $_COOKIE['id'];
$check   = mysqli_query($con,"SELECT * FROM bank_details WHERE account_id ='$cookie_id'");
$already = mysqli_fetch_array($check);  

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
.post-b {
    position: absolute;
    bottom: 0px;
}

.footer {
    opacity: 0;
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Add bank account</h6></span></div>

<div class="right">


</div>


</div>
</div>


<!---->
<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:40px"></div>
 


    <div class="container pl-0 pr-0">

  <form id="" method="post" action="controller/api/bank_details.php" autocomplete="off">
   <div class="row mt-3 mx-0 px-0">

 

<div class="col-12 mt-2 mb-2">

    <div class="form-group">
        <label>Account name</label>
        <input type="text" name="acc_name" value="<?php echo $already['acc_name']?>" class="form-control w-100" id="" placeholder=""  required="">
    </div>
 </div>   


<div class="col-4 mt-2 mb-5">
    <div class="form-group">
         <label>BSB</label>
         <input type="number" name="bsb" value="<?php echo $already['bsb']?>" class="form-control w-100 number" id="bsb" placeholder="" required="">
     </div>

</div>

<div class="col-8 mt-2 mb-5">
    <div class="form-group">
         <label>Account number</label>
         <input type="number" name="acc_no" value="<?php echo $already['acc_no']?>" class="form-control w-100 number" id="bsb" placeholder="" required="">
     </div>

</div>

<div class="col-12 mt-2 mb-2 text-center mx-auto post-b">
<input type="hidden" name="task_id" value="<?php echo $_GET['task_id'];?>">
<button type="submit" name="submit" class="col button button-large button-round button-fill w-75 mx-auto text-white btn-success text-capitalize submitsignup" style="font-size: 20px;background:#91d18b;min-height:40px;font-weight:600;border-radius: 20px;
    padding: 5px 100px;">Add </button>

</div>

      </div>

      </form>
    

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



</body>
</html>

