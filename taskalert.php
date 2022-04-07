<?php include("controller/cookie.php");?>
<?php 

$getcat   = file_get_contents('https://sharukh.dbtechserver.online/betasker/controller/api/get_allcat.php');
$category = json_decode($getcat, true); 

?>
<?php
 include_once 'controller/config.php';

$account_id = $_COOKIE['id'];
$api_url1       = 'https://sharukh.dbtechserver.online/betasker/controller/api/get_trans.php?id='.$account_id;
$json_data1     = file_get_contents($api_url1);
$response_data1 = json_decode($json_data1);
$getacc = $response_data1->result;
$wall = $response_data1->wallet ;
    
    //print_r($wall[0]);
    // $getu     = mysqli_query($con,"Select * FROM account WHERE account_id='$account_id'");
    // $udetails = mysqli_fetch_array($getu);
    // $wallet   = $udetails['wallet'];
    
 
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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

<style type="text/css">
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
/*background-image:url(img/innerpage-bg.jpg);*/
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

a{
color: #545858 !important;
}

p {
margin:0;
font-weight: 600;
}
.col-40 {
font-weight: 700;
}

.custom-b{
      background: #05a0c7 !important;
    font-size: 17px;
    font-weight: 500;
   
}
i.fa.fa-angle-right {
    font-size: 30px !important;
    padding-top: 15px !important;
    padding-left: 20px;
}

.row .fa{
	color:#05a0c7;
}

.center-font{
	    font-size: 19px;
    color: #065c71;
    font-family: 'Ubuntu';
}
.dropdown-menu.show{
    top: 100px;
    }

.pac-container {
    z-index: 9990 !important;
}

.stv-radio-buttons-wrapper {
     clear: both;
     display: inline-block;
}
 .stv-radio-button {
     position: absolute;
     left: -9999em;
     top: -9999em;
}
 .stv-radio-button + label {
     float: left;
     padding: 0.5em 1em;
     cursor: pointer;
     border: 1px solid #28608f;
     margin-right: -1px;
     color: #fff;
     background-color: #428bca;
}
 .stv-radio-button + label:first-of-type {
     border-radius: 0.7em 0 0 0.7em;
}
 .stv-radio-button + label:last-of-type {
     border-radius: 0 0.7em 0.7em 0;
}
 .stv-radio-button:checked + label {
     background-color: #3277b3;
}
.suburb_div{
    display :none;
}


.bootstrap-tagsinput .tag {
    margin-right: 2px;
    color: #ffffff;
    background: #05a0c7;
    margin-bottom: 2px;
    padding: 4px;
    border-radius: 4px;
}

.bootstrap-tagsinput{
    width: 100%;
        margin-top: 10px;
}

.bootstrap-tagsinput input[type="text"]{
     margin-top: 10px;
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

<div class="title pt-1 pl-2"><span class="subtitle"><h6>New Task Alert</h6></span></div>
</div>
</div>
<!---->

<div class="page-content pt-5">

<div class="" style="margin-top:40px"></div>

<div class="mt-0 text-center">
<h4 class="pt-0" style="color:#05a0c7">New Task Alert</h4>
<div class="mt-3 pb-4 text-center">

 
<div class="alert alert-danger error w-75 mx-auto text-center" role="alert" style="display: none;"></div>
<div class="alert alert-success done w-75 mx-auto text-center" role="alert" style="display: none;"></div>
<?php 
       
  $uid = $_COOKIE['id'];
  $get_alert    = mysqli_query($con,"SELECT * FROM task_alert_log WHERE uid='$uid'");
  $chk_alert_is = mysqli_fetch_array($get_alert);
   
?>
<form method="Post" id="myform">

        <div class="row">

        <!-- <div class="col-12 mx-auto text-center">
            <label>What kind of task are you looking for?</label>
            <div class="stv-radio-buttons-wrapper">
            <input type="radio" class="stv-radio-button lookingfor" name="work" value="noremote" id="noremote" checked />
            <label for="noremote">In a person</label>

            <input type="radio" class="stv-radio-button lookingfor" name="work" value="remote" id="remote" />
            <label for="remote">Remote</label>
            </div>
            
        </div> -->
        </div> 
    
 <!--  <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
  <input type="radio" class="btn-check lookingfor" name="btnradio" value="1" id="btnradio1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

  <input type="radio" class="btn-check lookingfor " name="btnradio" value="2" id="btnradio2" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

</div> -->
 <div class="form-group mx-3" >
    <label>What kind of task are you looking for?</label>
    <select class="form-control lookingfor" name="lookingfor">
        <option value="">Select</option>
        <option value="noremote" <?php echo ($chk_alert_isp['lookingfor'] ==  'noremote') ? ' selected="selected"' : '';?>>In a person</option>
        <option value="remote" <?php echo ($chk_alert_isp['lookingfor'] ==  'noremote') ? ' selected="selected"' : '';?>>Remote</option>

    </select>

</div>  

<div class="form-group mx-3" >
    <label>Keyword</label>
    <input type="text" name="keywords" value="<?php echo $chk_alert_is['cat'];?>" class="form-control keyword" id="inputTag" data-role="tagsinput" placeholder="Keyword">
    
</div> 


<div class="form-group mx-3 suburb_div">
    <lable>Suburb</lable>
    <input class="form-control suburb" type="text" value="<?php echo $chk_alert_is['subrub'];?>" id="location" name="suburb" placeholder="Enter Suburb"  style="border-radius:50px; min-height: 50px; z-index: 999;" onclick="mapaddressforcountry()">
</div> 
<center> <a type="button" class="col button button-large button-round button-fill w-50 text-white custom-b task_alertdo"  style="font-size: 20px;height: 45px;padding-top:5px"><i class="fa fa-plus"></i>&nbsp; Add Task Alert </a></center> 

</form>
</div> 



<div style="padding-bottom:20px; padding-top:70px"></div>

</div>  <!----page-content---> 
</div>
</div></div>
<div style="height:70px"></div>  

<!----footer include----->
  <?php include 'include/footer2.php';?>
  </div>
<!---footer include----->
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script>
    //for hide show
    $(document).ready(function(){
    $('.lookingfor').on('change', function() {
      if ( this.value == 'remote')
      {
        $(".suburb_div").hide();

      }
      else
      {
        $(".suburb_div").show();

      }
    });
});


    $(document).ready(function() {

        $('.task_alertdo').click(function(e){

            e.preventDefault();

            var lookingfor   = $(".lookingfor").val();
            var keyword      = $('.keyword').val();
            var suburb       = $(".suburb").val();
                
            
            //alert(keyword);

            $.ajax({type: "POST", url: "controller/api/got_taskalert_data.php",dataType: "json",

            data: {lookingfor:lookingfor,keyword:keyword,suburb:suburb},

            success : function(data){

            if (data.status=='success') {
           
            $("#myform")[0].reset();
            $('.error').hide();   
            $('.done').show();   
            $(".done").html("<p>"+data.response+"</p>");
            window.location = 'releted-task.php';


            }

            else{
            
            $('.done').hide();   

            $('.error').show();   

            $(".error").html("<p>"+data.response+"</p>");

            }

                }

            });


        });

    });
    

     </script>
<!--library  -->
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
</script>
<!-- end gmap -->
<script src="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<!-----css---->
<script>
$(document).ready(function(){
$("#inputTag").tagsinput('items');
});
</script>

</body>
</html>