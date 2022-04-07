<?php 
include 'controller/session.php';
include '../controller/config.php' ;
?>

<!DOCTYPE html>

<html lang="en">



<!----css----->

<?php include 'include/css.php';?>
<style type="text/css">
 .atechment {
    font-size: 25px;
    padding: 10px;
    position: absolute;
    right: 70px;
    z-index: 999;
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
 /* display: block;*/
}

input:focus-visible{
  box-shadow: none;
    border: none;
    outline: none;
}

.bdr{
border:1px solid #000;
border-radius:4px;
    align-items: baseline;
}

.btn:not([disabled]):not(.disabled):not(.btn-link):hover, .btn:not([disabled]):not(.disabled):not(.btn-link):focus{
box-shadow:none;}

</style>
<!-----css---->

  

<body class="app sidebar-mini">



<!----css----->

<?php include 'include/header-sidebar.php';?>

<!-----css---->



  <main class="app-content">

      <div class="app-title">

        <div>

          <h1><i class=""></i> View Ticket </h1>

        </div>

        <ul class="app-breadcrumb breadcrumb">

          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>Form</li>

          <li class="breadcrumb-item">View Ticket</li>

        </ul>

      </div>

      

    



    <div class="row">

      <div class="col-md-12">

        <div class="tile">
            <h3 class="tile-title">View Ticket</h3>
           
            <div class="messanger">
              <div class="messages">

              </div>
              </div>
              
              <?php 
                $ticket_id = $_GET['t'];
                $sqlst = mysqli_query($con,"SELECT * FROM create_ticket WHERE ticket_id='$ticket_id'");
    
                $sqlst_tick  = mysqli_fetch_array($sqlst);
                $ticket_status = $sqlst_tick['status'] ; 
     
                 if($ticket_status == '1'){
              ?>
          

              <form id="myform" method="post" enctype="multipart/form-data">

              <div class="sender">

            <div class="row bdr mx-2">
            <div class="col-md-8">
                  <input type="text" class="msg col-12" name="chat" placeholder="Send Message" style="border: none;box-shadow: none;">
            </div>
            

            <div class="col-md-2"> <img src="" class="imgdem" id="img_url" alt="your image" style="display: none;"></div>
            <div class="col-md-1 text-center">
              <button type="button" class="btn btn-info link" style="background: no-repeat;
    border: none;
    color: #05a0c7;
    font-size: 25px;"><div class="image-upload">
    <label for="file-input" class="mb-0">
       <i class="fa fa-paperclip"></i>
    </label>


    <input id="file-input" type="file" name="image" class="img" onchange="img_pathUrl(this);" style="border:none;">


</div>
</button> 

            </div>  

            <div class="col-md-1">
             <button type="submit" class="btn btn-primary" >send</button>
           </div>
            </div>  


              </div>  
               </form>
             <?php } ?>
               
              
         



            </div>
          </div>
        
      </div>
        
    </div>



    </main>

<!----css----->

<?php include 'include/footer.php';?>

<!-----css---->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function (e) {
 $("#myform").on('submit',(function(e) {

  e.preventDefault();
  
  var text_val = $('.msg').val();
  
  if(text_val ==''){
  
  alert("Empty Message");

  }else{
  play_notify();
  $.ajax({
   url: "controller/chatadmin_with_ticket.php?t=<?php echo htmlspecialchars($_GET['t']); ?>",
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
       
       $("#myform")[0].reset();
       $(".imgdem").hide();
       
       //window.location = 'view_ticket.php?t=';

    	}else{
			$("#myform")[0].reset();
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

<script> 
  $(document).ready(function(){
    setInterval(function(){
      $('.messages').load("show_onload_ticket.php?t=<?php echo htmlspecialchars($_GET['t']); ?>")
    }      
                ,1800);
 
  });
</script>

<script>
      function img_pathUrl(input){
        $(".imgdem").show();

        $('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
    }

</script>

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
   url: "controller/api/chat_with_ticket.php?t=621df726ed33a",
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

  </body>

</html>