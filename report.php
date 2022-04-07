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

.star-rating {
  line-height:32px;
  font-size:1.25em;
}

.star-rating .fa-star{color: yellow;}

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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Report User</h6></span></div>
<div class="right">  </div>
</div>
</div>

<!-- registration form start -->
<div class = "page-content pt-5 pl-3">
 <div class="" style="margin-top:40px"></div>
<div class="list media-list sortable">
   
 <!----->
 

<div class="container">
<div class="card-content">
<!--      <h4 class="pt-2 pb-2"><center>Write Us A Review </center></h4> -->
    <img class="img-fluid" src="img/add-reviews-co.jpg">
 <div class="alert alert-danger errpost" role="alert" style="display: none;"></div>
          <div class="alert alert-success succpost" role="alert" style="display: none;"></div>
<form id="msform" autocomplete="off">


    <div class="form-group mt-3">
         <select class="form-control type">
             <option>Spam</option>
             <option>Rude or offensive</option>
             <option>Breach of marketplace rules</option>
             <option>Other</option>
         </select>
    </div>

    <div class="form-group mt-3">
         <label for="comment"><strong>Please Enter Comment</strong></label>
    <textarea class="form-control comment" rows="5" id="comment"></textarea>
    <input type="hidden" name="userid" class="userid" value="<?php echo $_GET['id'];?>">
    </div>

    <div class="form-group">
      <!-- href="get-started.php" -->
     <button type="button" class="col button button-large button-round button-fill w-75 mx-auto text-white btn-success text-capitalize submit_report" style="font-size: 20px;background:#91d18b;min-height:40px;font-weight:600;border-radius: 30px;">Send report </button>
    </div>


</form>    
</div>
</div>


<!----->



 </div>  <!-----page----->


<div style="height:70px"></div>  
<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include----->

<script type="text/javascript">
    var $star_rating = $('.star-rating .fa');

var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating.on('click', function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();
$(document).ready(function() {

});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

 <script>
         //signup using ajax

    $(document).ready(function() {

        $('.submit_report').click(function(e){

            e.preventDefault();

            var type     = $(".type").val();
            var comment  = $(".comment").val();
            var userid   = $(".userid").val();

            //alert(rate);
            

            $.ajax({type: "POST", url: "controller/api/report_user.php",dataType: "json",

            data: {type:type,comment:comment,userid:userid},

            success : function(data){

            if (data.status=='success') {
           
            $("#msform")[0].reset();

            $('.succpost').show();  
            $(".succpost").html("<p>"+data.response+"</p>");
            $('.errpost').hide();   

            //window.location = 'report.php?id='+data.userid;

            }

            else{

            $('.errpost').show();   
            $('.succpost').hide();   

            $(".errpost").html("<p>"+data.response+"</p>");

            }

                }

            });



        });

    });

     </script>


</body>
</html>   