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
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css"> -->
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
    
    box-shadow:none;
  }

.list{
  padding:0px !important;
}

.media-body {
    padding-left: 0px;
    padding-top: 15px;
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Create Ticket</h6></span></div>

</div>
</div>

<!-- registration form start -->
<div class = "page-content pt-5 pl-3">

  <div class="" style="margin-top:40px"></div>



 <!------------>
<div class="card">
<div class="card-content card-content-padding set-ft">

<div class="row mx-4">
 <div class="alert alert-danger err" role="alert" style="display: none;"></div>
 <div class="alert alert-success succ" role="alert" style="display: none;"></div>

  <form id="myform" class="form-row">

  <div class="form-group col-12">
    <label for="">Title</label>
    <input type="text" class="form-control titles" name="titles"  placeholder="">
  </div>

  <div class="form-group col-12">
    <label for="exampleInputPassword1">Description</label>
    <textarea class="form-control descp" rows="3" id="comment"></textarea>

  </div>
  
  <button class="btn btn-info create_ticket">Create Ticket</button>

</form>
</div>  

<div class="row mx-4 mt-5">
 <div class="table-responsive">
  <table id="" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Chat</th>
                
            </tr>
        </thead>
        <tbody>

            <?php 
             $uid = $_COOKIE['id'];
             $i=1;
             $get_ticket = mysqli_query($con,"SELECT * FROM create_ticket WHERE userid='$uid' ORDER BY id DESC");
             while($getdata = mysqli_fetch_array($get_ticket)){
            
             ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo substr($getdata['title'],0,30)."...";?></td>
                <td><?php echo substr($getdata['descp'],0,50)."...";?></td>
                
                <td><?php if($getdata['status'] == '1'){ echo '<span class="badge badge-success">Open</span>';}else{ echo '<span class="badge badge-danger hidden">Close</span>';} ?></td>
                <td><a href="support_ticket.php?t=<?php echo $getdata['ticket_id'];?>"><span class="badge badge-warning"><i class="fa fa-comments"></i> Chat</span></a></td>
                
            </tr>
            <?php $i++; } ?>

        </tbody>
  </table>  
    </div>  
  </div> <!--Row--->

</div>
</div>
<!------------>


<div style="height:70px"></div>  


<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include----->

<!-- 
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> -->
<!-- <script>
$(document).ready(function() {
    $('#ticket_list').DataTable();
} );
</script> -->



<script>
    $(document).ready(function() {

        $('.create_ticket').click(function(e){

            e.preventDefault();

            var title    = $(".titles").val();
            var descp    = $(".descp").val();
            
            //alert(descp);
          
            $.ajax({type: "POST", url: "controller/api/create_ticket.php",dataType: "json",

            data: {title:title,descp:descp},

            success : function(data){

            if (data.status=='success') {
           
            $("#myform")[0].reset();
          
             //$('.succ').show();   
            //$(".succ").html("<p>"+data.response+"</p>");

            window.location = 'help.php';

            }

            else{
            
            $(".err").hide();
            $(".err").html("<p>"+data.response+"</p>");

            }

                }

            });

        

        });

    });

     </script>

</body>
</html>