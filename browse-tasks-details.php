<?php include("controller/cookie.php");?>

<?php

include'controller/config.php';
$task_id   = $_GET['task_id'];
$cookie_id = $_COOKIE['id'];
    
//$taskid = $_GET['task_id'];

$api_url = 'https://sharukh.dbtechserver.online/betasker/controller/api/get_job_byid.php?task_id='.$task_id;
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);
$task_poster = $response_data->account_id;

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

.dropdown-menu{
    right: 0px;}
.dropdown-menu a {
color:#0000;}

.navbar-inner, .toolbar-inner{
overflow:unset;
}

a.dropdown-item {
    color: #000 !important;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: -40px;
    z-index: 1000;
    float: left;
    min-width: 0rem;
}

.dropdown-toggle::after{
display:none;}
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Details tasks</h6></span></div>

<div class="right">
<a href="javascript:void(0)" class="share-btn"><i class="fa fa-share-alt pr-3"></i></a>

<?php 
    $check2 = mysqli_query($con,"SELECT * FROM task_create WHERE task_id='$task_id' AND account_id='$cookie_id'");
    $count2 = mysqli_num_rows($check2);
    if($count2 =='1'){
        
    ?>
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
        </a>


        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="edit_task.php?task_id=<?php echo $_GET['task_id'];?>">Edit</a>
    <!-- <a class="dropdown-item" href="#">Copy</a> -->
    <a class="dropdown-item" href="controller/api/archive.php?task_id=<?php echo $_GET['task_id'];?>&status=archive">Cansel Task</a>
        </div>

        <?php } ?>


</div>


</div>
</div>
<div class="social-btns" style="display:none;">
  <ul class="social">
 <li>
    <a class="fbtn share facebook" href="https://www.facebook.com/sharer/sharer.php?u=url"><i class="fa fa-facebook"></i></a> 
   </li>
    <li>
    <a class="fbtn share twitter" href="https://twitter.com/intent/tweet?text=title&amp;url=url&amp;via=creativedevs"><i class="fa fa-twitter"></i></a> 
  </li>
 <li>
    <a class="fbtn share linkedin" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=url&amp;title=title&amp;source=url/"><i class="fa fa-linkedin"></i></a>
  </li>
 
</ul>
</div>

<!---->
<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:40px"></div>
 


    <div class="container pl-0 pr-0">

<div class="card-outline px-2">

<div class="card-content card-content-padding pb-3">


  <div class="row">
   
   <div class="col-12 mt-2 pb-2 pr-0 mr-0">
     <h5><?php  echo ucwords($response_data->task_title); ?></h5>
   </div>

   <div class="col-3 mt-2 pb-2 pr-0 mr-0">
    <a href="profile.php?id=<?php echo $response_data->account_id; ?>">
    <img class="img-fluid w-75 float-left circle" src="img/<?php  echo $response_data->img; ?>" alt="" style="margin-right: 10px; border-radius: 50px;
    height: 60px;width: 60px;">
    </a> 
    </div>
  

   <div class="col-9 mt-2 pl-0 ml-0 pb-2">
     <h3 class="pt-2" style="font-size:16px;color:#05a0c7">POSTED BY</h3>
     <p class=""><strong> <?php  echo ucwords($response_data->fullname); ?> </strong></p>

    
      <!--<p class="text-uppercase"><strong></strong></p>-->
       <!--<p class="text-uppercase text-info"><strong>Opne</strong></p>-->
      <p>
      <?php
      
      $date    = $response_data->date;
      $time    = $response_data->time;
      //$newDate = date("Y-m-d", strtotime($date));
      
      $last_time = $response_data->timestamp;
      
      date_default_timezone_set("Asia/Kolkata");
      $cdate       = date('Y-m-d');

      $currnt_time  =  date("Y-m-d H:i:s");

      $to_time   = strtotime($last_time);
      $from_time = strtotime($currnt_time);
      
      $time_min = round(($from_time - $to_time) / 60). "minute ago";
      $time_sec = $time_min * 60 ;

      $time_elapsed = timeAgo($time_sec);
      
      echo $time_elapsed;
       

      // $datetime1 = new DateTime($newDate);
      // $datetime2 = new DateTime($cdate);
      // $interval = $datetime1->diff($datetime2);
      // $today =  $interval->format('%a');
  
      //  if($today =='0'){
      //   echo "Today";
      //  }else if($today < 30) {
      //    echo $today." "."days ago";
      //  }else{
      //   echo "Few month ago";
      //  }

      ?>
    
    </p>

   </div>
   
    
</div> <hr>

 <div class="row">
 <div class="col-3 mt-2 pb-2 text-center"><i class="fa fa-map-marker" style="font-size:45px;color:#455a646e;text-align:center;"></i></div>
  

<div class="col-9 mt-2 pl-0 ml-0 pb-2">
    <h3 class="pt-2" style="font-size:16px;color:#05a0c7;text-transform:uppercase;">Location</h3>
    <?php
    $locations = $response_data->task_location;
    if(!empty($locations)){
    ?>
    <p class=""><strong> <?php  echo ucwords($locations);?> </strong></p>
    <?php }else{ ?>
    
    <p class=""><strong> <?php  echo "Remotely";?> </strong></p>

    <?php } ?>
 </div>
</div>


<hr>

<div class="row">
<div class="col-3 mt-2 pb-2 text-center"><i class="fa fa-calendar" style="font-size:45px;color:#455a646e;text-align:center;"></i></div>
  
 <?php
  //get day 
  $post_date = $response_data->task_end;
  $nameOfDay = date('D', strtotime($post_date));
  //get month
  $datetime  = DateTime::createFromFormat('Y-m-d', $post_date);
  $month     = $datetime->format('M');
  // get day date
  $date_day  = date("d", strtotime($post_date));

 ?>

<div class="col-9 mt-2 pl-0 ml-0 pb-2">
<h3 class="pt-2" style="font-size:16px;color:#05a0c7;text-transform:uppercase;">To be Done on</h3>
 <p class=""><strong> <?php echo ucwords($nameOfDay) ."," ;?> <?php echo ucwords($month);?> <?php echo $date_day;?> </strong></p>

 <p class=""><?php  echo ucwords($response_data->time_prefer);?></p>
       
 </div>
</div>
<hr>

<div class="container mt-3">
  <div class="pz-box">
 <div class="row w-100">
  
   <div class="col-12 text-center pl-0 pr-0" style="background: #eeeee2;"><h5 class="pt-3 pb-3">TASK PRICE</h5></div>
 
   <div class="col-12 text-center"><h1 class="pt-4 pb-4">
    
    <?php if(($response_data->task_type) == 'Hourly'){ ?>
    <p>Approx <?php echo $response_data->task_hour; ?>.0hrs</p>
    <?php } ?>
    <?php  echo ucwords($response_data->task_currency).ucwords($response_data->task_budget); ?></h1></div>

   <div class="col-8 mx-auto text-center">
       <!--<a type="button" class="col button button-large button-round button-fill text-white pt-2 pb-2 btn-success text-capitalize mb-3" style="font-size: 20px;min-height: 50px;">Make an Offer</a></div>-->
       
      <!--  <a href="tasks-details.php?task_id=<?php echo $_GET['task_id'];?>" class="col button button-large button-round button-fill text-white pb-2 btn-success text-capitalize mb-3" style="font-size: 16px;">Make an Offer</a> -->

       <?php if($cookie_id != $task_poster ){ 
        $bank      = mysqli_query($con,"SELECT * FROM bank_details WHERE account_id ='$cookie_id' AND status='1'");
        $billing   = mysqli_query($con,"SELECT * FROM billing_details WHERE account_id ='$cookie_id' AND status='1'");

        $bnk  = mysqli_num_rows($bank);  
        $bill = mysqli_num_rows($billing);  

        if($bnk > 0 && $bill > 0){ ?>
        
          <a href="make-an-offer.php?task_id=<?php echo $_GET['task_id'];?>" class="col button button-large button-round button-fill text-white pb-2 btn-success text-capitalize mb-3" style="font-size: 16px;">Make an Offer</a>


         <?php }else{ ?>

         
         <a href="confirm-your-offer.php?task_id=<?php echo $_GET['task_id'];?>" class="col button button-large button-round button-fill text-white pb-2 btn-success text-capitalize mb-3" style="font-size: 16px;">Make an Offer</a>

        <?php } }else{ ?>
        

        <a href="adbudget.php?task_id=<?php echo $_GET['task_id'];?>" class="badge badge-info mb-3" style="font-size:15px;color:#fff!important;">Increase Budget</a>

        <?php }?>

        
        <!-- check task is closed or not -->
        <?php       
        $chk_taks_award = mysqli_query($con,"SELECT * FROM task_award WHERE task_id='$task_id' AND task_receiver='$cookie_id' AND is_close='1'");
        $get_tclose     = mysqli_num_rows($chk_taks_award);
        
        if($get_tclose > 0){
        
        ?>
        <a href="ad_review_receiver.php?task_id=<?php echo $_GET['task_id'];?>" class="badge badge-info mb-3" style="font-size:15px;color:#fff!important;">Give Review</a>

        <?php } ?>
    </div>
 </div> 
</div>  
</div>


<div class="row mt-3">
 
 <div class="col-12">
   <h4 style="font-size: 19px">Details</h4>
   <p class=""><?php  echo ucwords($response_data->task_description); ?></p>
   
</div> 

<div class="col-12">
  <div class="read-more-content">
            <span>
              <div class="row" style="display: inline-flex;">
                
                <?php
                  include_once 'controller/config.php';
                  $getimg_task = mysqli_query($con,"SELECT * FROM task_img WHERE task_id ='$task_id'");
                  while($taskimg = mysqli_fetch_array($getimg_task)){
                ?>  
                <div class="col-3 pb-3 mb-2">
                <img src="img/<?php echo $taskimg['img'];?>" width="70px" style="float:left; margin-left:5px;">
                </div>

                <?php } ?>
              
              </div>  
            </span>
        </div>
        <button class="read-more-btn" title="Read More">More</button>
</div>
    
</div>  <hr>

<?php
$task_count= mysqli_query($con,"SELECT * FROM task_apply WHERE task_id ='$task_id'");
$countask  = mysqli_num_rows($task_count);
?>
<?php if($cookie_id == $task_poster ){ ?>
<div class="row mt-3">
<div class="col-6">
 <h4 style="font-size: 19px">OFFERS <span>(<?php echo $countask;?>)</span> </h4>
</div>
<div class="col-6 text-right">
 <small><a href="tasks-details.php?task_id=<?php echo $task_id;?>">View all</a></small>
</div>
 </div> 

<div class="row mt-3">
<?php
$task_count= mysqli_query($con,"SELECT * FROM task_apply WHERE task_id ='$task_id'");
while($gettask   = mysqli_fetch_array($task_count)){

  $posterid  = $gettask['account_id'];
  $udet = mysqli_query($con,"SELECT * FROM account WHERE account_id ='$posterid'");
  $uimgdetail  = mysqli_fetch_array($udet);
  $fullnames   = $uimgdetail['fullname'];
  $userimg     = $uimgdetail['img'];

?>
<div class="col-12">
 <div class="card mt-2 mb-2">
        <div class="card-content">
            <!--browse-tasks-details.php-->
        <a href="#" class="item-content">
        <div class="row d-flex pt-3 pb-2" style="align-content:center;"> 
         
         <div class="col-4 text-center">
             <a href="profile.php?id=<?php  echo $posterid; ?>">
             <img class="" style="border-radius: 50%;" src="img/<?php echo $userimg;?>" width="60">
             </a>
           </div>

          <div class="col-8">
               <a href="tasks-details.php?task_id=<?php echo $gettask['task_id'];?>" class="item-content">
               <h4 style="font-size: 17px;"><?php echo $fullnames;?></h4>
              <p><?php echo $gettask['task_proposal'];?></p>
               </a>
          </div>
           
          </div>
        </a>
    </div>
</div>
</div>
<!---card--->


<?php } ?>
</div>  
<?php } ?>


<?php
$ques_t    = mysqli_query($con,"SELECT * FROM task_question WHERE task_id ='$task_id'");
$tcountq   = mysqli_num_rows($ques_t);
?>
<div class="row mt-3">
<div class="col-12">
<h4>Question(<?php echo $tcountq; ?>)</h4>
 <p class="pera">Please don't share personal info issurance won't typesetting industry. </p>
</div>  
</div>


 <div class="row mt-3">

 <!-- <div class="col-2 pr-0 mr-0">
   <div class="qu-user-img">
     <img class="img-fluid" src="https://avatars1.githubusercontent.com/u/24622175?v=4">
   </div>
 </div>  -->
  <?php if($cookie_id != $task_poster ){ ?>

  <div class="col-12 pl-0 ml-0">
    <form class="ml-2" method="POST" action="controller/api/question.php" enctype="multipart/form-data">
    <div class="form-group">
          <textarea class="form-control" id="" placeholder="Ask a Question" rows="3" name="question" required=""></textarea>
    <input type="hidden" name="task_id" value="<?php echo $_GET['task_id'];?>">
    </div> 

<div class="form-group">
  <div class="row pl-2 pr-2">
 <div class="col-2">
 <div class="image-upload">
    <label for="file-input" >
        <i class="fa fa-paperclip" style="font-size:25px;"></i>
    </label>

    <input id="file-input" type="file" name="qimg"/>
</div>
</div>

<div class="col-5">
<div id="image-holder"> </div>
</div>


<div class="col-5 text-right"><button type="submit" name="submit" class="pera btn btn-primary">Send</button> </div>
</div>
</div>
</form>
</div>
<?php } ?>
 </div><!----->

 <div class="row mt-3">
   <?php
      //include_once 'controller/config.php';
      $getq = mysqli_query($con,"SELECT * FROM task_question WHERE task_id ='$task_id'");
      while($question = mysqli_fetch_array($getq)){
        $idsu   = $question['uid'];
        $repid  = $question['repid'];
        $sender = $question['sender'];


        $getu = mysqli_query($con,"SELECT * FROM account WHERE account_id ='$idsu'");
        $udetail = mysqli_fetch_array($getu);
        $uname   = $udetail['fullname'];
        $uimg    = $udetail['img'];

        $count_rep_ad = mysqli_query($con,"SELECT * FROM question_rep WHERE rep_id ='$repid' AND uid='$idsu'");
        $count_rep_u  = mysqli_query($con,"SELECT * FROM question_rep WHERE rep_id ='$repid' AND uid='$sender'");
        $rep_num_ad   = mysqli_num_rows($count_rep_ad);
        $rep_num_u    = mysqli_num_rows($count_rep_u);

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
  <p class="qshort<?php echo $question['id']; ?>"><?php echo substr($question['question'],0,120)."..."; ?></p>
  
  <p class="qall<?php echo $question['id']; ?>" style="display:none;"><?php echo $question['question']; ?></p>
  
  <a href="#" id="idq<?php echo $question['id']; ?>" style="color: #05a0c7!important;">More</a>
  <a href="#" id="idh<?php echo $question['id']; ?>" style="display:none;color: #05a0c7!important;">Less</a>
  
  <p><small><?php echo $question['date']; ?></small>
  
  <script>
  $(document).ready(function(){
  $("#idq<?php echo $question['id']; ?>").click(function(){
    $(".qall<?php echo $question['id']; ?>").show();
    $(".qshort<?php echo $question['id']; ?>").hide();
    $("#idh<?php echo $question['id']; ?>").show();
    $("#idq<?php echo $question['id']; ?>").hide();
     
     }); 

  $("#idh<?php echo $question['id']; ?>").click(function(){
    $(".qall<?php echo $question['id']; ?>").hide();
    $(".qshort<?php echo $question['id']; ?>").show();
    $("#idh<?php echo $question['id']; ?>").hide();
    $("#idq<?php echo $question['id']; ?>").show();
     
     }); 
  });
  </script>

  <?php if($cookie_id == $sender ){ ?>
  <!-- show comment from admin -->
  
  <a href="task-details-reply.php?rep_id=<?php echo $question['repid']; ?>" style="padding-left:20px;"><i class="fa fa-reply"></i> Reply<?php if($rep_num_ad > 0){ echo "(".$rep_num_ad.")"; } ?>
  </a>
 

  <?php } ?>

  

  <?php if($cookie_id == $idsu ){ ?>
  <!-- show comment from user -->
  
   <?php if($rep_num_u > 0){ ?>

  <a href="task-details-reply.php?rep_id=<?php echo $question['repid']; ?>" style="padding-left:20px;"><i class="fa fa-reply"></i> Reply<?php if($rep_num_u > 0){ echo "(".$rep_num_u.")"; } ?>
  </a>

  <?php } }?>
  
  <?php if($cookie_id != $sender && $cookie_id != $idsu){

    if($rep_num_u > 0){ ?>

  <a href="task-details-view.php?rep_id=<?php echo $question['repid']; ?>" style="padding-left:20px;"><i class="fa fa-reply"></i> View<?php if($rep_num_u > 0){ echo "(".$rep_num_u.")"; } ?>
  </a>

  <?php } } ?>

   
   <span><img class="pull-right functioncall<?php echo $question['id']; ?>" src="img/more.png" width="30"> </span>

   </p>

   <div class="toggle-boxbottom" id="q<?php echo $question['id']; ?>" style="display:none;">
     <ul>
         <li><a href="#">Report</a></li>
         <li><a href="#">Community Guideline</a></li>
     </ul>
   </div>  
 </div>
  
  <script>

$(document).ready(function(){
  $(".functioncall<?php echo $question['id']; ?>").click(function(){
  
  $('#q<?php echo $question['id']; ?> ').toggle();
  
  });
});

</script>

 <?php } ?>
 
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
<script type="text/javascript">

$(document).ready(function(){
  $(".share-btn").click(function(){
    /*  alert("The paragraph was clicked.");*/
    $(".social-btns").toggle("slow");
  });
});

</script>

<script>
            $(document).ready(function () {
                $(".read-more-btn").click(function () {
                    $(this).prev().slideToggle();
                    if ($(this).text() == "More") {
                        $(this).text("Less");
                    } else {
                        $(this).text("More");
                    }
                });
            });
        </script>

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

