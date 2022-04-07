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
 padding:5px;
}

.icon-bx {
    background: #0090b5;
    padding: 5px;
    height: 70px;
    width: 70px;
    border-radius: 50px;
    margin: 0 auto;
}

.box-offer {
    width: 40%;
    margin: 0 auto;
    position:relative;
}

span.ic {
    position: absolute;
    left: -30px;
    font-size: 28px;
    font-weight: 500;
    border: 2px solid #000;
    padding: 1px 9px;
}
.b {
    border: 2px solid #000;
    padding: 22px;
    border-radius: 0px;
    margin-left: 5px;
}

.bdrs {
    border: 1px solid #b3b3b3;
    padding: 5px;
    border-radius: 4px;
}

.action-button {
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

.form-control:focus{
  border: 2px solid #000;
  box-shadow: none;
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Make an Offer </h6></span></div>



</div>
</div>

<!---->
<form method="post" action="controller/api/task_apply.php">

<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:10px"></div>
  
<div class="container">
<div class="col-12 pl-2 mt-5 pb-4 text-center">
  <h2>Make an Offer</h2>
</div>

<?php if(isset($_GET['already'])){ ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Already Applied!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>


<div class="col-12 mb-3">

        
    <div class="box-offer">
     <span class="ic">£</span> <input type="number" class="form-control b task_budget" name="task_budget" placeholder="Amount" min="1" required="">
    </div> 

     <input type="hidden" name="app" class="app" value="no">

     <input type="hidden" name="task_id" class="task_id" value="<?php echo $_GET['task_id'];?>">
 

  </div><!---->

  <div class="col-12 mb-3 text-center">
  <p>You'll receive <b class="tamount">£0</b> (Betasker fee of <b class="per">£0</b>) payable online if your offer is accepted</p>
  </div>

  <div class="col-12 mb-3 mt-4">
    <div class="row bdrs">
      <div class="col-2 text-center"><i class="fa fa-lightbulb-o" style="font-size:35px;"></i><br><strong>Tip</strong></div>
      <div class="col-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</div>
    </div>  
  </div>  

<div class="col-12 mb-3 mt-4">
  <h6>Why are you the best person for this task?</h6>

</div>

<div class="col-12 mb-3 mt-4 bdrs px-1 py-2">
  <textarea name="task_descp" class="form-control" placeholder="Description..." required=""></textarea>

</div>


<div class="col-12 mb-3 mt-4 text-center">
<button type="submit" name="submit" class="action-button">Continue</button>
</div>

        

</div><!---row--->
</div><!--container-->
 </form>


</div>
<div style="height:110px"></div>

<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include-----> 
</div>
</div><!----page-content---> 
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $(".task_budget").keyup(function(){
    var amount = $(".task_budget").val();

    var per    = (amount * 10)/100  ;
    var total  = (amount - per)  ;

    $(".tamount").html("£"+total);
    $(".per").html("£"+per);
  });
  
});
</script>


</body>
</html>