<?php include("controller/cookie.php");?>
<?php 

$jsonData = file_get_contents('https://sharukh.dbtechserver.online/betasker/controller/api/get_alert.php');
$wizards = json_decode($jsonData, true); 


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
    border-bottom: none;
      border-top:none;
    border-radius: 0px;
    border-bottom: 1px solid #ededed !important;
    box-shadow:none;
  }

.list{
  padding:0px !important;
}

.media-body {
    padding-left: 0px;
    padding-top: 15px;
}

.alert-dismissible .close{
      padding: 20px 11px;

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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Task Alert</h6></span></div>

</div>
</div>

<!-- registration form start -->
<div class = "page-content pt-4 pl-1">

  <div class="" style="margin-top:40px"></div>

<div class="list media-list sortable">

<div class="container">
    
<div class="row">
     <?php 
    foreach($wizards['records'] as $value){
    ?>
    
      <div class="alert col-12  mx-auto alert-success alert-dismissible fade show" role="alert">
                                 	 <div class="row">   
                             <div class="col-1 pl-1 bg-success"> 	

                           <span class="icon-bg"><i class="fa fa-check-circle"></i></span>
                           </div> 
                        
                        
                            <div class="col-10 pl-0 pt-1 showsucmsg">
                              <a href="browse-tasks-details.php?task_id=<?php echo $value['task_id'];?>">

                               <span class="text-dark"> <?php echo $value['title'];?> <span><br>
                                <span class="float-left text-info"><?php echo $value['at'];?></span>
                                <span class="float-right text-info"><?php echo $value['uname'];?> </span>
                                
                               
                            </a>
                            </div>
                        
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        </div>



<?php } ?>
</div>
</div>




</div>  <!-----page----->


<div style="height:70px"></div>  


</div></div>
<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include----->


</body>
</html>