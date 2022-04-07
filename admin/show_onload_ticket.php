          <?php
                include("../controller/config.php");
                $i=1;
                $room_id  = $_GET['t'];
                
                $sql=mysqli_query($con,"SELECT * FROM chat_ticket WHERE ticket_id ='$room_id' ORDER BY id ASC");
                while($rowcount=mysqli_fetch_array($sql)){
                    
                    $account_id  = $rowcount['account_id'];
                    $role        = $rowcount['role'];

                    date_default_timezone_set("Asia/Calcutta");
                    $currnt_time  =  date("Y-m-d H:i:s");
                    $last_act = $rowcount['timestamp'];
                    
                    $to_time   = strtotime($last_act);
                    $from_time = strtotime($currnt_time);

                    $time_min = round(($from_time - $to_time) / 60). "minute ago";
                    $time_sec = $time_min * 60 ;
                    $time_elapsed = timeAgo($time_sec);
                    
                    if($role == 'user'){
                        $sql2  = mysqli_query($con,"SELECT * FROM account WHERE account_id='$account_id'");
                        $getu  = mysqli_fetch_array($sql2);
                        $fname = explode(" ", $getu['fullname']);
                    }else{

                        $sql2  = mysqli_query($con,"SELECT * FROM admin WHERE id='$account_id'");
                        $getu  = mysqli_fetch_array($sql2);
                        $fname = explode(" ", $getu['fullname']);

                    }
                    
                    //print_r($fname);
                ?>

                <?php if($role == 'admin'){ ?>
                <div class="message me"><img src="../img/<?php echo $getu['profile'];?>" width="50px">
                  <p class="info">
                  <small><b><?php echo $fname[0];?></b></small></br>
                  <?php if($rowcount['message']==''){ echo "None";}else{ echo ucwords($rowcount['message']); } ?>
                  
                  <?php if($rowcount['img']!='0'){ ?>
                  <a href="../chat_img/<?php echo $rowcount['img'] ;?>" download><img src="../chat_img/<?php echo $rowcount['img'] ;?>" width="90px"></a>
                  <?php  } ?>
                  <br>
                  <small><?php echo $time_elapsed;?></small>
                  <!-- <small><a href="controller/del_chat_msg.php?id=<?php echo $rowcount['id']; ?>&creator=<?php echo $_GET['creator'];?>&room_id=<?php echo $_GET['id'];?>" onclick="return confirm('Are you sure?');"><i class="fa fa-trash text-danger"></i></a></small> -->
                 </p>
                 

                </div>
                <?php }else{  ?>

                    <div class="message"><img src="../img/<?php echo $getu['img'];?>" width="50px">
                  <p class="info">
                  <small><b><?php echo $fname[0];?></b></small></br>
                  <?php if($rowcount['message']==''){ echo "None";}else{ echo ucwords($rowcount['message']); } ?>
                  
                  <?php if($rowcount['img']!='0'){ ?>
                  <a href="../chat_img/<?php echo $rowcount['img'] ;?>" download><img src="../chat_img/<?php echo $rowcount['img'] ;?>" width="90px"></a>
                  <?php  } ?>
                  <br>
                  <small><?php echo $time_elapsed;?></small>
                  <!-- <small><a href="controller/del_chat_msg.php?id=<?php echo $rowcount['id']; ?>&creator=<?php echo $_GET['creator'];?>&room_id=<?php echo $_GET['id'];?>" onclick="return confirm('Are you sure?');"><i class="fa fa-trash text-danger"></i></a></small> -->
                 </p>
                 

                </div>

                <?php }}?>

              

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