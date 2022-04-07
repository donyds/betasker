<?php 
include("controller/cookie.php");

//include_once 'controller/config.php';
$account_id = $_COOKIE['id']; 
$room_id    = $_GET['room_id'];

$sql = mysqli_query($con,"SELECT * FROM chat_room WHERE FIND_IN_SET('$account_id',access_id)");
    
    while($data =mysqli_fetch_array($sql)){
    
    $acc_id       = $data['access_id'];
    $matches      = explode(',', $acc_id);

        $chat_receiver  =   $matches[0];
    
        $chat_creator   =   $matches[1];

        
if($account_id == $chat_receiver){
//count msg here

$update = mysqli_query($con,"UPDATE chat_message SET status='1' WHERE account_id='$chat_creator' AND room_id='$room_id'");


}else if($account_id == $chat_creator){

//count msg here
$update = mysqli_query($con,"UPDATE chat_message SET status='1' WHERE account_id='$chat_receiver' AND room_id='$room_id'");

}
}
?>

<!DOCTYPE html> 
<html>
<head>
<meta name = "viewport" content = "width = device-width, initial-scale = 1,maximum-scale = 1, minimum-scale = 1, user-scalable = no, minimal-ui" />
<meta name = "apple-mobile-web-app-capable" content = "yes" />
<meta name="theme-color" content="#05b2de">
<meta name = "apple-mobile-web-app-status-bar-style" content = "black" />
<title>Betasker</title>
<link rel = "stylesheet"href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.min.css" />
<link rel = "stylesheet"href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.colors.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

    .btn-info.focus, .btn-info:focus{
        box-shadow: none;}
.messages{
background:#f7f7f7;
}
.message-sent .message-text::before{
 border-bottom: 8px solid #05a0c7 !important;
}


.bg-set{
background-color:#fff;
background:#fff;
background-image:none;
}

.message{
    max-width:100% !important;
}

.messages-content {
    background: #f7f7f7;
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

#img_url {
  background: #ddd;
  width:100px;
  height: 90px;
  display: block;
}

.toggicon{
    bottom: 50px;
    right: 20px;
    color: #000;
    font-size: 34px;
    margin-right: 10px;
    margin-left: 5px;
}

.toggicon2{
    bottom: 50px;
    right: 20px;
    color: #000;
    font-size: 34px;
    margin-right: 10px;
    margin-left: 5px;
}

.page-content.pt-5.pl-3{
position:relative;
}


.view_logtabs {
    position: absolute;
    bottom: 50px;
    left: 0px;
    width: 200px;
    z-index: 9999;
}

.view_logtabs li {
    list-style: none;
    line-height: 50px;
}


.showtabs {
    position: absolute;
    bottom: 50px;
    left: 0px;
    width: 200px;
    z-index: 9999;
}

.showtabs li {
    list-style: none;
    line-height: 50px;
}


.chatbox {
    margin-bottom: 50px !important;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function (e) {
 $("#form").on('submit',(function(e) {
  e.preventDefault();
  
  var text_val = $('.msg').val();

  if(text_val ==''){
  
  alert("Empty Message");

  }else{
  play_notify();
  $.ajax({
   url: "controller/api/chat.php?room_id=<?php echo htmlspecialchars($_GET['room_id']); ?>",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
    if (data.status=='success') {
       
	   $("#form")[0].reset();
       $(".imgdem").hide();
       
		}else{
			$("#form")[0].reset();
			$(".imgdem").hide();
		}
    
      },
             
    });

    }

 }));
});

function play_notify() {
  
  const audio = new Audio("https://sharukh.dbtechserver.online/betasker/img/msg_alert.mp3");
  audio.play();

    }


</script>

</head>

<body class="bg-set">
<div class = "views">
<div class="navbar">
<div class="navbar-bg"></div>
<div class="navbar-inner sliding">
<div class="left">
<a href="chat-list.php" class="link back">
<i class="icon icon-back"></i>
</a>
</div>


<?php 
     $uid      = $_COOKIE['id'];
     $room_id  = htmlspecialchars($_GET['room_id']);
     
     $getuame  = mysqli_query($con,"SELECT * FROM `chat_room` where room_id = '$room_id'");

    $chk_u = mysqli_fetch_array($getuame);
       
    $room_title  = $chk_u['room_title'];
    $task_id     = $chk_u['task_id'];
    $str         = explode(" ",$room_title);
         
?>
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Chat with <?php echo ucwords($str[0]);?> - <?php echo ucwords(substr($chk_u['task_title'],0,30)."...");?></h6></span></div>
</div>
</div>

<!-- registration form start -->
<div class = "page-content pt-5 pl-3">

<span class="showtabs" style="display:none;">
<ul>
<li>
<a href="chat_pay_req.php?id=<?php echo $_GET['room_id'];?>&task_id=<?php echo $task_id;?>"><button type="submit" name="submit" class="pera btn btn-primary">Add Fund Request</button></a>
</li>
<li>
<!-- <a href="transfer.php"><button type="submit" name="submit" class="pera btn btn-dark">Transfer Fund</button></a> -->
</li>
</ul>
</span>

<span class="view_logtabs" style="display:none;">
<ul>
<li>
<a href="req_list_creator.php?chat=<?php echo $_GET['room_id'];?>&task_id=<?php echo $task_id;?>"><button type="submit" name="submit" class="pera btn btn-primary">View Fund Request</button></a>
</li>
<li>
<!-- <a href="transfer.php"><button type="submit" name="submit" class="pera btn btn-dark">Transfer Fund</button></a> -->
</li>
</ul>
</span>

<form id="form" method="post" enctype="multipart/form-data">


  

<div class = "toolbar messagebar mt-5">
<div class = "toolbar-inner">
<?php

$chk_receiver  = mysqli_query($con,"SELECT * FROM `task_award` where task_receiver = '$uid' AND task_id='$task_id'");
$chk_c = mysqli_num_rows($chk_receiver);
if($chk_c > 0){
?>
<span class="toggicon">
<i class="fa fa-plus-circle"></i>
</span>
<?php } ?>

<?php

$task_creator  = mysqli_query($con,"SELECT * FROM `task_award` where task_creator = '$uid' AND task_id='$task_id'");
$chk_o = mysqli_num_rows($task_creator);
if($chk_o > 0){
?>
<span class="toggicon2">
<i class="fa fa-plus-circle view_log"></i>
</span>
<?php } ?>
<img src="" class="imgdem" id="img_url" alt="your image" style="display: none;">
  
<textarea class="msg" name="chat" placeholder = "Message"></textarea>

<button type="button" class="btn btn-info link" style="background: no-repeat;
    border: none;
    color: #05a0c7;
    font-size: 25px;"><div class="image-upload">
    <label for="file-input" class="mb-0">
       <i class="fa fa-paperclip"></i>
    </label>


    <input id="file-input" type="file" name="image" class="img" onChange="img_pathUrl(this);"/>

</div>
</button>

<button type="submit" class="btn btn-info link">Send</button>
</div>
</div>
</form>
<div class = "page-content messages-content">
<div class = "messages">

<div class="" style="margin-top:40px"></div>

<div class="chatbox">
    
</div>

</div>
</div>
</div>
</div>


<script> 
  $(document).ready(function(){
    setInterval(function(){
      $('.chatbox').load('controller/chats.php?room_id=<?php echo htmlspecialchars($_GET['room_id']); ?>')
    }      
                ,1800);
 
  });
</script>
<script type="text/javascript">
	
function goBack() {
window.history.back();
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
      function img_pathUrl(input){
        $(".imgdem").show();

        $('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
    }

</script>





<script>
$(document).ready(function(){
  $(".fa-plus-circle").click(function(){
    $(".showtabs").toggle();
  });

  $(".view_log").click(function(){
    $(".view_logtabs").toggle();
  });

});


</script>

</body>

</html>