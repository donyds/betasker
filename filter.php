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

.btn-outline-info:not(:disabled):not(.disabled).active, .btn-outline-info:not(:disabled):not(.disabled):active, .show>.btn-outline-info.dropdown-toggle {
    color: #fff !important;
    background-color: #17a2b8;
    border-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled).active:focus, .btn-outline-info:not(:disabled):not(.disabled):active:focus, .show>.btn-outline-info.dropdown-toggle:focus {
    box-shadow:none;
}

.tab-pane {
    min-height: 210px;
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
<div class="title pt-2 pl-2"><span class="subtitle"><h6>Filters</h6></span></div>




</div>
</div>

<!---->
<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:7px"></div>
 
 <div class="container">
  <form method="post" action="controller/api/search_filter.php">
<div class="row">
    <div class="col-12 mt-4 mb-2">
      <strong>To be done</strong>
    </div><!---->

 
     
    <div class="col-12">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item mr-2" role="presentation">
    <a class="btn btn-outline-info active person" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">In person</a>
  </li>
  <li class="nav-item mr-2" role="presentation">
    <a class="btn btn-outline-info remote" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Remontely</a>
  </li>
  <li class="nav-item mr-2" role="presentation">
    <a class="btn btn-outline-info all" id="pills-contact-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-contact" aria-selected="false">All</a>
  </li>
</ul>
 
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

<div class="form-group subrb">
  <label>Suburb</label>
<div class="input-group">
  <input type="text" class="form-control" name="location" id="location" placeholder="Suburb" onclick="mapaddressforcountry()">
  <div class="input-group-append">
    <span class="input-group-text"><i class="fa fa-pencil"></i></span>
  </div>
</div>
</div>

<div class="form-group prices">
  <label>Price</label> <span class="float-right"><span class="text-right" id="person_id"></span> £</span>
<div class="input-group">
  <input type="range" name="price" min="1" max="10000" value="1" class="slider form-control" id="person_price">
</div>
</div>




  </div><!---->

  <!-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
     
     <div class="form-group">
  <label>Price</label> <span class="float-right"><span class="text-right" id="remote_id"></span> £</span>
<div class="input-group">
  <input type="hidden" name="type" value="remotely">

  <input type="range" name="price2" min="1" max="1000" value="50" class="slider form-control" id="remote_price">
</div>
</div>

  </div> -->

  <!---->


  <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

  
  <div class="form-group">
     <label>Suburb</label>
<div class="input-group">
  <input type="text" class="form-control" name="location3" id="location2" value="" placeholder="Suburb">
  <div class="input-group-append">
    <span class="input-group-text"><i class="fa fa-pencil"></i></span>
  </div>
</div>
</div>

<div class="form-group">
  <label>Price</label> <span class="float-right"><span class="text-right" id="all_id"></span> £</span>
<div class="input-group">
  <input type="hidden" name="type" value="all">

  <input type="range" name="price3" min="1" max="1000" value="50" class="slider form-control" id="all_price">
</div>
</div>


  </div> -->

  <!---->

</div>




    </div>  <!---->  

    <div class="col-12 mt-5 pt-5"></div>

    <div class="col-12 mt-5 pt-5">
      <button type="submit" name="submit" class="col button button-large button-round button-fill text-white btn-secondary text-capitalize" style="font-size: 20px;background:#91d18b;height: 40px;border-radius:30px;">Apply</button>
    </div>


</div> 

</form>
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
 <script>
var slider = document.getElementById("person_price");
var output = document.getElementById("person_id");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

<script>
var slider1 = document.getElementById("remote_price");
var output1 = document.getElementById("remote_id");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
  output1.innerHTML = this.value;
}
</script>

<script>
var slider2 = document.getElementById("all_price");
var output2 = document.getElementById("all_id");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
  output2.innerHTML = this.value;
}
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
</script>
<!-- end gmap -->


<script>
$(document).ready(function(){
  $(".person").click(function(){
    $(".prices").show();
    $(".subrb").show();
    
  });
  $(".remote").click(function(){
    $(".prices").show();
    $(".subrb").hide();
  });

  $(".all").click(function(){
    $(".prices").show();
    $(".subrb").show();
  });
});
</script>




</body>
</html>