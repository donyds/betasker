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

.pera{
      font-size: 16px;
    font-weight: 500;
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
      border-bottom: none;
      border-top:none;
    border-radius: 0px;
    border-left: none;
        padding:0px 5px;
            box-shadow: none;
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
/*----------*/

td .badge-custom {
    font-size: 14px;
    padding: 10px;
    background: #146e85;
    margin-bottom: 10px;
}

.pz-box {
    border-radius: 7px;
    border: 1px solid #cfcfcf;
    text-align: center;
}

 .read-more-content {
                display: none;
                padding-top: 12px;
            }

button.read-more-btn {
    color: #05a0c7;
    border: none;
    background: no-repeat;
}

button.read-more-btn:focus{
border:none;
box-shadow: none;
outline:unset;
}  

hr {
    margin-top: 5px;
    margin-bottom: 5px;
  }   

     .card {
    margin: 0px 0px 7px 0px;
    border-bottom: 1px solid rgba(0,0,0,.125);
    border-top: none;
    border-radius: 0px;
    border-left: 4px solid #7fb145;
    padding: 0px 5px;
}

.qu-user-img img {
    height: 50px;
    width: 50px;
    border-radius: 50px;
    margin-top: 20px;
}

.image-upload > input
{
    display: none;
}

.image-upload img
{
    width: 80px;
    cursor: pointer;
}

#image-holder img{
max-height:40px;
max-width:50px;}

img.functioncall.pull-right {
    width: 27px;
    margin-right: 30px;
}

.toggle-boxbottom {
    box-shadow: 1px 5px 9px 3px #857e7e;
    background: #fff;
    position: absolute;
    width: 70%;
    padding: 5px;
    bottom: 35px;
    right: 22px;
}

.bottom-fixs {
    position: fixed;
    bottom: 50px;
    left: 0px;
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Question View</h6></span></div>

<div class="right">
</div>


</div>
</div>

<!---->
<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:40px"></div>
 


    <div class="container pl-0 pr-0">

<div class="card-outline px-2">

<div class="card-content card-content-padding pb-3">


 <div class="row mt-3">
  <?php
    include_once 'controller/config.php';
    $rep_id = $_GET['rep_id'];
    $getq = mysqli_query($con,"SELECT * FROM question_rep WHERE rep_id ='$rep_id'");
    while($question = mysqli_fetch_array($getq)){
    $idsu = $question['uid'];
    $qimg = $question['img'];
    $getu = mysqli_query($con,"SELECT * FROM account WHERE account_id ='$idsu'");
    $udetail = mysqli_fetch_array($getu);
    $uname   = $udetail['fullname'];
    $uimg    = $udetail['img'];
    ?>  
  <div class="col-2 pr-0 mr-0">
   <div class="qu-user-img">
    <a href="profile.php?id=<?php echo $idsu; ?>">
     <img class="img-fluid mt-0" src="img/<?php echo $uimg;?>">
    </a>
   </div>
 </div>

 <div class="col-10 pr-0 mr-0">
  <h6><?php echo $uname;?></h6>
  <p><?php echo $question['msg']; ?></p>
  <?php if(!empty($qimg)){ ?>
  <img src="img/<?php echo $qimg;?>" width="50px" style="">
  
  <?php } ?>
  <p><small><?php echo $question['date']; ?></small> 
   <!-- <a style="padding-left:20px;"><i class="fa fa-reply"></i> Reply</a> -->
   
   <!-- <span><img class="functioncall pull-right" src="img/more.png"> </span> -->

   </p>

   <!-- <div class="toggle-boxbottom" style="display:none;">
     <ul>
         <li><a href="#">Report</a></li>
         <li><a href="#">Community Guideline</a></li>
     </ul>
   </div>   -->
 </div>

 <?php } ?>



 <div class="col-12 bottom-fixs">

  <form class="ml-2" method="POST" action="controller/api/question_rep.php" enctype="multipart/form-data">
    <div class="form-group">
          <textarea class="form-control" name="question" placeholder="Replay" rows="3" required=""></textarea>
    <input type="hidden" name="rep_id" value="<?php echo $_GET['rep_id'];?>">
    </div> 

<div class="form-group">
  <div class="row pl-2 pr-2">
 <div class="col-2">
 <div class="image-upload">
    <label for="file-input">
        <i class="fa fa-paperclip" style="font-size:25px;"></i>
    </label>

    <input id="file-input" type="file" name="qimg">
</div>
</div>

<div class="col-5">
<div id="image-holder"> </div>
</div>


<div class="col-5 text-right"><button type="submit" name="submit" class="pera btn btn-primary">Send</button></div>
</div>
</div>
</form>
</div>



 </div> 

</div>



</div>
</div>

</div><!--container-->
   
  </div>


<div style="height:110px"></div>

<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include-----> 

</div><!----page-content---> 
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



        <script>
$(document).ready(function() {
        $("#file-input").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder = $("#image-holder");
          image_holder.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      });
</script>
<script>

$(document).ready(function(){
  $(".functioncall").click(function(){
    $(".toggle-boxbottom").toggle();
  });
});

</script>
         

</body>
</html>

