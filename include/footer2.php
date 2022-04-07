
<style type="text/css">
	img.foo-ico {
    width: 30px;
    height: auto;
    padding-bottom: 15px;
}

.ftmanage {
    color: unset !important;
}

  .change {
    filter: grayscale(100%);
}

 .actives {
    filter: unset;
    color:#04a0c8 !important;
}



/*.active_div {
    filter: unset !important;
    color:#04a0c8;
}*/

.navbar a.link, .subnavbar a.link, .toolbar a.link{
color:unset ;}
</style>

<div class="footer">
<div class="toolbar" style="background: linear-gradient(to right, #f7f7f7, #f7f7f7);height: 62px;">
<div class="toolbar-inner" style="padding-bottom: 10px;padding-top: 10px;">
<?php
$role = $_COOKIE['role'];
?>

<?php if($role =='Task Provider' || $role =='Both'){ ?>
<a href="postatask.php" class="link external change">
<img class="foo-ico" src="img/approval.png">
<h1 class="ftmanage pt-2">Get it done</h1>
</a>
<?php } ?>

<a href="my-task.php" class="link external change">
<img class="foo-ico" src="img/package.png">
<h1 class="ftmanage pt-2">My Task</h1>
</a>

<?php if($role =='Freelancer' || $role ==='Both'){ ?>
<a href="browse-tasks.php" class="link change">
<img class="foo-ico" src="img/loupe.png">
<h1 class="ftmanage pt-2">Browse</h1>
</a> 
<?php } ?>


<?php

//$account_id = $_COOKIE['id']; 
// $sum = 0;
// $sql = mysqli_query($con,"SELECT * FROM chat_room WHERE FIND_IN_SET('$account_id',access_id)");
// while($data =mysqli_fetch_array($sql)){
    
//     $user_id      = $data['user_id'];
//     $room_id      = $data['room_id'];
//     $str          =  explode(" ",$data['room_title']);
//     $acc_id       = $data['access_id'];
//     $matches      = explode(',', $acc_id);
    
//     $chat_receiver  = $matches[0];
//     $chat_creator   = $matches[1];


//   if($account_id == $chat_receiver){
//    //count msg here
//     $get_msg = mysqli_query($con,"SELECT COUNT(status) FROM chat_message WHERE account_id='$chat_creator' AND status='0' AND room_id='$room_id'");
//     $get_rom   = mysqli_fetch_array($get_msg);
//     $total = $get_rom['COUNT(status)'];

//    }else if($account_id == $chat_creator){

//   //count msg here
//     $get_msg = mysqli_query($con,"SELECT COUNT(status) FROM chat_message WHERE account_id='$chat_receiver' AND status='0' AND room_id='$room_id'");
//     $get_rom   = mysqli_fetch_array($get_msg);
//     $total = $get_rom['COUNT(status)'];

//  } 

//      $sum += $total;


//   }
 
?>

<a href="chat-list.php" class="link external change">
<img class="foo-ico" src="img/comment.png">
<!-- <h1 class="ftmanage pt-2">Message(<?php //echo $sum ; ?>)</h1> -->
<h1 class="ftmanage pt-2">Message<span class="msg_count"></span></h1>
</a>

<a href="more.php" class="link external change">
<img class="foo-ico" src="img/more.png">
<h1 class="ftmanage pt-2">More</h1>
</a>

</div>
</div>
</div> 



<script src = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/js/framework7.min.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.min.css"></script>
<script id="testing" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    
function goBack() {
window.history.back();
}


for (var nk = window.location,
            o = $(".change").filter(function() {
                return this.href == nk;
            })
            .addClass("actives")
            .parent()
            .addClass("actives");;) {
        // console.log(o)
        if (!o.is("li")) break;
        o = o.parent()
            .addClass("mm-show")
            .parent()
            .addClass("active");
        }


</script>

<script> 
  $(document).ready(function(){
    setInterval(function(){
      $('.msg_count').load('controller/chat_count.php')
    }      
                ,1000);
 
  });
</script>

