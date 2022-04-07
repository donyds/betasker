<?php
include_once '../config.php';

if(isset($_POST['submit'])){

date_default_timezone_set('Asia/Kolkata');
$date      =  date('Y-m-d H:i:s');
//variables input type
$question  = mysqli_escape_string($con,$_POST['question']);

$task_id   = mysqli_escape_string($con,$_POST['task_id']);
$uid       = $_COOKIE['id'];
$repid     = uniqid();


//get user details
$udetails = mysqli_query($con,"SELECT * FROM account WHERE account_id ='$uid'");
$getudata = mysqli_fetch_array($udetails);
$fulllname = explode(" ", $getudata['fullname']);
$fname     = $fulllname[0];


//get task details
$get_task = mysqli_query($con,"SELECT * FROM task_create WHERE task_id ='$task_id'");
$taskd    = mysqli_fetch_array($get_task);
$account_id     = $taskd['account_id'];
$task_title     = $taskd['task_title'];

if (strlen($task_title) > 30) {

$task_title = substr($task_title, 0, 30)."...";

 } else {

$task_title = $task_title;
                 
}
               

//upload function   
$f_name    = $_FILES['qimg']['name'];
$f_tmp     = $_FILES['qimg']['tmp_name'];
$f_size    = $_FILES['qimg']['size'];


$f_extension = explode('.', $f_name);
$f_extension = strtolower(end($f_extension));
$f_newfile   = uniqid() . '.' . $f_extension;
$store       = "../../img/" . $f_newfile;

if ($f_extension == 'jpg' || $f_extension == 'jpeg' || $f_extension == 'png') {

if (move_uploaded_file($f_tmp, $store)) {

} 

}
        
if(!empty($f_name)){

$sql = "INSERT INTO `task_question` (`question`,`qimg`,`task_id`,`uid`,`date`,`repid`,`sender`) VALUES ('$question','$f_newfile','$task_id','$uid','$date','$repid','$account_id')"; 

}else{

$sql = "INSERT INTO `task_question` (`question`,`task_id`,`uid`,`date`,`repid`,`sender`) VALUES ('$question','$task_id','$uid','$date','$repid','$account_id')";

 }

$run = mysqli_query($con,$sql); 

//for notification only

$ad1  = "<b>".$fname."</b>. Commented on <b>". $task_title ."</b>" ;
$ad2  = $account_id;
$ad3  = $task_id;
$send = mysqli_query($con,"INSERT INTO `notification` (`date`, `title`, `task_creator`, `task_id`) VALUES ('$date', '$ad1', '$ad2', '$ad3')");

// end notification


header('Location : ../../browse-tasks-details.php?task_id='.$task_id);

}
?>



