<?php include'controller/cookie.php'?>

<?php

if(isset($_GET['id'])){

$account_id = $_GET['id'];

}else{

$account_id = $_COOKIE['id'];

}

$api_url = 'https://sharukh.dbtechserver.online/betasker/controller/api/getuData.php?id='.$account_id;
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);
$udata = $response_data->result;
$since = $udata->date;

// get date formate 
$nameOfDay = date('D', strtotime($since));
//get month
$datetime  = DateTime::createFromFormat('d-m-Y', $since);
$month     = $datetime->format('M');
// get day date
$date_day  = date("d", strtotime($since));
$date_year  = date("Y", strtotime($since));


date_default_timezone_set("Asia/Calcutta");
$currnt_time  =  date("Y-m-d H:i:s");

$last_act = $udata->last_activity; 

$to_time   = strtotime($last_act);

$from_time = strtotime($currnt_time);
//$time_elapsed = round(($from_time - $to_time) / 60). "minute ago";
$time_min = round(($from_time - $to_time) / 60). "minute ago";
$time_sec = $time_min * 60 ;


$time_elapsed = timeAgo($time_sec);

$get_prof = mysqli_query($con,"SELECT * FROM `profile` WHERE account_id='$account_id'");
$getp     = mysqli_fetch_array($get_prof);


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
font-weight:400;
font-size:14px;
}

i.fa.fa-angle-right {
    font-size: 30px !important;
    padding-top: 15px !important;
    padding-left: 20px;
}
.card{
  margin:0px;
  border:none;
  border-radius: 0px;
  padding:0px;
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
    top: 60px;
    border-radius: 50%;
    border: 2px solid #05a0c7;
}




.list{
  padding:0px !important;
}

.switch-field {
  font-family: "Lucida Grande", Tahoma, Verdana, sans-serif;
  padding-top: 20px;
  overflow: hidden;
  display: inline-block;
}
.badge-info {
    color: #fff;
    background-color: #17a2b8;
    font-size: 16px;
    font-weight: 500;
    padding: 10px 15px;
}
.switch-title {
  margin-bottom: 6px;
}

.switch-field input {
    position: absolute !important;
    clip: rect(0, 0, 0, 0);
    height: 1px;
    width: 1px;
    border: 0;
    overflow: hidden;
}

.switch-field label {
  float: left;
}

.switch-field label {
  display: inline-block;
  width: auto;
  background-color: #e4e4e4;
  color: rgba(0, 0, 0, 0.6);
  font-size: 16px;
  font-weight: normal;
  text-align: center;
  text-shadow: none;
  padding: 10px 15px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
  -webkit-transition: all 0.1s ease-in-out;
  -moz-transition:    all 0.1s ease-in-out;
  -ms-transition:     all 0.1s ease-in-out;
  -o-transition:      all 0.1s ease-in-out;
  transition:         all 0.1s ease-in-out;
}

.switch-field label:hover {
  cursor: pointer;
}

.switch-field input:checked + label {
  background-color: #05a0c7;
  -webkit-box-shadow: none;
  box-shadow: none;
  color:#fff;
}

.switch-field label:first-of-type {
  border-radius: 20px 0 0 20px;
}

.switch-field label:last-of-type {
  border-radius: 0px 20px 20px 0px;
}

.bor-radius{
  border-radius:20px;
}

h6{
      font-size: 14px;
    font-weight: 500;
}

.h3, h3 {
    font-size: 22px;
}
.page-content {
    overflow: unset !important;
 
    }


.image-upload {
    width: 100px;
    position: relative;
    z-index: 99;
    opacity: 0;
}

.cover-icon {
    position: absolute;
    top: 25px;
    left: 10px;
    z-index: 1;
}



.image-upload .image-upload
{
cursor: pointer;
}

#image-cover {
    z-index: 999;
    position: relative;
}

#image-form {
    z-index: 999;
    position: absolute;
    left: 26px;
    opacity: 0;
    top: 10px;
    width: 100%;
}

.pro-change {
    position: absolute;
    right: -5px;
    z-index: 1;
    top: 35px;
}
.fa-camera{
  font-size:18px;
   color: #fff;
}

.card {
    margin: 0px 0px 7px 0px;
    border-bottom: 1px solid rgba(0,0,0,.125);
    border-top: none;
    border-radius: 0px;
    /*border-left: 4px solid #7fb145;
    padding: 0px 5px;*/
}
.checked {
    color: orange;
}
.btn-outline-info:hover {
    color: #fff !important;
    background-color: #17a2b8;
    border-color: #17a2b8;
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6 class="pro_img"><?php //echo $getp['fname'];?> <?php //echo $getp['lname'];?><?php echo ucwords($udata->fullname);?></h6></span></div>
<div class="right"> <span class="pr-3"><a href="edit-account.php" class="text-white"><i class="fa fa-pencil"></i> </a></span> <span class="pr-3"><i class="fa fa-share-alt"></i></span> 
<?php if(isset($_GET['id'])){ ?>
<span><a href="report.php?id=<?php echo $_GET['id'];?>"><i class="fa fa-flag-o text-white"></i></a></span>
<?php } ?>

 </div> 
</div>
</div>

<div class="page-content pt-5 pl-3">
 <div class="list media-list sortable">
 <div class="card text-center">
<div class="card-content card-content-padding bg-i" style="background-image:url(img/<?php echo $udata->cover_img;?>);min-height: 170px;background-size: cover;"argin-top:8px;>
  <div id="msg2"></div>
  <form method="post" id="image-cover" enctype="multipart/form-data" onSubmit="return false;">
     <i class="fa fa-camera cover-icon"></i>
    <div class="image-upload">
    <label for="file-input">
        <i class="fa fa-camera cover-icon"></i>
    </label>

    <input type="file" id="image-cover" name="cover" class="cover">
</div>

 
  </form>

<div class="profileimg">

  <span style="position: relative;">
   
  <img class="center-img" src="img/<?php echo $udata->img;?>" id="image_from_url">
  <div id="msg"></div>
   
   <i class="fa fa-camera pro-change"></i>
  <form method="post" id="image-form" enctype="multipart/form-data" onSubmit="return false;">
    
    <label> </label>
  <input type="file" id="image-form" name="file" class="file">
  <!-- <input type="submit" name="submit" value="Upload" class="btn btn-danger"> -->
  </form>
</span>
</div>
</div>
</div>
</div>
 <!---->
<div class="row text-center mt-5">
 <div class="col-12 text-center"> <h2><strong class="pro_img"><?php echo ucwords($udata->fullname);?><?php //echo $getp['fname'];?> <?php //echo $getp['lname'];?></strong></h2>
   <p><?php echo $getp['suburb'];?></p>
 </div>
 </div>

 <div class="row text-left">
  <div class="alert alert-danger signupalert" role="alert" style="display: none;"></div>
  <div class="alert alert-success success" role="alert" style="display: none;"></div>

<div class="col-11 mx-auto text-center">
<div class="switch-field">
     <input type="radio" id="switch_3_left" name="role" value="As a Task" class="role" checked="" />
      <label for="switch_3_left">As a Task</label>
     <!--  -->
      <input type="radio" id="switch_3_right" name="role" value="poster" class="role"/>
      <label for="switch_3_right">As a Poster</label>
    </div>
    
    <?php 
    //get sum percentage
    $get_rating  = mysqli_query($con,"SELECT SUM(task_done_per) FROM `review` WHERE receiver='$account_id'");
    $get_rating  = mysqli_fetch_array($get_rating);
    $sum_rating_per  = $get_rating['SUM(task_done_per)'];
    
   
    //rating count
    $get_rating_count  = mysqli_query($con,"SELECT COUNT(receiver) FROM `review` WHERE receiver='$account_id'");
    $get_rating_count  = mysqli_fetch_array($get_rating_count);
    $count_rating      = $get_rating_count['COUNT(receiver)'];
    
    $sum_avg = $sum_rating_per/$count_rating ;
    $sum_avg = round($sum_avg);
    
     //get sum star
    $get_rating_star  = mysqli_query($con,"SELECT SUM(rate) FROM `review` WHERE receiver='$account_id'");
    $get_rating_star  = mysqli_fetch_array($get_rating_star);
    $sum_rating_star  = $get_rating_star['SUM(rate)'];
    $sum_star_rate = round($sum_rating_star/$count_rating);
    $blank_star    = 5 - $sum_star_rate ;

    //poster review

    $api_url1   = 'https://sharukh.dbtechserver.online/betasker/controller/api/getall_review.php?id='.$account_id;
    $json_data1     = file_get_contents($api_url1);
    $response_data1 = json_decode($json_data1);

    $getbokk1 = $response_data1->result;
    $counts1 = COUNT($getbokk1);


    ?>
    <div class="rating">
    <?php for($n=0; $n < $sum_star_rate; $n++){ ?>
     <span class="fa fa-star checked"></span>
     <?php } ?>
      <?php for($s=0; $s < $blank_star; $s++){ ?>
     <span class="fa fa-star"></span>
     <?php } ?>
    
     <?php if($counts1 > 0){ ?>

     <small><?php echo $count_rating; ?> reviews</small>
     <p><b><?php echo $sum_avg; ?>% Completion Rate</b></p>
      
     <?php }else { ?>

      <p><b>No Completion Rate <i class="fa fa-exclamation-circle text-secondary" aria-hidden="true"></i></b></p>

     <?php }?>

    </div>

    <?php 
    if($counts1 > 0){
      $sr=1; 
     foreach($getbokk1 as $val2){
     $reviewis_from = $val2->is_from ;
     if($sr =='1'){
    ?>

    <div class="col-9 pt-2 pb-2 mx-auto">

      <div class="row">
         <div class="col-4"><a href="profile.php?id=<?php echo $val2->creator;?>"><img class="" src="img/<?php echo $val2->img;?>" width="60" style="border-radius: 50px;
    height: 60px;width: 60px;"></a></div>
         <div class="col-8 pt-2">
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

        <div class="row mt-3">
        <div class="col-12 mb-3">
          <h3 class="text-info"> <?php echo substr($val2->task_title,0,30)."...";?> </h3>
          <p class="mb-3"><span class="text-info"><?php echo $val2->fullname;?>.</span> said: "<?php echo substr($val2->review,0,30);?>"</p>
          <a href="reviews.php" class="btn btn-outline-info btn-block bor-radius" style="font-size: 20px">View all review </a>

        </div>
      </div> <!---row--->
   
       <?php $sr++; }}} ?>



</div>


<div class="col-12 pt-2 pb-2">

   <div class="form-group">
    <label for="exampleInputEmail1">About</label>

    <p><?php echo $getp['about'];?></p>
   </div>

    <div class="form-group">
        <small>
            Last online  : <?php echo $time_elapsed; ?><br>
            Member since : <?php echo $month; ?> <?php echo $date_day; ?>, <?php echo $date_year;?>
        </small>
    </div>    

      <!-- <div class="form-group">
    <label for="">Badges</label>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
   </div> -->

   <div class="form-group">
    <a href="#" class="btn btn-outline-info btn-block bor-radius" style="font-size: 20px">Learn More </a>
   </div>


    <div class="form-group">
    <label for="">Skills</label>
    <p>
    <span class="badge badge-pill badge-info"><?php echo $getp['skills']; ?></span>
    <?php if($getp['skills'] !='Remotely') {?>
    <span class="badge badge-pill badge-info">Post Code -<?php echo $getp['postal_code']; ?></span>
    <?php } ?>
    </p>
    
    <br>
    <label>Specialities</label>
    <p>
    <?php 
     $speciality = $getp['specialities'];
     $scount     = explode("," ,$speciality);
     foreach ($scount as $spec) {
    ?>
    <span class="badge badge-pill badge-info"><?php echo $spec; ?></span>
    <?php } ?>
    </p>
    </div>

    <div class="form-group">
    <label for="">Languages</label>
    <p>
    <?php 
     $language = $getp['language'];
     $lang     = explode("," ,$language);
     foreach ($lang as $languages) {
    ?>
    <span class="badge badge-pill badge-info"><?php echo $languages; ?></span>
    <?php } ?>

    </p>
    </div>

    <div class="form-group">
    <label for="">Transportation</label>
   
    <p>
    <?php 
     $transportation = $getp['transportation'];
     $transp     = explode("," ,$transportation);
     foreach ($transp as $transport) {
    ?>
    <span class="badge badge-pill badge-info"><?php echo $transport; ?></span>
    <?php } ?>
    </p>
    </div>


    <div class="form-group">
    <label for="">Education</label>
   
    <p>
      <?php 
     $education = $getp['education'];
     $edu     = explode("," ,$education);
     foreach ($edu as $educations) {
    ?>
    <span class="badge badge-pill badge-info"><?php echo $educations; ?></span>
    <?php } ?>
    </p>
    </div>

    <div class="form-group">
    <label for="">Work</label>
   
    <p>
      <?php 
     $work = $getp['work'];
     $wrk     = explode("," ,$work);
     foreach ($wrk as $works) {
    ?>
    <span class="badge badge-pill badge-info"><?php echo $works; ?></span>
    <?php } ?>
    </p>
    </div>

<!-----page----->
</div>

</div>
</div>
</div>
</div>



 <div style="height:100px;"></div>
<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include----->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <script>
$(document).ready(function(e) {
    $("#image-form").change(function() {
    $("#msg").html('<div class="alert alert-info"><i class="fa fa-spin fa-spinner"></i> Please wait...!</div>');
    $.ajax({
      type: "POST",
      url: "controller/api/upload_profile.php",
      data: new FormData(this), 
      contentType: false, 
      cache: false, 
      processData: false, 
      success: function(data) {
        if (data == 1 || parseInt(data) == 1) {
          
          // $("#msg").html(
          //   '<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Data updated successfully.</div>'
          // );
        location.href = "profile.php";


        } else {
          $("#msg").html(
            '<div class="alert alert-info"><i class="fa fa-exclamation-triangle"></i> Extension not good only try with <strong>JPG, PNG, JPEG</strong>.</div>'
          );
        }
      },
      error: function(data) {
        $("#msg").html(
          '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> There is some thing wrong.</div>'
        );
      }
    });
  });
});
  </script>

   <script>
  $(document).ready(function(e) {
  $("#image-cover").change(function() {
    $("#msg2").html('<div class="alert alert-info"><i class="fa fa-spin fa-spinner"></i> Please wait...!</div>');
    $.ajax({
      type: "POST",
      url: "controller/api/upload_cover.php",
      data: new FormData(this), 
      contentType: false, 
      cache: false, 
      processData: false, 
      success: function(data) {
        if (data == 1 || parseInt(data) == 1) {
          
        location.href = "profile.php";

        } else {
          $("#msg2").html(
            '<div class="alert alert-info"><i class="fa fa-exclamation-triangle"></i> Extension not good only try with <strong>JPG, PNG, JPEG</strong>.</div>'
          );
        }
      },
      error: function(data) {
        $("#msg2").html(
          '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> There is some thing wrong.</div>'
        );
      }
    });
  });
});
  </script>
  
  
  
</body>
</html> 

<?php

function timeAgo($time_sec)
{
    $time_elapsed   = $time_sec;
    $seconds    = $time_elapsed ;
    $minutes    = round($time_elapsed / 60 );
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400 );
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640 );
    $years      = round($time_elapsed / 31207680 );
    // Seconds
    if($seconds <= 60){
        return "just now";
    }
    //Minutes
    else if($minutes <=60){
        if($minutes==1){
            return "one minute ago";
        }
        else{
            return "$minutes minutes ago";
        }
    }
    //Hours
    else if($hours <=24){
        if($hours==1){
            return "an hour ago";
        }else{
            return "$hours hrs ago";
        }
    }
    //Days
    else if($days <= 7){
        if($days==1){
            return "yesterday";
        }else{
            return "$days days ago";
        }
    }
    //Weeks
    else if($weeks <= 4.3){
        if($weeks==1){
            return "a week ago";
        }else{
            return "$weeks weeks ago";
        }
    }
    //Months
    else if($months <=12){
        if($months==1){
            return "a month ago";
        }else{
            return "$months months ago";
        }
    }
    //Years
    else{
        if($years==1){
            return "one year ago";
        }else{
            return "$years years ago";
        }
    }
}
?>
