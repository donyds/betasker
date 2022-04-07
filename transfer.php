<?php include("controller/cookie.php");?>

<?php
 include_once 'controller/config.php';

$account_id = $_COOKIE['id'];
$api_url1       = 'https://sharukh.dbtechserver.online/betasker/controller/api/get_trans_fund.php?id='.$account_id;
$json_data1     = file_get_contents($api_url1);
$response_data1 = json_decode($json_data1);
$getacc = $response_data1->result;
$wall = $response_data1->wallet ;
//print_r($wall[0]);

    
    // $getu     = mysqli_query($con,"Select * FROM account WHERE account_id='$account_id'");
    // $udetails = mysqli_fetch_array($getu);
    // $wallet   = $udetails['wallet'];
    
 
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
.toolbar.messagebar {
position: fixed !important;
bottom: 0px !important;
}

a {
color: #159489 !important;
}
.button-round {
border-radius: 50px;
}

ul {
list-style: none;
padding-left: 15px !important;
margin-bottom: 5px;
}

  
.bg-set{
/*background-image:url(img/innerpage-bg.jpg);*/
background-color:#fff;
background:#fff;
background-image:none;
}

.ico-user {
font-weight: 600!important;
background-size: cover;
border-radius: 40px;
width: 40px;
height: 40px;
right: 0;
background-color: rgb(4 8 13 / 87%)!important;
}

a{
color: #545858 !important;
}

p {
margin:0;
font-weight: 600;
}
.col-40 {
font-weight: 700;
}

.custom-b{
      background: #05a0c7 !important;
    font-size: 17px;
    font-weight: 500;
   }
i.fa.fa-angle-right {
    font-size: 30px !important;
    padding-top: 15px !important;
    padding-left: 20px;
}

.row .fa{
	color:#05a0c7;
}

.center-font{
	    font-size: 19px;
    color: #065c71;
    font-family: 'Ubuntu';
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

<div class="title pt-1 pl-2"><span class="subtitle"><h6>Payment</h6></span></div>
</div>
</div>
<!---->

<div class="page-content pt-5">

<div class="" style="margin-top:40px"></div>

<div class="mt-0 text-center">
<h4 class="pt-0" style="color:#05a0c7">Available Balance</h4>
<h2 class="pt-2"><i class=""></i>£<?php echo $wall[0]; ?>.00</h2>
</div>
<div class="mt-3 pb-4 text-center">
 
<div class="alert alert-danger signupalert" role="alert" style="display: none;"></div>
<div class="alert alert-success add_alert" role="alert" style="display: none;"></div>

<form method="Post" id="myform">
    
<div class="form-group mx-3 mt-1" >
<select id="project" class="form-control project" name="project" style="text-align:center;min-height: 50px">
    <option>Select Live Project</option>
    <?php
    $get_task     = mysqli_query($con,"Select * FROM task_create WHERE account_id='$account_id' ORDER BY id DESC");
   while($task = mysqli_fetch_array($get_task)){ ?> 
   
       <option value="<?php echo $task['task_id'];?>"><?php echo $task['task_title'];?></option>
       
   <?php  } ?>

    
</select>    
</div> 

<div class="form-group mx-3 mt-1" >
<input class="form-control uname" type="text" name="uname" placeholder="Enter User Name" value="" style="text-align:center;min-height: 50px" readonly="">
</div> 
<p class="pt-2 pb-2 pl-2 pr-2">Your project cost <span class="pamount"></span>  AND your remaining amount <span class="ramount"></span></p>
<p class="dscp"></p>
<div class="form-group mx-3 mt-1" >
<input class="form-control amount" type="number" name="amount" placeholder="Enter Amount" value="" min="0" oninput="this.value = Math.abs(this.value)" style="text-align:center;min-height: 50px">
<input type="hidden" name="receiver" class="receiver" value="">
<input type="hidden" name="remain_amount" class="remain_amount" value="">
<input type="hidden" name="cost" class="cost" value="">

</div>  
<center> <a type="button" class="col button button-large button-round button-fill w-50 text-white custom-b transfer_fund"  style="font-size:15px"><i class="fa fa-money"></i>&nbsp; Transfer Fund </a></center> 

</form>
</div> 

<?php 
foreach($getacc as $value){ 


?>

<div class="card">
<div class="card-content card-content-padding set-ft">
<a href="#" class="item-link item-content">
<div class="row d-flex text-center py-2" style="align-content:center;">	

<div class="col-8 pl-2">

<div class="pt-1">
<h5 class="pl-1" style="font-size: 15px;"> <i class="fa fa-check-circle"></i> <?php echo $value->title;?> To <?php echo $value->to_name;?></h5>
<p style="float: left; padding-left: 8px;"><i class="fa fa-calendar"></i> <?php echo $value->date;?> <?php echo $value->time;?></p>
</div>
</div>
<div class="col-2 center-font">
<i class=" pt-4 pl-2"></i>&nbsp; £<?php echo $value->amount;?>
</div>

<div class="col-2">
 <i class="fa fa-angle-right pt-3" style="font-size:20px"></i>
</div>

</div>
</a>
</div>

</div>

<?php
}
?>

<div style="padding-bottom:20px; padding-top:70px"></div>

</div>  <!----page-content---> 
</div>
<div style="height:70px"></div>  

<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include----->
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 
 <script>
        $(document).ready(function(){
        $("#project").change(function(){
        var task_id = $(this).val();
        //alert(task);

        
        $.ajax({
            url: 'controller/api/get_task_user.php',
            type: 'post',
            data: {task_id:task_id},
            dataType: 'json',
            success:function(data){
             
             if (data.status=='success') {
                 
                 var currency = data.task_currency;
                 
                 var budget = (data.task_budget) ;
                 
                 var send_b = (data.send_amount) ;
                 
                 var total_budget = (data.total_budget);
                 
                 //var total_r = currency+''+ (budget - send_b);
                 var total_r = currency+''+ (total_budget - send_b);

            // $("#myform")[0].reset();

             //$('.amount').val(data.task_budget);   

             $('.uname').val(data.fullname);
             
             $('.receiver').val(data.receiver);  
             $('.pamount').html(currency+''+data.total_budget);   
             
             $('.ramount').html(total_r);  
             
             $('.remain_amount').val(total_budget - send_b);
             //$('.cost').val(data.task_budget);
             $('.cost').val(data.total_budget);

              $(".transfer_fund").attr("disabled", false);
              $('.pr-2').show();
              $('.dscp').hide();
              $('.ptxt').show();  
            }

            else{

             $('.amount').val(data.response);   

             $('.uname').val(data.response); 
             
              $('.ptxt').hide();   
             
            //  $('.ramount').hide(); 
              
              $('.dscp').html('Your Project is not Allot'); 
              $('.pr-2').hide();
              $(".transfer_fund").attr("disabled", true);
                $('.dscp').show();

            }
            }
        });
    });

});

     </script>
     
      <script>
         //signup using ajax

    $(document).ready(function() {

        $('.transfer_fund').click(function(e){

            e.preventDefault();

            var amount        = $(".amount").val();
            
            var project       = $(".project").val();
            
            var receiver      = $(".receiver").val();
             
            var remain_amount = $(".remain_amount").val();
             
            var cost          = $(".cost").val();

                
           // alert(amount);

            $.ajax({type: "POST", url: "controller/api/transfer_fund.php",dataType: "json",

            data: {amount:amount,receiver:receiver,project:project,remain_amount:remain_amount,cost:cost},

            success : function(data){

            if (data.status=='success') {
           
            $("#myform")[0].reset();

            $('.add_alert').show();   
            $('.signupalert').hide();   

            $(".add_alert").html("<p>"+data.response+"</p>");
    

            window.location = 'transfer.php';


            }

            else{

            $('.signupalert').show();   

            $(".signupalert").html("<p>"+data.response+"</p>");

            }

                }

            });



        });

    });

     </script>
     <!--library  -->

</body>
</html>