<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width = device-width, initial-scale = 1,    maximum-scale = 1, minimum-scale = 1, user-scalable = no, minimal-ui" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="theme-color" content="#05b2de">
<title>Betasker</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.colors.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
.navbar {
background: #0090b5;
}
/*	.navbar-inner.sliding {
background: #0090b5;
}
.input img {
filter: brightness(0.2);
}

.item-media {
padding-right: 0px !important;
}
.list-block .item-media+.item-inner {
margin-left: 0px !important;
}

.item-media .fa {
font-size: 28px;
color: #0090b5;
}

.reg-btn{
font-size:26px;
}

*/

/* ====================  */

.btn-subs{
width: 45%;
background: #05a0c7;
font-weight: bold;
color: white;
border: 0 none;
border-radius: 25px;
cursor: pointer;
padding: 10px 5px;
margin: 10px 5px;
}

</style>
</head>
<body class="otp-bg" style="background-image:none;">
<div class="views">
<div class="navbar">
<div class="navbar-bg"></div>
<div class="navbar-inner sliding">
<div class="left"> <a href="#" onclick="goBack()" class="link back"><i class="icon icon-back"></i>                </a> </div>
<div class="title"><span class="subtitle"><h6 class="pt-2">Add proposal</h6></span></div>
<div class="right"> <a class="link"></a> </div>
</div>
</div>
<!-- registration form start -->
<div class="page-content pt-5">


<form id="myform" action="controller/api/task_apply.php"  method="POST" autocomplete="off">
<div class="container">
<div class="row pt-5">


<div class="form-group col-12">
<label for="">Proposal Desc.</label>
<textarea class="form-control" rows="5" id="" name="task_descp" autocomplete="off" placeholder="Proposal Desc" required=""></textarea>

</div>


<div class="form-group col-12">
<label for="">proposal amount</label>
<input type="number" class="form-control" id="" autocomplete="off" placeholder="Proposal Amount" name="task_budget" required="">
</div>

<div class="form-group col-12">
    
<input type="hidden" name="app" class="app" value="no">

<input type="hidden" name="task_id" class="task_id" value="<?php echo $_GET['task_id'];?>">

<button type="submit" class="btn btn-subs">Submit</button>
</div> 	

</div> 
</div>
</form>		



</div>
</div>
</form>

<div style="height:130px"></div>  

<!----footer include----->
<?php include 'include/footer2.php';?>
<!---footer include----->




<!--wrong crentials alert -->
<script>
function goBack() {
window.history.back();
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/js/framework7.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.min.css"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
</script>




</body>
</html>