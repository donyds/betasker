<?php include("controller/cookie.php");?>
<?php
$uid = $_COOKIE['id'];
$ref = 'https://sharukh.dbtechserver.online/betasker/signup.php?ref='.$uid;

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
font-weight: 600;
}

i.fa.fa-angle-right {
    font-size: 30px !important;
    padding-top: 15px !important;
    padding-left: 20px;
}
.card{
  margin:0px 0px 7px 0px;
    border-bottom: none;
      border-top:none;
    border-radius: 0px;
    border-bottom: 1px solid #ededed !important;
    box-shadow:none;
  }

.list{
  padding:0px !important;
}

.media-body {
    padding-left: 0px;
    padding-top: 15px;
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ffc107;
    outline: 0;
    box-shadow: none;
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Referal</h6></span></div>

</div>
</div>

<!-- registration form start -->
<div class = "page-content pt-5 pl-3">

  <div class="" style="margin-top:40px"></div>

<div class="list media-list sortable">


 <!------------>

<div class="card-content card-content-padding set-ft">

 <div class="row mx-2">
 <div class="col-12">
 <img class="img-fluid" src="img/referal-friend.png">
</div> 

<div class="col-12 text-center">
  <h4 class="pt-3">Earn More By Reffering</h4>
  <p class="pb-3 pt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
</div>

<div class="col-12">

    <form method="">
      <div class="input-group mb-2">
             <input type="text" class="form-control" id="myInput" value="<?php echo $ref; ?>" placeholder="">
             <div class="input-group-append">
              <button class="btn btn-warning copy" onclick="myFunction()" type="button" tooltip="Copied!">Copy Code</button>
           </div>
         </div>
        </form>
   

</div>  

<div class="col-12 mt-3">

        <a href="whatsapp://send?text=The text to share!" data-action="share/whatsapp/share" class="btn btn-success btn-block mt-1 mb-2 text-white"><i class="fa fa-whatsapp"></i> Share On whatsapp</a>
</div>
      </div> 

 </div> 

</div>
<!------------>

</div></div>
</div>  <!-----page----->


<div style="height:70px"></div>  


<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include----->

<script type="text/javascript">
  function myAlertTop(){
  $(".myAlert-top").show();
  setTimeout(function(){
    $(".myAlert-top").hide(); 
  }, 2000);
}

function myAlertBottom(){
  $(".myAlert-bottom").show();
  setTimeout(function(){
    $(".myAlert-bottom").hide(); 
  }, 2000);
}

</script>

  <script>
  function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  //alert("Copied the text: " + copyText.value);
  }
  </script>
  <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>