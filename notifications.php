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
font-size:13px;
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Notifications</h6></span></div>
<div class="right">  </div>
</div>
</div>

<!-- registration form start -->
<div class = "page-content pt-5 pl-3">
 <div class="" style="margin-top:40px"></div>
<div class="list media-list sortable">
   
 <!----->
   <?php 
    
    $account_id    = $_COOKIE['id'];

    $sql = mysqli_query($con,"SELECT * FROM `notification` WHERE task_creator='$account_id'");
    $emp = mysqli_num_rows($sql);
    while ($get_alert = mysqli_fetch_array($sql)){
        $task_creator = $get_alert['task_creator'];
        $task_id      = $get_alert['task_id'];
        $last_time    = $get_alert['date'];

        date_default_timezone_set("Asia/Kolkata");

        $currnt_time  =  date("Y-m-d H:i:s");

        $to_time   = strtotime($last_time);
        $from_time = strtotime($currnt_time);
      
        $time_min = round(($from_time - $to_time) / 60). "minute ago";
        $time_sec = $time_min * 60 ;

        $time_elapsed = timeAgo($time_sec);
      
      

         //get user details
        $udetails = mysqli_query($con,"SELECT * FROM account WHERE account_id ='$task_creator'");
        $getudata = mysqli_fetch_array($udetails);
        $img = $getudata['img'];
       
    ?> 

<div class="card">
<div class="card-content">
<a href="browse-tasks-details.php?task_id=<?php echo $task_id; ?>" class="item-content">
<div class="row d-flex pt-1 pb-1" style="align-content:center;"> 

           <div class="col-2 text-center pt-2">
              <img class="" src="img/<?php echo $img; ?>"  style="border-radius: 50px;
    height: 50px;width: 50px;"> 
             
           </div>


          <div class="col-10">
               <p style="font-size: 16px;"><?php echo $get_alert['title'];?></p>
              
           <p> <span class="text-info"><i class=""></i>&nbsp; <?php echo $time_elapsed ;?></span></p>
            
          </div>
         
           
          
 </div>

</a>
</div>

</div>

<?php } ?>
<?php if($emp =='0'){ ?>
<center>
<img src="img/no-data.jpg" width="100%">
<h2> No Data Available</h2>
</center>
<?php } ?>
<!----->



 </div>  <!-----page----->


<div style="height:70px"></div>  
<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include----->

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
