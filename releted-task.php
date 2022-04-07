<?php include("controller/cookie.php");?>
<?php 
       
  $uid = $_COOKIE['id'];
  $get_alert    = mysqli_query($con,"SELECT * FROM task_alert_log WHERE uid='$uid'");
  $chk_alert_is = mysqli_num_rows($get_alert);
   
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




/* Demo 2 */

/*----------*/

td .badge-custom {
    font-size: 14px;
    padding: 10px;
    background: #146e85;
    margin-bottom: 10px;
}

/*-------------------------*/

.search-form-wrapper {
    display: none;
    position: absolute;
    left: 0;
    right: 0;
    padding: 20px 15px;
    margin-top: 25px;
    background:#05a0c7;
}
.search-form-wrapper.open {
    display: block;
}

.search-form .input-group-addon {
    padding: 10px 12px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1;
    color: #fd1a1a;
    text-align: center;
    background-color: #fff;
    border: none;
    border-radius: unset;
    height: 38px;
}

.form-control:focus {
    border-color: transparent;
    outline: 0;
    box-shadow: none;
    border: none;
}
.input-group button {
    background: none;
    border: none;
    color: #05a0c7;
}

</style>
</head>


<body class="bg-set" style="background:#fff">
<div class = "views" style="height: 17%;">

<div class="navbar">
<div class="navbar-bg"></div>
<div class="navbar-inner sliding">
<div class="left">
<a href="#" onclick="goBack()"  class="link back">
<i class="icon icon-back"></i>
</a>
</div>
<div class="title pt-2 pl-2"><span class="subtitle"><h6>Task Alert</h6></span></div>

<div class="right">
 <div class="row">
  
  </div>

 </div>

 
</div>
 <div class="search-form-wrapper">

  
</div>
</div>



</div>
<?php if($chk_alert_is > 0){  ?>
<a href="taskalert.php" class="btn btn-info text-white border-radius-40 float-right">Edit task alert</a>
<?php }  ?>
<!---->
<div class="page-content w-100">
<div class="" style="margin-top:7px">

</div>
 
    <div class="" style="background:#05a0c7">
         <div class="container">

    </div>
  </div>

    <div class="container pl-0 pr-0">
       <?php 

       $get_alertu = mysqli_fetch_array($get_alert); 
      
       $alert_cat        = $get_alertu['cat'];
       $alert_subrub     = $get_alertu['subrub'];
       $alert_lookingfor = $get_alertu['lookingfor'];
       
       $imp_str = "'" . implode("','", explode(',', $alert_cat)) . "'";
       
       $chk_cat = mysqli_query($con,"SELECT * FROM cat WHERE FIND_IN_SET('$alert_cat',keywords)");
       
       while($get_ctgry = mysqli_fetch_array($chk_cat)){
       
        $get_cts = $get_ctgry['cat'];

        

       if($alert_lookingfor =='remote'){

        $sql = mysqli_query($con,"SELECT * FROM task_create WHERE FIND_IN_SET('$get_cts',task_cat) AND task_status='1' AND status='runing'");
        //$sql = mysqli_query($con,"SELECT * FROM task_create WHERE task_cat IN ($imp_str) AND task_status='1' AND status='runing'");


       }else{

        $sql = mysqli_query($con,"SELECT * FROM task_create WHERE FIND_IN_SET('$get_cts',task_cat) AND task_location='$alert_subrub' AND task_status='1' AND status='runing'");


       }
      
       
        $getd = mysqli_num_rows($sql);
       
        while ($value = mysqli_fetch_array($sql)){

     
        $task_title        = $value['task_title'];
        $task_description  = $value['task_description'];

      $account_id = $value['account_id'];
      $sqls = mysqli_query($con,"SELECT * FROM account WHERE account_id ='$account_id'");
      $uget = mysqli_fetch_array($sqls);
      $img  = $uget['img'];
    
    ?>
    
    
<div class="card mt-2 mb-2">
        <div class="card-content">
            <!--browse-tasks-details.php-->
        
        <div class="row d-flex pt-3 pb-2" style="align-content:center;"> 

          <div class="col-8">
               <a href="https://sharukh.dbtechserver.online/betasker/browse-tasks-details.php?task_id=<?php echo $value['task_id'];?>" class="item-content">

               <h4 class="pl-3" style="font-size: 17px;">
               
               <?php  if (strlen($task_title) > 30) {
                   echo ucwords(substr($task_title, 0, 30)."...");
                    } else {
                    echo ucwords($task_title);
                 
                    }
                    
                ?>
               </h4>
               </a>
              
                 <!-- <div class="col-12"><p><span class="fa"></span>
                     <?php // if (strlen($task_description) > 50) {
                   // echo ucwords(substr($task_description, 0, 50)."...");
                   //  } else {
                   //  echo ucwords($task_description);
                 
                   //  }
                    ?>
                  </p></div> -->

           <?php if(!empty($value['task_location'])){ ?>
          <div class="col-12"> <p><i class="fa fa-map-marker"></i> <?php echo ucwords($value['task_location']);?></p></div>
           <?php } ?>

          <?php
            //get day 
            $post_date = $value['date'];
            $nameOfDay = date('D', strtotime($post_date));
            //get month
            $datetime  = DateTime::createFromFormat('d-m-Y', $post_date);
            $month     = $datetime->format('M');
            // get day date
            $date_day  = date("d", strtotime($post_date));

            $time_pre  = explode(" ", $value['time_prefer']);

            $task_id  = $value['task_id'];
            $getoffer = mysqli_query($con,"SELECT * FROM task_apply WHERE task_id='$task_id'");
            $count_ofer = mysqli_num_rows($getoffer);

            
          ?>
          <div class="col-12"> <p><i class="fa fa-calendar"></i> <?php echo $nameOfDay ."," ;?> <?php echo $month;?> <?php echo $date_day;?></p></div>

           <div class="col-12"><p><i class="fa fa-clock-o"></i> <?php echo $time_pre[0];?></p></div>

           
          <div class="col-12"><p style="font-size:17px"><span class="text-primary"><?php if($value['status'] =='runing'){ echo "<span class='badge badge-success' style='font-size:14px'>Open</span>"; }else{ echo "<span class='badge badge-danger' style='font-size:14px'>Close</span>"; }?></span> 

            <span class="pl-2" style="font-size:14px"><?php if($count_ofer > 0){ ?>
           <?php echo $count_ofer ." ". "Offers" ;?>
           <?php } ?></span> 
          </p>
           
          </div>
               
          </div>
          
           <div class="col-4 text-center"> <h4><?php echo ucwords($value['task_currency']).ucwords($value['task_budget']);?></h4>
             <a href="profile.php?id=<?php  echo $value['account_id']; ?>">
             <img class="" src="img/<?php  echo $img; ?>" width="60" height="60" style="border-radius:50px;">
             </a>
           </div>
          </div>
        
    </div>
</div>

<?php } }?>

<?php if($getd =='0'){ ?>
<center>
<img src="img/no-data.jpg" width="100%">
<h2> No Data Available</h2>
<?php if($chk_alert_is =='0'){  ?>
<a href="taskalert.php" class="btn btn-info text-white border-radius-40">Add new task alert</a>
<?php } ?>
</center>
<?php } ?>
</div>


<!--container-->
   
  </div>
</div>

<div style="height:110px"></div>

<!----footer include----->
<?php include 'include/footer2.php';?>
<!---footer include-----> 


</div><!----page-content---> 
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <script>
   $(document).ready(function(){  
    
     // $("#search").keyup(function(){  
     //    var search = $("#search").val();
     //    // alert(search);
     //     var url = "https://sharukh.dbtechserver.online/betasker/browse-tasks.php?search="+search;
         
     //     window.setTimeout(function() {
     //        window.location.href = url;
     //    }, 3000);
       //});  
}); 
</script>

<script type="text/javascript">
  $(document).ready(function(){
            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            submitIcon.click(function(){
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen == true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
        });
            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','none');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }

            const clearInput = () => {
  const input = document.getElementsByTagName("input")[0];
  input.value = "";
}

const clearBtn = document.getElementById("clear-btn");
clearBtn.addEventListener("click", clearInput);
</script>

  <script>
$( document ).ready(function() {
$('[data-toggle=search-form]').click(function() {
    $('.search-form-wrapper').toggleClass('open');
    $('.search-form-wrapper .search').focus();
    $('html').toggleClass('search-form-open');
  });
  $('[data-toggle=search-form-close]').click(function() {
    $('.search-form-wrapper').removeClass('open');
    $('html').removeClass('search-form-open');
  });
$('.search-form-wrapper .search').keypress(function( event ) {
  if($(this).val() == "Search") $(this).val("");
});

$('.search-form-wrapper').click(function(event) {
  $('.search-form-wrapper').removeClass('open');
  $('html').removeClass('search-form-open');
});
});
</script>

</body>
</html>