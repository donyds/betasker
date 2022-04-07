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

<style type="text/css">

.ft-c{
          font-size: 16px;
    font-weight: 500;
    line-height: 30px;
    color: #494949;
}
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

.custom-b{
      background: #149388;
    font-size: 20px;
    font-weight: 600;
    min-height: 45px;
    padding-top: 5px;
}
#name, #email, #number, #pwd {
    height: 50px;
}

.cst {
    width: 50%;
    border-radius: 20px;
}
</style>
</head>


<body class="bg-set" style="background:#fdfeff">
<div class = "views">
<?php
      $aid      = $_GET['aid'];

    $check2 = mysqli_query($con,"Select * FROM task_award WHERE task_uniqid='$aid'");
    //$count2 = mysqli_num_rows($check2);
    $get = mysqli_fetch_array($check2);
    $get_budget = $get['task_currency'].$get['task_budget'];
    
    
?>

<!---->
<div class="page-content pt-3 pl-3">
<div class="" style="margin-top:40px"></div>
<div class="row">
<div class="container mb-2">

<div class="box text-center mb-5">
<h1 class="text-center">Thank You</h1>
<p class="ft-c">You have Successfully Award This Project To <?php echo $_GET['name']; ?></p>
<p class="ft-c">Budget : <?php echo $get_budget; ?> </p>
<img class="img-fluid mt-3" src="img/Successfully.jpg">
<a href="browse-tasks.php" class="btn btn-primary text-white cst mt-3">Home</a>
<!--<p class="pt-4" style="font-weight:400">Task a Moment to set up Your profile and let your potential Betasker Know who you-->
<!--are. Then get posting tasks!</p>-->
</div>


</div>
</div><!----page-content---> 
</div>




</body>
</html>