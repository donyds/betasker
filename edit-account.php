<?php include("controller/cookie.php");?>
<?php 

$uid = $_COOKIE['id'];
$sql = mysqli_query($con,"SELECT * FROM `profile` WHERE account_id='$uid'");
$get = mysqli_fetch_array($sql);

$sql2  = mysqli_query($con,"SELECT * FROM `account` WHERE account_id='$uid'");
$get2  = mysqli_fetch_array($sql2);
$fullname = explode(" ", $get2['fullname']);
$fname = $fullname[0];
$lname = $fullname[1];


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

.pac-container{
z-index: 9990 !important;
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
<div class="title pt-2 pl-2"><span class="subtitle"><h6>Edit account</h6></span></div>




</div>
</div>

<!---->
<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:7px"></div>

<div class="container">

<div class="row">
<div class="col-12 mt-4 mb-2">
<strong>General information</strong>
</div><!---->



<div class="col-12">

<?php if(isset($_GET['succ'])){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Successfully Updated!</strong> 
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<?php } ?>

<form method="POST" action="controller/api/upd_profile.php" enctype="multipart/form-data" autocomplete="off">

<div class="form-group">
<label class="text-uppercase">First name</label>
<div class="input-group">
<input type="text" class="form-control" name="fname" value="<?php if($fullname !='0'){ echo $fname; }?>" placeholder="First name" required="">
</div>
</div>

<div class="form-group">
<label class="text-uppercase">last name</label>
<div class="input-group">
<input type="text" class="form-control" name="lname" value="<?php if($lname !='0'){ echo $lname; }?>" placeholder="last name" required="">
</div>
</div>

<div class="form-group">
<label class="text-uppercase">Suburb</label>
<div class="input-group">
<input type="text" class="form-control" id="location" name="suburb" value="<?php if($get['suburb'] !='0'){ echo $get['suburb']; }?>" onclick="mapaddressforcountry()" placeholder="Suburb" required="">
</div>
</div>

<div class="form-group">
<label class="text-uppercase">Tagline</label>
<div class="input-group">
<input type="text" class="form-control" name="tagline" value="<?php if($get['tagline'] !='0'){ echo $get['tagline']; }?>" placeholder="Tagline">
</div>
</div>

<div class="form-group">
<label class="text-uppercase">About me</label>
<div class="input-group">
<textarea class="form-control" name="about" rows="5" required=""><?php if($get['about'] !='0'){ echo $get['about']; }?></textarea>
</div>
</div>

<div class="form-group under-lines">
<label class="text-uppercase">Private infomation</label>
</div>

<div class="form-group">
<label class="text-uppercase">Email</label>
<div class="input-group">
<input type="email" class="form-control" name="email" value="<?php if($get2['email_address'] !='0'){ echo $get2['email_address']; }?>" readonly="">
</div>
</div>

<div class="form-group">
<label class="text-uppercase">Birth Date</label>
<div class="input-group">
<input type="date" class="form-control" name="dob" value="<?php if($get['dob'] !='0'){ echo $get['dob']; }?>" placeholder="Birth Date">
</div>
</div>

<div class="form-group under-lines">
<label class="text-uppercase">Additional infomation</label>
</div>

<div class="form-group">
<label class="text-uppercase">Abn</label>
<div class="input-group">
<input type="text" class="form-control" name="abn" value="<?php if($get['abn'] !='0'){ echo $get['abn']; }?>" placeholder="Abn">
</div>
</div>

<div class="form-group under-lines">
<label class="text-uppercase">Portfolio</label>
<p class="errvalid1" style="display:none;color:red;">File size must not be more than 2 MB</p>

<div class="row">

<div class="col-4">
<div class="box-inner">
<input type="file" id="img1" name="portfolio[]" accept="image/png,image/jpg,image/jpeg" style="opacity: 0" onchange="loadFile1i(event)">
<center><img id="output1i" style="width: 100px; height: 100px; display: none;"></center>
<center><span id="att11i" style="color: #626262;">
<img class="img-fluid" src="https://sharukh.dbtechserver.online/betasker/img/browse.png">
</span></center>
<center><span id="att1s1i" onclick="hideatt1i()" style="color: red; display: none;">Remove File</span></center>
</div>
</div>

<div class="col-4">
<div class="box-inner">
<input type="file" id="img2" name="portfolio[]" accept="image/png,image/jpg,image/jpeg" style="opacity: 0" onchange="loadFile1j(event)">
<center><img id="output1j" style="width: 100px; height: 100px; display: none;"></center>
<center><span id="att11j" style="color: #626262;">
<img class="img-fluid" src="https://sharukh.dbtechserver.online/betasker/img/browse.png">
</span></center>
<center><span id="att1s1j" onclick="hideatt1j()" style="color: red; display: none;">Remove File</span></center>
</div>
</div>


<div class="col-4">
<div class="box-inner">
<input type="file" id="img3" name="portfolio[]" accept="image/png,image/jpg,image/jpeg" style="opacity: 0" onchange="loadFile1k(event)">
<center><img id="output1k" style="width: 100px; height: 100px; display: none;"></center>
<center><span id="att11k" style="color: #626262;">
<img class="img-fluid" src="https://sharukh.dbtechserver.online/betasker/img/browse.png">
</span></center>
<center><span id="att1s1k" onclick="hideatt1k()" style="color: red; display: none;">Remove File</span></center>
</div>
</div>
</div>

</div><!---->

<div class="form-group under-lines">
<label class="text-uppercase">Skills</label>

<div class="form-check input-group">

<input type="radio" class="form-check-input skills" id="radio1" name="skills" value="Remotely" <?php echo ($get['skills']== 'Remotely') ?  "checked" : "" ;  ?>>Remotely
<label class="form-check-label" for="radio1"></label>
</div>

<div class="form-check input-group">
<input type="radio" class="form-check-input skills" id="radio2" name="skills" value="In person" <?php echo ($get['skills']== 'In person') ?  "checked" : "" ;  ?>>In person
<label class="form-check-label" for="radio2"></label>
</div>

</div>
<div class="form-group postal" style="display:none;">
<label class="text-uppercase">Postal Code</label>
<div class="input-group">
<input type="text" class="form-control" name="postal_code" value="<?php if($get['postal_code'] !='0'){ echo $get['postal_code']; }?>" placeholder="Postal Code">
</div>
</div>

<div class="form-group">
<label class="text-uppercase">Transpotation</label>
<div class="input-group">
<input type="text" id="#inputTag" class="form-control" name="transportation" value="<?php if($get['transportation'] !='0'){ echo $get['transportation']; }?>" data-role="tagsinput">
</div>
</div>

<div class="form-group">
<label class="text-uppercase">Languages</label>
<div class="input-group">
<input type="text" id="#inputTag2" class="form-control" name="language" value="<?php if($get['language'] !='0'){ echo $get['language']; }?>" data-role="tagsinput">
</div>
</div>

<div class="form-group">
<label class="text-uppercase">Education</label>
<div class="input-group">
<input type="text" id="#inputTag3" class="form-control" name="education" value="<?php if($get['education'] !='0'){ echo $get['education']; }?>" data-role="tagsinput">
</div>
</div>


<div class="form-group">
<label class="text-uppercase">Work</label>
<div class="input-group">
<input type="text" id="#inputTag4" class="form-control" name="work" value="<?php if($get['work'] !='0'){ echo $get['work']; }?>" data-role="tagsinput">
</div>
</div>

<div class="form-group">
<label class="text-uppercase">Specialites</label>
<div class="input-group">
<input type="text" id="#inputTag5" class="form-control" name="specialities" value="<?php if($get['specialities'] !='0'){ echo $get['specialities']; }?>" data-role="tagsinput">
</div>
</div>

<div class="form-group">

<div class="input-group">
<input type="submit" name="submit" class="col-4 button button-large button-round button-fill text-white btn-secondary text-capitalize subbtn" style="font-size: 20px;background:#91d18b;height: 40px;border-radius:30px;" value="Submit">
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
<script src="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
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


<script type="text/javascript">
$("#inputTag").tagsinput('items');
</script>
<script type="text/javascript">
$("#inputTag2").tagsinput('items');
</script>
<script type="text/javascript">
$("#inputTag3").tagsinput('items');
</script>
<script type="text/javascript">
$("#inputTag4").tagsinput('items');
</script>
<script type="text/javascript">
$("#inputTag5").tagsinput('items');
</script>

<script type="text/javascript">
$(document).ready(function(){
// for upload files here sec 1 start           
$('#img1').change(function(){
var fp = $("#img1");
var lg = fp[0].files.length; // get length
var items = fp[0].files;
var fileSize = 0;

if (lg > 0) {
for (var i = 0; i < lg; i++) {
fileSize = fileSize+items[i].size; // get file size
}
if(fileSize > 2000000) {
//alert('File size must not be more than 2 MB');
$('#img1').val('');
//location.reload();
$('.errvalid1').show();
$('.subbtn').hide();

}else{

$('.subbtn').show();
$('.errvalid1').hide();

}
}
});

$('#img2').change(function(){
var fp = $("#img2");
var lg = fp[0].files.length; // get length
var items = fp[0].files;
var fileSize = 0;

if (lg > 0) {
for (var i = 0; i < lg; i++) {
fileSize = fileSize+items[i].size; // get file size
}
if(fileSize > 2000000) {
//alert('File size must not be more than 2 MB');
$('#img2').val('');
//location.reload();
$('.errvalid1').show();
$('.subbtn').hide();

}else{

$('.subbtn').show();
$('.errvalid1').hide();

}
}
});

$('#img3').change(function(){
var fp = $("#img3");
var lg = fp[0].files.length; // get length
var items = fp[0].files;
var fileSize = 0;

if (lg > 0) {
for (var i = 0; i < lg; i++) {
fileSize = fileSize+items[i].size; // get file size
}
if(fileSize > 2000000) {
//alert('File size must not be more than 2 MB');
$('#img3').val('');
//location.reload();
$('.errvalid1').show();
$('.subbtn').hide();

}else{

$('.subbtn').show();
$('.errvalid1').hide();

}
}
});

});
</script>


<!-- Google Maps JavaScript library -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyB-l9hZxAvJPDqAHWufmnDgyHVInQJs6Qs&latlng"></script>

<script>
function mapaddressforcountry() {

var options = {
types: ['(cities)'],
componentRestrictions: {country: "es"}
};

var input = document.getElementById('location');
var autocomplete = new google.maps.places.Autocomplete(input, options);
}


$(document).on('change','input[type=radio][name=skills]',function() {
if ($(this).val() == 'Remotely') {
$("div.postal").hide();
} else {
$("div.postal").show();
}
});



</script>
<!-- end gmap -->

</body>
</html>