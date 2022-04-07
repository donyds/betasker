<?php
    require_once('config.php'); 
     $doubt_id=htmlspecialchars($_GET['t']);
     $uid = $_COOKIE['id'];
     $sql_doubt= mysqli_query($con,"SELECT * FROM `chat_ticket` where ticket_id = '$doubt_id' ORDER BY id ASC");
     while($doubt = mysqli_fetch_array($sql_doubt)){ 
        $img = $doubt['img'];
        $role = $doubt['role'];
        $img_con = explode('.', $img);
        //print_r($img_con);
        $img_typ = $img_con[1];
        
        $account_id = $doubt['account_id'];
       
        if($role == 'user'){

            $getu  = mysqli_query($con,"SELECT * FROM `account` WHERE account_id = '$account_id'");
            $chk = mysqli_fetch_array($getu);
      
            $nam = explode(" ", $chk['fullname']);
      
            }else{
      
            $getu  = mysqli_query($con,"SELECT * FROM `admin` WHERE id = '$account_id'");
            $chk = mysqli_fetch_array($getu);
      
            $nam = explode(" ", $chk['fullname']);
      
            }
     
      

    date_default_timezone_set("Asia/Calcutta");
    $currnt_time  =  date("Y-m-d H:i:s");
    $last_act = $doubt['timestamp'];
    
    $to_time   = strtotime($last_act);
    $from_time = strtotime($currnt_time);

    $time_min = round(($from_time - $to_time) / 60). "minute ago";
    $time_sec = $time_min * 60 ;
    $time_elapsed = timeAgo($time_sec);
     
     ?>
   
    
<div class = "message message-<?php if($doubt['account_id']== $uid){echo "sent";}else{echo "received";}?>">
    <div class="message-name"><?php echo ucwords($nam[0]);?></div>
<div class = "message-text "><?php echo ucwords($doubt['message']);?><br>
<?php if($img !='0'){ ?>
<?php if($img_typ =='doc' || $img_typ =='docx'){ ?>

<a href="../chat_img/<?php echo $img ;?>" download>
<img src = "chat_img/doc.png" width="100px" hieght="100">
</a>

<?php }else if($img_typ =='pdf'){ ?>

<a href="chat_img/<?php echo $img ;?>" download>
<img src = "chat_img/pdf.png" width="100px" hieght="100">
</a>

<?php }else { ?>

<a href="chat_img/<?php echo $img ;?>" download>
<img src = "chat_img/<?php echo $img ;?>" width="100px" hieght="100">
</a>
<?php } ?>  
<?php } ?>
</div>
<!-- <?php //if($img !='0'){ ?>
<img src = "chat_img/<?php echo $img ;?>" width="100px" hieght="100"></div>
<?php// } ?> -->
<small><?php echo $time_elapsed ;?></small>
</div>
</div>

<!-- <div class = "message message-<?php if($doubt['account_id']== $uid){echo "sent";}else{echo "received";}?>">
<div class = "message-name"><?php echo ucwords($chk['fullname']);?>
</div>
<div class = "message-text"><?php echo ucwords($doubt['message']);?></div>
<div  class = "message-avatar"><img class="pt-3" src="img/<?php echo $chk['img'];?>" width="60"></di>
<div class = "message-name"><?php echo ucwords($doubt['timestamp']);?></div>

<div style = "background-image:url(../framework7/images/person.png)" class = "message-avatar"></div>
</div>-->
<?php } ?>

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
