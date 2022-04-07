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
<link rel = "stylesheet"href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.min.css" />
<link rel = "stylesheet"href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.colors.min.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
color: #7a7a7a !important;
}

p {
margin:0;
font-weight:400;
font-size:14px;
}

i.fa.fa-angle-right {
    font-size: 30px !important;
    padding-top: 15px !important;
    padding-left: 20px;
}
.card {
    margin: 0px 0px 7px 0px;
    border-bottom: 1px solid rgba(0,0,0,.125);
    border-top: none;
    border-radius: 0px;
    border-left: 4px solid #7fb145;
    padding: 0px 5px;
}

.bg-i {
    background-size: contain;
    position: relative;
}

.profileimg {
    position: relative;
}

img.center-img {
    height: 100px;
    width: 100px;
    position: relative;
    top: 100px;
    border-radius: 50%;
    border: 2px solid #05a0c7;
}


.background-change {
   position: absolute;
    right: 20px;
    top: 20px;
}


.pro-change {
   
    position: absolute;
    bottom: -66px;
    left: 80px;
    z-index: 999;
}

.fa-camera{
  font-size:18px;
   color: #fff;
}

.list{
  padding:0px !important;
}

.checked {
  color: orange;
}

#pills-home-tab {
   
    border-radius: 30px 0px 0px 30px;
    
}


#pills-profile-tab {
   
    border-radius: 0px 30px 30px 0px;
    
}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff !important;
    background-color: #05a0c7;
}

.nav-pills .nav-link, .nav-pills .nav-link {
    color: #fff !important;
    background-color: #9f9e9e;
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Reviews</h6></span></div>
<div class="right">  </div>
</div>
</div>

<!-- registration form start -->
<div class = "page-content pt-5 pl-3">
 <div class="" style="margin-top:40px"></div>
<div class="list media-list sortable">
   
<div class="row mx-0">
    <div class="col-10 text-center">
     <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item active">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">As a Tasker</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">As a Poster</a>
  </li>
 </ul>
</div>
 <div class="col-12">
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade active in" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
     <div class="row mx-2">
        <!-- <div class="col-6 text-right">
        <div>
          <span class="fa fa-star checked"></span>
          <span class="fa-lg fa fa-star checked"></span>
          <span class="fa-lg fa fa-star checked"></span>
          <span class="fa-lg fa fa-star checked"></span>
          <span class="fa-lg fa fa-star checked"></span>
          </div>
          <p class="ft-16">2 reviews</p>
          <p class="ft-16">No completion Rate</p>
          <p class="ft-16">2 complieted tasks</p>
        </div>    -->

        <!-- <div class="col-6 text-right">
        <div>
          
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span> 2
          </div>

          <div>
          
          <span class="fa fa-star un_checked"></span>
          <span class="fa fa-star un_checked"></span>
          <span class="fa fa-star un_checked"></span>
          <span class="fa fa-star  "></span> 0
          </div>

          <div>
         
          <span class="fa fa-star un_checked"></span>
          <span class="fa fa-star un_checked"></span>
          <span class="fa fa-star un_checked"></span> 0
          </div>

          <div>
            
          <span class="fa fa-star un_checked"></span>
          <span class="fa fa-star un_checked"></span> 0
          </div>

          <div>
             <span class="fa fa-star un_checked"></span>
            <span class="fa fa-star un_checked"></span> 0
          </div>
         
        </div>      -->

     </div>  <!---row--->
     
     <?php
     if(isset($_GET['id'])){

    $account_id = $_GET['id'];
    
    }else{
    
    $account_id = $_COOKIE['id'];
    
    }
    //receiver review
    $api_url1   = 'https://sharukh.dbtechserver.online/betasker/controller/api/getall_review.php?id='.$account_id;
    $json_data1     = file_get_contents($api_url1);
    $response_data1 = json_decode($json_data1);

    $getbokk1 = $response_data1->result;
    $counts1 = COUNT($getbokk1);
    if($counts1 =='0'){
    
    ?>

  <p style="font-size:16px">Looking like you haven't received any reviews just yet.</p>
 
  <?php } ?>

    <?php 
    if($counts1 > 0){
     foreach($getbokk1 as $val2){
     $reviewis_from = $val2->is_from ;
    ?>
     <div class="row mx-2">
        <div class="col-9 pt-2 pb-2 mx-auto">

      <div class="row">
         <div class="col-4"><a href="profile.php?id=<?php echo $val2->creator;?>"><img class="" src="img/<?php echo $val2->img;?>" width="60" style="border-radius: 50px;
    height: 60px;width: 60px;"></a></div>
         <div class="col-8 pt-2 mb-2">
          <div>
          <?php $rate = $val2->rate; 
          $tr = 5 - $rate;
          for ($i=0; $i < $rate; $i++) {
            
          ?>
        <span class="fa fa-star checked"></span>
        <?php } ?>
          <?php 
              for ($j=0; $j < $tr; $j++) {
                
           ?>
        <span class="fa fa-star"></span>
        <?php } ?>

          </div>
          <span> <?php if($reviewis_from =='poster'){ echo "Task Provider"; }else{ echo "Task Receiver";}
          ?></span>
         </div>
        </div> <!---row-->

         </div>
          <div class="col-12 mb-3 text-center">
          <h3 class="text-info">  <?php echo substr($val2->task_title,0,30)."...";?> </h3>
          <p class="mb-3"><span class="text-info"><?php echo $val2->fullname;?>.</span> said: "<?php echo substr($val2->review,0,30);?>"</p>
         
        </div>
     </div><!---row--->   
     <?php }} ?>


  </div>

  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      
   
        <!-- <div class="col-6 text-right">
        <div>
             <span class="fa fa-star un_checked"></span>
          <span class="fa-lg fa fa-star un_checked"></span>
          <span class="fa-lg fa fa-star un_checked"></span>
          <span class="fa-lg fa fa-star un_checked"></span>
          <span class="fa-lg fa fa-star un_checked"></span>
          </div>
          <p class="ft-16">0 reviews</p>
          <p class="ft-16">No completion Rate</p>
          <p class="ft-16">0 complieted tasks</p>
        </div>    -->

        <!-- <div class="col-6 text-right">
        <div>
          
          <span class="fa fa-star un_checked"></span>
          <span class="fa fa-star un_checked"></span>
          <span class="fa fa-star un_checked"></span>
          <span class="fa fa-star un_checked"></span>
          <span class="fa fa-star un_checked"></span> 0
          </div>

          <div>
          
          <span class="fa fa-star un_checked"></span>
          <span class="fa fa-star un_checked"></span>
          <span class="fa fa-star un_checked"></span>
          <span class="fa fa-star  "></span> 0
          </div>

          <div>
         
          <span class="fa fa-star un_checked"></span>
          <span class="fa fa-star un_checked"></span>
          <span class="fa fa-star un_checked"></span> 0
          </div>

          <div>
            
          <span class="fa fa-star un_checked"></span>
          <span class="fa fa-star un_checked"></span> 0
          </div>

          <div>
             <span class="fa fa-star un_checked"></span>
            <span class="fa fa-star un_checked"></span> 0
          </div>
         
        </div>      -->

        <!-- as a poster review -->

    <?php
   
   //receiver review
   $api_url2   = 'https://sharukh.dbtechserver.online/betasker/controller/api/apifor_receiver_review.php?id='.$account_id;
   $json_data2     = file_get_contents($api_url2);
   $response_data2 = json_decode($json_data2);

   $getbokk2 = $response_data2->result;
   $counts2 = COUNT($getbokk2);


    if($counts2 =='0'){
   ?>

 <p style="font-size:16px">Looking like you haven't received any reviews just yet.</p>

 <?php } ?>


    <?php 
    if($counts2 > 0){
     foreach($getbokk2 as $val3){
     $reviewis_from = $val3->is_from ;
    ?>
     <div class="row mx-2">
        <div class="col-9 pt-2 pb-2 mx-auto">

      <div class="row">
         <div class="col-4"><a href="profile.php?id=<?php echo $val3->creator;?>"><img class="" src="img/<?php echo $val3->img;?>" width="60" style="border-radius: 50px;
    height: 60px;width: 60px;"></a></div>
         <div class="col-8 pt-2 mb-2">
          <div>
          <?php $rate = $val3->rate; 
          $tr = 5 - $rate;
          for ($i=0; $i < $rate; $i++) {
            
          ?>
        <span class="fa fa-star checked"></span>
        <?php } ?>
          <?php 
              for ($j=0; $j < $tr; $j++) {
                
           ?>
        <span class="fa fa-star"></span>
        <?php } ?>

          </div>
          <span> <?php if($reviewis_from =='poster'){ echo "Task Provider"; }else{ echo "Task Receiver";}
          ?></span>
         </div>
        </div> <!---row-->

         </div>
          <div class="col-12 mb-3 text-center">
          <h3 class="text-info">  <?php echo substr($val3->task_title,0,30)."...";?> </h3>
          <p class="mb-3"><span class="text-info"><?php echo $val3->fullname;?>.</span> said: "<?php echo substr($val3->review,0,30);?>"</p>
         
        </div>
     </div><!---row--->   
     <?php }} ?>



  </div>
  
</div>
    </div>    
</div>    



 </div>  <!-----page----->


<div style="height:70px"></div>  
<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include----->
 
  

</body>
</html>   