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


.circle{
  border-radius:50%;
}
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
font-weight: 600;
}

i.fa.fa-angle-right {
    font-size: 30px !important;
    padding-top: 15px !important;
    padding-left: 20px;
}
.card{
  margin:0px 0px 7px 0px;
      border-bottom: 1px solid rgba(0,0,0,.125);
      border-top:none;
    border-radius: 0px;
    border-left: 4px solid #7fb145;
        padding:0px 5px;
}
</style>
</head>


<body class="bg-set">
<div class = "views">
<div class="navbar">
<div class="navbar-bg"></div>
<div class="navbar-inner sliding">
<div class="left">
<a href="browse-tasks.php" class="link back">
<i class="icon icon-back"></i>
</a>
</div>
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Chat’s</h6></span></div>

</div>
</div>

<!-- registration form start -->
<div class = "page-content pt-5 pl-3">

  <div class="" style="margin-top:40px"></div>

<div class="list media-list sortable">


<!------------>
<?php

include_once 'controller/config.php';
$account_id = $_COOKIE['id']; 



$sql = mysqli_query($con,"SELECT * FROM chat_room WHERE FIND_IN_SET('$account_id',access_id) ORDER BY id DESC");


          
while($data =mysqli_fetch_array($sql)){
    
    $user_id      = $data['user_id'];
    $room_id      = $data['room_id'];
    $str          =  explode(" ",$data['room_title']);
    $acc_id       = $data['access_id'];
    $matches      = explode(',', $acc_id);
    
    $chat_receiver  =   $matches[0];
    $chat_creator   =   $matches[1];

    $sqls = mysqli_query($con,"SELECT * FROM account WHERE account_id='$user_id'");
    $datas = mysqli_fetch_array($sqls);

    //get task id 
    $get_room_iddata = mysqli_query($con,"SELECT * FROM `chat_room` WHERE room_id = '$room_id'");
    $dta_room        = mysqli_fetch_array($get_room_iddata) ;
    $data_task_id    = $dta_room['task_id'];

    //check award data 

    $awardclose = mysqli_query($con,"SELECT * FROM `task_create` WHERE task_id = '$data_task_id' AND status='close'");
    $awrd_is    = mysqli_num_rows($awardclose) ;
    $get_close_date   = mysqli_fetch_array($awardclose) ;

    $getclose_date = $get_close_date['task_close'];
     //add 15 day when close project
     $ad_fiftenday     = date('Y-m-d', strtotime($getclose_date. ' + 50 days'));
     $close_date_from  = date("Y-m-d");

  
  if($account_id == $chat_receiver){
   //count msg here
    $get_msg = mysqli_query($con,"SELECT * FROM chat_message WHERE account_id='$chat_creator' AND status='0' AND room_id='$room_id'");
    $get_count_msg  = mysqli_num_rows($get_msg);
    $get_rom        = mysqli_fetch_array($get_msg);
    $get_rom_id     = $get_rom['room_id'];
 
   }else if($account_id == $chat_creator){

  //count msg here
    $get_msg = mysqli_query($con,"SELECT * FROM chat_message WHERE account_id='$chat_receiver' AND status='0' AND room_id='$room_id'");
    $get_count_msg  = mysqli_num_rows($get_msg);
    $get_rom        = mysqli_fetch_array($get_msg);
    $get_rom_id     = $get_rom['room_id'];
    
  }

?>


<div class="card">
<div class="card-content card-content-padding set-ft">
<a href="view-chat.php?room_id=<?php echo $data['room_id'];?>" class="item-link item-content">
<div class="row pt-2 pb-2"> 
 
<div class="col-80 item-inner">
 <div class="item-inner">
<div class="media pt-2">
<img class="img-fluid circle" src="img/<?php echo $datas['img'];?>" class="mr-3" alt="..." style="border-radius: 50px;
    height: 60px;width: 60px;">
<div class="media-body">
<h5 class="mt-1 text-dark pl-2"><?php echo ucwords($str[0]);?> - <?php echo ucwords(substr($data['task_title'],0,30)."...");?><?php if($get_rom_id == $room_id){ echo "(".$get_count_msg.")"; }?></h5>

<!--All chat delete after work is done and close task then 50 days go>-->
<?php if(($awrd_is > 0 ) && ($close_date_from > $ad_fiftenday)){ ?>
    <small><a href="controller/api/delete_chat_user.php?id=<?php echo $room_id;?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash text-danger"></i></a></small>

<?php } ?>
<!-- delete chat -->


</div>
</div>
</div>

</div>
<div class="col-20 item-inner">
  <i class="fa fa-angle-right pt-3" style="font-size:18px"></i>
</div>
</div>
</a>
</div>
</div>
<?php }  ?>
<!--------->



</div>  <!-----page----->


<div style="height:70px"></div>  


<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include----->

</body>
</html>