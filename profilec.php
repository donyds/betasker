<?php include("controller/cookie.php");?>
<?php

include'controller/config.php';
$uid = $_COOKIE['id'];

$api_url = 'https://sharukh.dbtechserver.online/betasker/controller/api/show_profile.php?uid='.$uid;
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.css">
<style type="text/css">



.bg-set{
background-color:#f7f7f7;
background:#f7f7f7;
background-image:none;
}

.toolbar.messagebar {
position: fixed !important;
bottom: 0px !important;
}

a {
color: #000 !important;
}

p {
margin:0;

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

img.center-img {
    height: 100px;
    width: 100px;
    position: relative;
    top: 25px;
    border-radius: 50%;
    border: 2px solid #05a0c7;
}

/*-------*/


  .slick-dots  {
     
      display: none !important;
      }
   
    

/* Custom Arrow */
.prev{
 
  position: absolute;
  top: 38%;
  left: 5px;
  font-size: 40px;
    background: #05a0c7;
    color: #fff !important;
    padding: 2px 5px;
  }

    .prev:hover{
      cursor: pointer;
      color: black;
    }

.next {
    position: absolute;
    top: 38%;
    right:5px;
    font-size: 40px;
    background: #05a0c7;
    color: #fff !important;
    padding: 2px 5px;
}

  .next:hover{
      cursor: pointer;
      color: black;
    }
.checked {
    color: orange;
}

.rew-card {
    margin: 0px 0px 7px 0px;
    border-bottom: 1px solid rgba(0,0,0,.125);
    border-top: none;
    border-radius: 0px;
    border-left: 4px solid #7fb145;
    padding: 5px;
    background: #ebfbff;
    box-shadow: 0px 2px 4px #bababa;
}


.job-card {
    margin: 0px 0px 7px 0px;
    /*border-bottom: 1px solid rgba(0,0,0,.125);*/
    border-top: none;
    border-radius: 0px;
   /* border-left: 4px solid #7fb145;*/
    padding: 5px;
    background: #f2f4f4;
   /* box-shadow: 0px 2px 4px #bababa;*/
}

.job-card a{
  color:#000;
}

/*.box-s{
  box-shadow: 0px 2px 4px #bababa;
}*/

.moretext {
  display: none;
}



.slider-inner {
  
}

.slick-slide{
  box-shadow: 1px 1px 2px #d5d5d5;
}


.dark {
    color: #08d532;
    font-weight: 800;
    padding-right: 5px;
}

.reiew-b0x {
    padding: 10px;
}

.card-r {
    position: relative;
    box-shadow: 0px 2px 3px #ededed;
}
.box-over {
    position: absolute;
    bottom: 130px;
    left: 0px;
    text-align: center;
    color: #fff;
    background: #00000091;
    padding: 20px 0px;
    margin: 0px 15px;
}

/*----------*/
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
<div class="title pt-1 pl-2 pt-2"><span class="subtitle"><h6><?php echo ucwords($response_data->fullname);?></h6></span></div>

</div>
</div>

<!-- registration form start -->
<div class="page-content">

  <div class="" style="margin-top:40px"></div>

<div class="list media-list sortable">


<div class="card text-center mb-0">
<div class="card-content card-content-padding bg-i">
<div class="profileimg">

  <span style="position: relative;">
   <!-- <i class="fa fa-camera pro-change"></i> -->
  <img class="center-img" src="img/<?php echo $response_data->img;?>" id="">
  <h4 class="pt-5"><strong class="pro_img"><?php echo ucwords($response_data->fullname);?></strong></h4>
  
  <span class="fa fa-star checked"></span> 5.0 (165 Reviews)
      <h6><strong>$ 20 USD / hour</strong></h6>
  
</span>
</div><!------------>
<hr>

 <div class="row mt-3 mb-2 text-left">
<div class="col-6"><span class="dark">99 %</span>  Jobs Completed</div>
 <div class="col-6"><span class="dark">100%</span>  On Budget</div>
 </div><!---->

 <div class="row mt-2 mb-3 text-left">
<div class="col-6"><span class="dark">99 %</span>  On Time</div>
 <div class="col-6"><span class="dark">10%</span>  Repeat Hire Rate</div>
 </div><!---->

</div>
</div><!------->


<div class="containing bg-white">
<div class="row pl-2 pr-2">

<h5 class="mt-3">Lorem Ipsum is simply dummy text of the printing...</h5>
</div>  

<div class="row mt-3">
  <div class="reiew-b0x">
    <div class="card px-2 py-2" style="background:#f7f7f7;border:none;">
    <h5>FEATURED REVIEW</h5>
    <p>with the release of Letraset sheets containing Lorem  of Letraset sheets containing Lorem  Ipsum passage Work !</p>
     <strong><h6>-ICEO B.</h6></strong>
</div>
</div>
</div>

<div class="row mt-3 px-2 py-2 mb-3">
<p style="font-size:14px;">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lobortis ipsum nec risus tempor, ut tincidunt dui vestibulum.<span class="moretext"> Aliquam in congue purus, bibendum tempor enim. Pellentesque ex nibh, 
</p>
<p> <span class="moreless-button text-info w-100" style="font-size:13px; min-width:150px;">Read more</span></p>
</div>  


</div>
</div>   

 <div class="job-card w-100 pb-2 mt-3 mb-3">


        <div class="card-content" style="background:#fff;">
         <h4 class="pt-2 pl-2 pb-2 text-info">Portfolio Items</h4>
         <hr>

        <div class="row d-flex pt-3 pb-3 box-s" style="align-content:center;"> 
          
          <div class="col-12 card-r">
                <img class="img-fluid" src="https://ld-wt73.template-help.com/tf/renoxy_v2/images/gallery-3-original-1200x900.jpg" style="max-height:530px;">

                <div class="box-over">
                  <h4> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                </div>

                 <p class="pt-3 pb-3"><strong>with the release of </strong> </p>
               
          </div>
          
          </div>

          <div class="row d-flex pt-3 pb-3 box-s" style="align-content:center;"> 
          
          <div class="col-12 card-r">
                <img class="img-fluid" src="https://ld-wt73.template-help.com/tf/renoxy_v2/images/gallery-3-original-1200x900.jpg" style="max-height:530px;">

                <div class="box-over">
                  <h4> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                </div>

                 <p class="pt-3 pb-3"><strong>with the release of </strong> </p>
               
          </div>
          
          </div>

           <div class="row d-flex pt-3 pb-3 box-s" style="align-content:center;"> 
          
          <div class="col-12 card-r">
                <img class="img-fluid" src="https://ld-wt73.template-help.com/tf/renoxy_v2/images/gallery-3-original-1200x900.jpg" style="max-height:530px;">

                <div class="box-over">
                  <h4> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                </div>

                 <p class="pt-3 pb-3"><strong>with the release of </strong> </p>
               
          </div>
          
          </div>
      
    </div>
</div><!----------->


 <div class="card-content mt-3 mb-3" style="background:#fff;">
    <h4 class="pl-2 pb-2 pt-2 text-info">Reviews</h4>
    <hr>

   

   <?php 
for ($i=1; $i < 4; $i++) { ?>
    <div class="card">
     <div class="row">
       
      <div class="col-8">
         <div class="rating">
              <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
            </div>
      </div>

       <div class="col-4">
         $ 60.00 USD
       </div>  

       <div class="col-12 pt-2 pb-2">
        <h4> Lorem ipsum dolor</h4>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
       </div>

        <div class="col-12 pt-3 pb-3">
             <p><img class="fix-im-box" src="img/r-avtar.jpg">
             <strong>@ josaf</strong></p>
             <p class="pt-2">23 Days ago</p>
        </div>  
          
    </div>
           </div><!----card---->

           <?php }

?>
 </div> <!----------->



<div class="card-content mt-3 mb-3" style="background:#fff;">
    <h4 class="pl-2 pb-2 pt-2 text-info">Experience</h4>
    <hr>

     <div class="row mb-5 pb-3">
      <div class="col-12">
           <h5 class="">Lorem ipsum dolor</h5>
           <p>with the release of Letraset sheets containing Lorem Ipsum passage</p>
      </div>
     </div>
</div> <!----------->     


</div>  <!-----page----->


<div style="height:70px"></div>  


<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include----->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.js"></script>
<script type="text/javascript">





// Read more

$('.moreless-button').click(function() {
  $('.moretext').slideToggle();
  if ($('.moreless-button').text() == "Read more") {
    $(this).text("Read less")
  } else {
    $(this).text("Read more")
  }
});
</script>
</body>
</html>