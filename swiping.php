<?php include("controller/cookie.php");?>

<?php 

$jsonData = file_get_contents('https://sharukh.dbtechserver.online/betasker/controller/api/get_all_task.php');
$wizards = json_decode($jsonData, true);

//print_r($wizards['records']);




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
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/jquery.mobile-1.4.4.min.js"></script>


<style type="text/css">

.ui-loading{
    opacity:0 !important;
}
.toolbar.messagebar {
position: fixed !important;
bottom: 0px !important;
}

a {
 color: #202121 !important;
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
background-image:url(img/swiping-bg.jpg) !important;
background-image:none;
}
body.bg-set.ui-mobile-viewport.ui-overlay-a{
    background-image: url(img/swiping-bg.jpg);

}
.ui-overlay-a, .ui-page-theme-a, .ui-page-theme-a .ui-panel-wrapper{
  background:transparent;
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

#container {
  width: 320px;
  margin: auto !important;
  display: block;
  height: 500px;
  position: relative;
  list-style-type: none;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}


.buddy {
  display: none;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
  color: #000;
  /*padding: 20px;*/
  width: 320px;
  height: 470px;
 /* top: 10px;*/
  position: absolute;
  cursor: hand;
}
.rotate-left {
  transform: rotate(30deg) scale(0.8);
  transition: 1s;
  margin-left: 400px;
  cursor: e-resize;
  opacity: 0;
  z-index: 10;
}
.rotate-right {
  transform: rotate(-30deg) scale(0.8);
  transition: 1s;
  opacity: 0;
  margin-left: -400px;
  cursor: w-resize;
  z-index: 10;
}
.avatar {
  background: #222;
    width: 280px;
    height: 200px;
  display: block;
  /*margin-top: 10px;*/
  
  background-size: auto 160% !important;
  background-position: center;
 background-repeat: no-repeat;
}
.like {
  border-radius: 5px;
  padding: 5px 10px;
  border: 2px solid green;
  color: green;
  text-transform: uppercase;
  font-size: 15px;
  position: absolute;
  top: 50px;
  right: 40px;
  text-shadow: none;
}
.dislike {
  border-radius: 5px;
  padding: 5px 10px;
  border: 2px solid red;
  color: red;
  text-transform: uppercase;
  font-size: 15px;
  position: absolute;
  top: 50px;
  left: 40px;
  text-shadow: none;
}
.avatar img {
    width: 320px;
    height: 200px;
}

.text-left {
    padding-top: 20px;
}
p{
  font-weight:400;
  font-size: 13px;
}
.right a {
    color: #f7f7f7 !important;
    font-weight:400;
}

img.foo-ico {
    width: 30px;
    height: auto;
    padding-bottom: 15px;
}

.ftmanage {
    color: #807e7e !important;
  }

  #myBtn, #myBtn2, #myBtn3, #myBtn4, #myBtn5 {
    background: none;
    border: none;
    box-shadow: none;
        padding-left: 2px;
    padding-right: 2p;
}

</style>
</head>


<body class="bg-set" style="background-image:url(img/swiping-bg.jpg);">
<div class = "views">

<div class="navbar">
<div class="navbar-bg"></div>
<div class="navbar-inner sliding">
<div class="left">
<a href="#" onclick="goBack()"  class="link back">
<i class="icon icon-back"></i>
</a>
</div>
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Browse Tasks  </h6></span></div>

<div class="right">
  <a hreflang="#" style="padding-right:15px;color:#f7f7f7"><i class="fa fa-search"></i></a>   <a href="#" style="padding-right:15px;color:#f7f7f7"> <i class="fa fa-map-o"></i></a>
   <a href="#" style="padding-right:15px;color:#f7f7f7">  <i class="fa fa-filter"></i></a>
</div>


</div>
</div>

<!---->
<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:40px"></div>
<div class="row">
<div class="container">

  <div id="container">
    
    <?php 
    foreach($wizards['records'] as $value){
    ?>
    
    <div class="buddy mybtn" style="display: block;" data-target="https://sharukh.dbtechserver.online/betasker/tasks-details.php?task_id=<?php echo $value['task_id'];?>">
        
        <!--<a href="https://sharukh.dbtechserver.online/betasker/tasks-details.php?task_id=<?php echo $value['task_id'];?>"><span class="text-success">-->
     
      <div class="avatar">
          <img src="https://unblast.com/wp-content/uploads/2019/11/Freelance-Work-Illustration-1536x1024.jpg"></div>
   

     <div class="text-left">
        <div class="row">
          <div class="col-8">
       <h4 style="font-size: 20px;"><?php echo ucwords($value['task_title']);?></h4>
       <p><?php echo ucwords($value['task_description']);?></p>
        <p><i class="fa fa-calendar"></i> <?php echo ucwords($value['date']);?></p>
        <p><i class="fa fa-clock-o"></i> Anytime</p>
        <p><span class="text-success"> Open</span></p>
        
      </div>
       <div class="col-4">
     <h4 style="font-size:16px;color: #05a0c7;"> <?php echo ucwords($value['task_currency']).ucwords($value['task_budget']);?></h4>
     </div>
   </div>
   </div>
  <!--</a>-->
  
</div>

<?php } ?>
<!--    <div class="buddy">-->
<!--      <a href="https://sharukh.dbtechserver.online/betasker/tasks-details.php">-->
<!--      <div class="avatar"><img src="https://micro-theme.com/html/clenoz/assets/img/about-1.jpg">-->
<!--      </div>-->
<!--       <div class="text-left">-->
<!--        <div class="row">-->
<!--          <div class="col-8">-->
<!--       <h4 style="font-size: 20px;">End of lease re-clean</h4>-->
<!--       <p><span class="fa fa-map-marker"></span> Glen Weverley VIC Australia-->
<!--        </p>-->
<!--        <p><i class="fa fa-calendar"></i> Tue 4 May</p>-->
<!--        <p><i class="fa fa-clock-o"></i> Anytime</p>-->
<!--        <p><span class="text-success"> Open</span></p>-->
<!--      </div>-->
<!--       <div class="col-4">-->
<!--     <h4>$ 150</h4>-->
<!--     </div>-->
<!--   </div>-->
<!--   </div>-->
<!-- </a>-->
<!--    </div>  -->

<!--    <div class="buddy">-->
<!--      <a href="https://sharukh.dbtechserver.online/betasker/tasks-details.php">-->
<!--      <div class="avatar"><img src="https://micro-theme.com/html/clenoz/assets/img/window-cleaning.jpg">-->
<!--      </div>-->
<!--      <div class="text-left">-->
<!--        <div class="row">-->
<!--          <div class="col-8">-->
<!--       <h4 style="font-size: 20px;">End of lease re-clean</h4>-->
<!--       <p><span class="fa fa-map-marker"></span> Glen Weverley VIC Australia-->
<!--        </p>-->
<!--        <p><i class="fa fa-calendar"></i> Tue 4 May</p>-->
<!--        <p><i class="fa fa-clock-o"></i> Anytime</p>-->
<!--        <p><span class="text-success"> Open</span></p>-->
<!--      </div>-->
<!--       <div class="col-4">-->
<!--     <h4>$ 150</h4>-->
<!--     </div>-->
<!--   </div>-->
<!--   </div>-->
<!-- </a>-->
<!--    </div>  -->

<!--<div class="buddy">-->
<!--  <a href="https://sharukh.dbtechserver.online/betasker/tasks-details.php">-->
<!--  <div class="avatar"><img src="https://micro-theme.com/html/clenoz/assets/img/bedroom-cleaning.jpg">-->
<!--  </div>-->
<!--  <div class="text-left">-->
<!--        <div class="row">-->
<!--          <div class="col-8">-->
<!--       <h4 style="font-size: 20px;">End of lease re-clean</h4>-->
<!--       <p><span class="fa fa-map-marker"></span> Glen Weverley VIC Australia-->
<!--        </p>-->
<!--        <p><i class="fa fa-calendar"></i> Tue 4 May</p>-->
<!--        <p><i class="fa fa-clock-o"></i> Anytime</p>-->
<!--        <p><span class="text-success"> Open</span></p>-->
<!--      </div>-->
<!--       <div class="col-4">-->
<!--     <h4>$ 150</h4>-->
<!--     </div>-->
<!--   </div>-->
<!--   </div>-->
<!-- </a>-->
<!--</div>  -->

<!--    <div class="buddy">-->
<!--      <a href="https://sharukh.dbtechserver.online/betasker/tasks-details.php">-->
<!--      <div class="avatar"><img src="https://micro-theme.com/html/clenoz/assets/img/instagram/instagram-4.jpg">-->
<!--      </div>-->
<!--      <div class="text-left">-->
<!--        <div class="row">-->
<!--          <div class="col-8">-->
<!--       <h4 style="font-size: 20px;">End of lease re-clean</h4>-->
<!--       <p><span class="fa fa-map-marker"></span> Glen Weverley VIC Australia-->
<!--        </p>-->
<!--        <p><i class="fa fa-calendar"></i> Tue 4 May</p>-->
<!--        <p><i class="fa fa-clock-o"></i> Anytime</p>-->
<!--        <p><span class="text-success"> Open</span></p>-->
<!--      </div>-->
<!--       <div class="col-4">-->
<!--     <h4>$ 150</h4>-->
<!--     </div>-->
<!--   </div>-->
<!--   </div>-->
<!-- </a>-->
<!--</div>  -->


</div>

 
</div><!--container-->


</div><!---row--->
</div>
</div>
<div class="clearfix"></div>
<div class="footer">
<div class="toolbar" style="background: linear-gradient(to right, #f7f7f7, #f7f7f7);height: 62px;">
<div class="toolbar-inner" style="padding-bottom: 10px;padding-top: 10px;">


<button id="myBtn" data-page="https://sharukh.dbtechserver.online/betasker/tell-us.php" class="link external" style="width:auto;">
<a href="javascript:void(0)" class="link external">
<img class="foo-ico" src="img/approval.png">
<h1 class="ftmanage pt-2">it's done</h1>
</a>
</button>

<button id="myBtn2" data-page="https://sharukh.dbtechserver.online/betasker/my-task.php" class="link external" style="width:auto;">
<a href="javascript:void(0)" class="link external">
<img class="foo-ico" src="img/package.png">
<h1 class="ftmanage pt-2">My Task</h1>
</a>
</button>

<button id="myBtn3" data-page="https://sharukh.dbtechserver.online/betasker/swiping.php" class="link external" style="width:auto;">
<a href="javascript:void(0)" class="link external">
<img class="foo-ico" src="img/loupe.png">
<h1 class="ftmanage pt-2" style="color:#04a0c8!important">Browse</h1>
</a>
</button>

<button  id="myBtn4" data-page="https://sharukh.dbtechserver.online/betasker/chat-list.php" class="link external" style="width:auto;">
<a href="javascript:void(0)" class="link external">
<img class="foo-ico" src="img/comment.png">
<h1 class="ftmanage pt-2">Message</h1>
</a>
</button>

<button id="myBtn5" data-page="https://sharukh.dbtechserver.online/betasker/more.php" class="link external" style="width:auto;">
<a href="javascript:void(0)" class="link external">
<img class="foo-ico" src="img/more.png">
<h1 class="ftmanage pt-2">More</h1>
</a>
</button>



</div>
</div>
</div>  

</div><!----page-content---> 


 <script type="text/javascript">
    $(document).ready(function(){

    $(".buddy").on("swiperight",function(){
      $(this).addClass('rotate-left').delay(700).fadeOut(1);
      $('.buddy').find('.status').remove();

     /* $(this).append('<div class="status like">Like!</div>');      */
      if ( $(this).is(':last-child') ) {
        $('.buddy:nth-child(1)').removeClass ('rotate-left rotate-right').fadeIn(300);
       } else {
          $(this).next().removeClass('rotate-left rotate-right').fadeIn(400);
       }
    });  

   $(".buddy").on("swipeleft",function(){
    $(this).addClass('rotate-right').delay(700).fadeOut(1);
    $('.buddy').find('.status').remove();
   /* $(this).append('<div class="status dislike">Dislike!</div>');*/

    if ( $(this).is(':last-child') ) {
     $('.buddy:nth-child(1)').removeClass ('rotate-left rotate-right').fadeIn(300);
      alert('OUPS');
     } else {
        $(this).next().removeClass('rotate-left rotate-right').fadeIn(400);
    } 
  });

});



    $(function(){
    document
        .getElementById("myBtn")
        .addEventListener("click", function(){
        redirect(this.getAttribute("data-page"));        
    });
    
    $('button:nth-child(1)')
        .click(function(){
        redirect($(this).attr('data-page'));
    });
})

function redirect(url){
    console.log(url);
    window.location = url;
}

    $(function(){
    document
        .getElementById("myBtn2")
        .addEventListener("click", function(){
        redirect(this.getAttribute("data-page"));        
    });
    
    $('button:nth-child(1)')
        .click(function(){
        redirect($(this).attr('data-page'));
    });
})

function redirect(url){
    console.log(url);
    window.location = url;
}

  $(function(){
    document
        .getElementById("myBtn3")
        .addEventListener("click", function(){
        redirect(this.getAttribute("data-page"));        
    });
    
    $('button:nth-child(1)')
        .click(function(){
        redirect($(this).attr('data-page'));
    });
})

function redirect(url){
    console.log(url);
    window.location = url;
}


  $(function(){
    document
        .getElementById("myBtn4")
        .addEventListener("click", function(){
        redirect(this.getAttribute("data-page"));        
    });
    
    $('button:nth-child(1)')
        .click(function(){
        redirect($(this).attr('data-page'));
    });
})

function redirect(url){
    console.log(url);
    window.location = url;
}

  $(function(){
    document
        .getElementById("myBtn5")
        .addEventListener("click", function(){
        redirect(this.getAttribute("data-page"));        
    });
    
    $('button:nth-child(1)')
        .click(function(){
        redirect($(this).attr('data-page'));
    });
})

function redirect(url){
    console.log(url);
    window.location = url;
}
 
 $('.mybtn').on('click', function(event) {
    event.preventDefault(); 
    var url = $(this).data('target');
    location.replace(url);
});

</script>

<script type="text/javascript">
    
function goBack() {
window.history.back();
}
</script>
</body>
</html>