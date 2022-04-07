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

.box-inner
{
background: #fff;
background-repeat: no-repeat;
background-position:top center;
border: 1px dashed #dddddd;
padding: 20px;
-webkit-transition: all ease .4s;
transition: all ease .4s;
cursor: pointer;
border-radius: 5px;
margin-bottom: 10px;
}
.box-inner input[type="file"] {
    position: absolute;
    height: 100px;
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Upload img  </h6></span></div>




</div>
</div>

<!---->
<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:7px"></div>
   
  <div class="container">
  
  <form method="POST" action="controller/api/add_task_img.php" enctype="multipart/form-data">

  <div class="row" style="margin-top:100px;">
     
    
    <div class="col-6">
    <div class="box-inner">
    <input type="file"  id="img1" name="img[]" accept="image/*" style="opacity: 0" onchange="loadFile1i(event)" required="">
    <center><img id="output1i" style="width: 100px; height: 100px; display: none;"></center>
    <center><span id="att11i" style="color: #626262;">
    <img class="img-fluid" src="https://sharukh.dbtechserver.online/betasker/img/browse.png">
    </span></center>
    <center><span id="att1s1i" onclick="hideatt1i()" style="color: red; display: none;">Remove File</span></center>
    </div>
    </div>

    <div class="col-6">
    <div class="box-inner">
    <input type="file" id="img2" name="img[]" accept="image/*" style="opacity: 0" onchange="loadFile1j(event)">
    <center><img id="output1j" style="width: 100px; height: 100px; display: none;"></center>
    <center><span id="att11j" style="color: #626262;">
    <img class="img-fluid" src="https://sharukh.dbtechserver.online/betasker/img/browse.png">
    </span></center>
    <center><span id="att1s1j" onclick="hideatt1j()" style="color: red; display: none;">Remove File</span></center>
    </div>
    </div>


     <div class="col-6">
    <div class="box-inner">
    <input type="file" id="img3" name="img[]" accept="image/*" style="opacity: 0" onchange="loadFile1k(event)">
    <center><img id="output1k" style="width: 100px; height: 100px; display: none;"></center>
    <center><span id="att11k" style="color: #626262;">
    <img class="img-fluid" src="https://sharukh.dbtechserver.online/betasker/img/browse.png">
    </span></center>
    <center><span id="att1s1k" onclick="hideatt1k()" style="color: red; display: none;">Remove File</span></center>
    </div>
    </div>

    <div class="col-6">
    <div class="box-inner">
    <input type="file" id="img4" name="img[]" accept="image/*" style="opacity: 0" onchange="loadFile1l(event)">
    <center><img id="output1l" style="width: 100px; height: 100px; display: none;"></center>
    <center><span id="att11l" style="color: #626262;">
    <img class="img-fluid" src="https://sharukh.dbtechserver.online/betasker/img/browse.png">
    </span></center>
    <center><span id="att1s1l" onclick="hideatt1l()" style="color: red; display: none;">Remove File</span></center>
    </div>
    </div>
    
    <div class="col-6 mx-auto">
    <input type="hidden" name="cat" value="<?php echo $_GET['cat'];?>">
    <input type="hidden" name="task_id" value="<?php echo $_GET['task_id'];?>">
    <button type="submit" name="submit" class="btn btn-info btn-block">Upload</button>
    </div>
    

  </div>
  </form>

 </div>
  </div>

</div>
<div style="height:110px"></div>
</div>
<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include-----> 

</div><!----page-content---> 
</div>


<script>
document.getElementById("output1").style.display = "none";
document.getElementById("att1s1").style.display = "none";

var loadFile1 = function(event) {
document.getElementById("att11").style.display = "none";
document.getElementById("att1s1").style.display = "block";
document.getElementById("output1").style.display = "block";
var output1 = document.getElementById('output1');
output1.src = URL.createObjectURL(event.target.files[0]);
document.getElementById("hideset1").style.display = "none";
};
function hideatt1() {
document.getElementById("output1").style.display = "none";
document.getElementById("att11").style.display = "block";
document.getElementById("att1s1").style.display = "none";
document.getElementById("img3").value = null;


}
</script>
<script>
document.getElementById("output1i").style.display = "none";
document.getElementById("att1s1i").style.display = "none";

var loadFile1i = function(event) {
document.getElementById("att11i").style.display = "none";
document.getElementById("att1s1i").style.display = "block";
document.getElementById("output1i").style.display = "block";
var output1i = document.getElementById('output1i');
output1i.src = URL.createObjectURL(event.target.files[0]);
document.getElementById("hideset1i").style.display = "none";
};
function hideatt1i() {
document.getElementById("output1i").style.display = "none";
document.getElementById("att11i").style.display = "block";
document.getElementById("att1s1i").style.display = "none";
document.getElementById("img1").value = null;


}
</script>
<script>
document.getElementById("output1j").style.display = "none";
document.getElementById("att1s1j").style.display = "none";

var loadFile1j = function(event) {
document.getElementById("att11j").style.display = "none";
document.getElementById("att1s1j").style.display = "block";
document.getElementById("output1j").style.display = "block";
var output1j = document.getElementById('output1j');
output1j.src = URL.createObjectURL(event.target.files[0]);
document.getElementById("hideset1j").style.display = "none";
};
function hideatt1j() {
document.getElementById("output1j").style.display = "none";
document.getElementById("att11j").style.display = "block";
document.getElementById("att1s1j").style.display = "none";
document.getElementById("img2").value = null;


}
</script>

<script>
document.getElementById("output1k").style.display = "none";
document.getElementById("att1s1k").style.display = "none";

var loadFile1k = function(event) {
document.getElementById("att11k").style.display = "none";
document.getElementById("att1s1k").style.display = "block";
document.getElementById("output1k").style.display = "block";
var output1k = document.getElementById('output1k');
output1k.src = URL.createObjectURL(event.target.files[0]);
document.getElementById("hideset1k").style.display = "none";
};
function hideatt1k() {
document.getElementById("output1k").style.display = "none";
document.getElementById("att11k").style.display = "block";
document.getElementById("att1s1k").style.display = "none";
document.getElementById("img3").value = null;


}
</script>

<script>
document.getElementById("output1l").style.display = "none";
document.getElementById("att1s1l").style.display = "none";

var loadFile1l = function(event) {
document.getElementById("att11l").style.display = "none";
document.getElementById("att1s1l").style.display = "block";
document.getElementById("output1l").style.display = "block";
var output1l = document.getElementById('output1l');
output1l.src = URL.createObjectURL(event.target.files[0]);
document.getElementById("hideset1l").style.display = "none";
};
function hideatt1l() {
document.getElementById("output1l").style.display = "none";
document.getElementById("att11l").style.display = "block";
document.getElementById("att1s1l").style.display = "none";
document.getElementById("img4").value = null;


}
</script>

</body>
</html>