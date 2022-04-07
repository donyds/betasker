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
      border-bottom: 1px solid rgba(0,0,0,.125);
      border-top:none;
    border-radius: 0px;
    border-left: 4px solid #7fb145;
        padding:0px 5px;
}

.border-radius-40{
border-radius: 40px;
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>My Tasks  </h6></span></div>
<div class="right">
<form id="demo-2">
  <!-- <input type="search" placeholder="Search"> -->
<!--   <i class="fa fa-search pr-3"></i> -->
</form>
</div>
</div>
</div>
<!---->
<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:7px"></div>
  
    <div class="toolbar tabbar toolbar-bottom" style="background:#05a0c7">
        <ul class="nav nav-tabs text-center" role="tablist" style="border:none;">
    <li class="nav-item col-6">
      <a class="nav-link <?php if($_GET['tab'] =='tasks'){ echo "active"; }else if($_GET['tab'] =='booking'){ echo ""; }else { echo "active"; }?>" data-toggle="tab" href="#home">As a Tasker</a>
    </li>
    <li class="nav-item col-6">
      <a class="nav-link <?php if($_GET['tab'] =='booking'){ echo "active"; }else if($_GET['tab'] =='tasks'){ echo ""; }else { echo ""; }?>" data-toggle="tab" href="#menu1">As a Poster</a>
    </li>
   
  </ul>
    </div>
      <?php 
      $account_id = $_COOKIE['id'];
      ?>
     
    <div class="tabs tabs-routable">
        <div class="tab-content">
    <div id="home" class="tab-pane <?php if($_GET['tab'] =='tasks'){ echo "show active"; }else if($_GET['tab'] =='booking'){ echo "";}else{ echo "show active";}?>"><br>
      <div class="filter ml-3 mt-2 col-5 mb-4">
      <div class="form-group">
         <select class="form-control" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
          
          <option value="">Select</option>
          <!-- <option value="my-task.php?tab=tasks">All tasks</option>
          <option value="my-task.php?val=runing&tab=tasks">Posted</option>
          <option value="my-task.php?val=archive&tab=tasks">Draft</option>
          <option value="my-task.php?val=close&tab=tasks">Completed</option> -->
          <option value="my-task.php?tab=tasks" <?php echo ($_GET['val'] ==  '') ? ' selected="selected"' : '';?>>All tasks</option>
          <option value="my-task.php?val=assign&tab=tasks" <?php echo ($_GET['val'] ==  'assign') ? ' selected="selected"' : '';?>>Assigned</option>
          <option value="my-task.php?val=close&tab=tasks" <?php echo ($_GET['val'] ==  'close') ? ' selected="selected"' : '';?>>Completed</option>
          <option value="my-task.php?val=offer&tab=tasks" <?php echo ($_GET['val'] ==  'offer') ? ' selected="selected"' : '';?>>Offered</option>
         </select>
      </div>  
     </div>
 <?php
if($_GET['val']){
  
$val  = $_GET['val'];
$api_url1       = 'https://sharukh.dbtechserver.online/betasker/controller/api/my_task.php?id='.$account_id.'&val='.$val;
}else{
$api_url1       = 'https://sharukh.dbtechserver.online/betasker/controller/api/my_task.php?id='.$account_id;
}
$json_data1     = file_get_contents($api_url1);
$response_data1 = json_decode($json_data1);
$getbokk1 = $response_data1->result;
$counts1 = COUNT($getbokk1);
if($counts1 > 0){
foreach($getbokk1 as $val2){
 
$title  = $val2->task_title;  
$tdescp = $val2->task_description;
 
?>
     
     <div class="card">
        <div class="card-content">
       
        <div class="row d-flex" style="align-content:center;" style="margin-right:0px!important;margin-left:0px!important;"> 
          <div class="col-8">
               <a href="browse-tasks-details.php?task_id=<?php echo $val2->task_id;?>" class="item-content">
               <h4 class="pl-3" style="font-size: 17px;">
                  <?php  if (strlen($title) > 30) {
                   echo ucwords(substr($title, 0, 30)."...");
                    } else {
                    echo ucwords($title);
                    }?>
               </h4>
                </a>
          <?php if(!empty($val2->task_location)){ ?>
          <div class="col-12"> <p><i class="fa fa-map-marker"></i> <?php echo ucwords($val2->task_location);?></p></div>
          <?php } ?>
          <?php
          //get day 
          $post_date  = $val2->date;
          $nameOfDay  = date('D', strtotime($post_date));
          //get month
          $datetime   = DateTime::createFromFormat('d-m-Y', $post_date);
          $month      = $datetime->format('M');
          // get day date
          $date_day   = date("d", strtotime($post_date));
          $time_pre   = explode(" ", $val2->time_prefer);
          $task_id    = $val2->task_id;
          $getoffer   = mysqli_query($con,"SELECT * FROM task_apply WHERE task_id='$task_id' AND account_id='$account_id'");
          $gte_data_apply = mysqli_fetch_array($getoffer);
          $count_ofer     = mysqli_num_rows($getoffer);
          
          $chk_stats = $gte_data_apply['status'];
           
          ?>
          <div class="col-12"> <p><i class="fa fa-calendar"></i> <?php echo $nameOfDay ."," ;?> <?php echo $month;?> <?php echo $date_day;?> </p></div>
          <div class="col-12"><p><i class="fa fa-clock-o"></i> <?php echo $time_pre[0];?></p></div>
          <div class="col-12">
          
          <?php if($_GET['val']=='offer'){ ?>
          <span class="text-primary">
            <?php if($chk_stats =='0'){ echo "<span style='color:danger;font-size:14px'><span class='badge badge-warning'>Pending</span></a></span>"; }else if($chk_stats =='1'){ echo "<span class='badge badge-success'>Accepted</span>"; } else if($chk_stats =='2'){ echo "<span class='badge badge-danger'>Denied</span>"; }?>
            </span>
          
            <?php }else{ ?>

          <p style="font-size:17px"><span class="text-primary"><?php if(($val2->status) =='runing'){ echo "<span style='color:green;font-size:14px'><span class='badge badge-info'>Open</span></span>"; }else if(($val2->status) =='assign'){ echo "<span style='color:green;font-size:14px'><span class='badge badge-success'>Assign</span></span>"; }else if(($val2->status) =='close'){ echo "<span class='badge badge-success'>Completed</span>"; }else if(($val2->status) == 'archive'){ echo "<span class='badge badge-danger'>Cancelled</span>"; }?></span> 
             
            <span class="pl-2" style="font-size:14px"><?php if($count_ofer > 0){ ?>
           <?php echo $count_ofer ." ". "Offers" ;?>
           <?php } ?></span> 
           
           <?php } ?>
           
          <?php
          $ques_t    = mysqli_query($con,"SELECT * FROM task_question WHERE task_id ='$task_id'");
          $tcountq   = mysqli_num_rows($ques_t);
          if($tcountq > 0){
          ?>
     
          <span class="pl-2" style="font-size:14px"><a href="browse-tasks-details.php?task_id=<?php echo $task_id;?>">
          Comments(<?php echo $tcountq; ?>)</a>
          </span>
          <?php } ?>
           
          </p>
           
          </div>
          
          </div>
           <div class="col-4 text-center"> <h4><?php echo $val2->task_currency.$val2->task_budget;?></h4>
             <a href="profile.php?id=<?php  echo $val2->account_id; ?>">
              <img class="" src="img/<?php echo $val2->img;?>" width="60" style="border-radius: 50px;height: 60px;width: 60px;"></a> 
           </div>
          </div>
       
    </div>
</div>
<?php }}else{ ?>
 <center class="mt-5 mb-3"> <img class="w-75" src="img/lets-get.png" width="100%">
       <h4 class="pt-3 pb-1"> No Data Available </h4>
       <p class="pb-1 px-4"> lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs</p>
       <a href="browse-tasks.php" class="btn btn-info text-white border-radius-40">Browse Open Tasks</a>
     </center>
<?php } ?>
</div>
    
   
    <div id="menu1" class="tab-pane fade <?php if($_GET['tab'] =='booking'){ echo "show active";}?>"><br>
      <div class="filter ml-3 mt-2 col-5 mb-4">
      <div class="form-group">
         <select class="form-control" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
          
          <option value="">Select</option>
          <!--<option value="my-task.php?val=archive&tab=booking">Draft</option>
          <option value="my-task.php?val=runing&tab=booking">Open</option>
          <option value="my-task.php?val=close&tab=booking">Close</option>
          <option value="my-task.php?tab=booking">All</option>-->
          <option value="my-task.php?tab=booking" <?php echo ($_GET['val'] ==  '') ? ' selected="selected"' : '';?>>All tasks</option>
          <option value="my-task.php?val=drafft&tab=booking" <?php echo ($_GET['val'] == 'drafft') ? ' selected="selected"' : '';?>>Draft</option>
          <option value="my-task.php?val=runing&tab=booking" <?php echo ($_GET['val'] == 'runing') ? ' selected="selected"' : '';?>>Posted</option>
          <option value="my-task.php?val=archive&tab=booking" <?php echo ($_GET['val'] == 'archive') ? ' selected="selected"' : '';?>>Cancelled</option>
          <option value="my-task.php?val=assign&tab=booking" <?php echo ($_GET['val'] == 'assign') ? ' selected="selected"' : '';?>>Assigned</option>
          <option value="my-task.php?val=close&tab=booking" <?php echo ($_GET['val'] == 'close') ? ' selected="selected"' : '';?>>Completed</option>
          
         </select>
      </div>  
     </div>
    
<?php
 
if($_GET['val']){
  
$val  = $_GET['val'];
$api_url       = 'https://sharukh.dbtechserver.online/betasker/controller/api/mybooking.php?id='.$account_id.'&val='.$val;
}else{
$api_url       = 'https://sharukh.dbtechserver.online/betasker/controller/api/mybooking.php?id='.$account_id;
}
$json_data     = file_get_contents($api_url);
$response_data = json_decode($json_data);
$getbokk = $response_data->result;
$counts = COUNT($getbokk);
if($counts > 0){
foreach($getbokk as $val){
     
$titl  = $val->task_title;  
$tdesc = $val->task_description;
 
?>
     
     <div class="card">
        <div class="card-content">
       
        <div class="row d-flex" style="align-content:center;" style="margin-right:0px!important;margin-left:0px!important;"> 
          <div class="col-8">
               <a href="browse-tasks-details.php?task_id=<?php echo $val->task_id;?>" class="item-content">
               <h4 style="font-size: 20px;">
                    <?php  if (strlen($titl) > 30) {
                   echo ucwords(substr($titl, 0, 30)."...");
                    } else {
                    echo ucwords($titl);
                 
                    }?>
               </h4>
               </a>
          <?php if(!empty($val->task_location)){ ?>
          <div class="col-12"> <p><i class="fa fa-map-marker"></i> <?php echo ucwords($val->task_location);?></p></div>
           <?php } ?>
           <?php
            //get day 
            $post_dat = $val->date;
            $nameOfDy = date('D', strtotime($post_dat));
            //get month
            $datetim  = DateTime::createFromFormat('d-m-Y', $post_dat);
            $months     = $datetim->format('M');
            // get day date
            $date_dy        = date("d", strtotime($post_dat));
            $tim_pre        = explode(" ", $val->time_prefer);
            $task_ids       = $val->task_id;
            $getoffers      = mysqli_query($con,"SELECT * FROM task_apply WHERE task_id='$task_ids'");
            $count_ofers    = mysqli_num_rows($getoffers);

            
            
          ?>
          <div class="col-12"> <p><i class="fa fa-calendar"></i> <?php echo $nameOfDy ."," ;?> <?php echo $months;?> <?php echo $date_dy;?> </p></div>
          <div class="col-12"><p><i class="fa fa-clock-o"></i> <?php echo $tim_pre[0];?></p></div>
          <div class="col-12">
          <p style="font-size:17px">

         


            <span class="text-primary">
                <?php if(($val->status) =='archive'){ echo "<span style='color:danger;font-size:14px'><span class='badge badge-danger'>Cancelled</span></a></span>"; }else if(($val->status) =='close'){ echo "<span class='badge badge-success'>Completed</span>"; }else if(($val->status) =='assign'){ echo "<span class='badge badge-info'>Assign</span>"; }else if(($val->status) =='drafft'){ echo "<span class='badge badge-warning'>Draft</span>"; }else if(($val->status) =='runing'){ echo "<span style='color:green;font-size:14px'><span class='badge badge-success'>Posted</span></span>"; }?></span> 
            <span class="pl-2" style="font-size:14px"><?php if($count_ofers > 0){ ?>
           <?php echo $count_ofers ." ". "Offers" ;?>
           <?php } ?>
          </span> 
            
          <?php
          $ques_t    = mysqli_query($con,"SELECT * FROM task_question WHERE task_id ='$task_ids'");
          $tcountq   = mysqli_num_rows($ques_t);
          if($tcountq > 0){
          ?>
     
          <span class="pl-2" style="font-size:14px"><a href="browse-tasks-details.php?task_id=<?php echo $task_ids;?>">
          Comments(<?php echo $tcountq; ?>)</a>
          </span>
          <?php } ?>
           <!-- <span class="text-primary">
                <?php //if(($val->status) =='runing'){ echo "<span style='color:green;font-size:14px'><a href='controller/api/archive.php?task_id=$task_ids&status=archive'><span class='badge badge-danger'>Archive</span></a></span>"; }else if(($val->status) =='close'){ echo "<span class='badge badge-success'>Completed</span>"; }else if(($val->status) =='assign'){ echo "<span class='badge badge-info'>Assign</span>"; }else{ echo "<span style='color:green;font-size:14px'><a href='controller/api/archive.php?task_id=$task_ids&status=runing'><span class='badge badge-success'>Unarchive</span>"; }?></span> 
            <span class="pl-2" style="font-size:14px"><?php // if($count_ofers > 0){ ?>
           <?php //echo $count_ofers ." ". "Offers" ;?>
           <?php //} ?></span>  -->
         
          </p>
           
          </div>
                         
          </div>
           <div class="col-4 text-center"> <h4><?php echo $val->task_currency.$val->task_budget;?></h4>
             <a href="profile.php?id=<?php  echo $val->account_id; ?>">
              <img class="" src="img/<?php echo $val->img;?>" width="60" style="border-radius: 50px; height: 60px;width: 60px;"></a>
           </div>
          </div>
        
    </div>
</div>
<?php }}else{ ?>
 <center class="mt-5 mb-3"> <img class="w-75" src="img/lets-get.png" width="100%">
       <h4 class="pt-3 pb-1"> No Data Available</h4>

        <p class="pb-1 px-4"> lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs</p>
       <a href="postatask.php" class="btn btn-info text-white border-radius-40">Post a Task</a>

     </center>
<?php } ?>
</div>
   
  </div>
    </div>
  </div>
<div class="row">
<div class="container pl-0 pr-0">
</div><!--container-->
</div><!---row--->
</div>
<div style="height:110px"></div>
<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include-----> 
</div><!----page-content---> 
</div>
</body>
</html>