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
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.min.css" />

<link rel = "stylesheet"href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.colors.min.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
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


input {
  outline: none;
}
input[type=search] {
  -webkit-appearance: textfield;
  -webkit-box-sizing: content-box;
  font-family: inherit;
  font-size: 100%;
}
input::-webkit-search-decoration,
input::-webkit-search-cancel-button {
  display: none; 
}


input[type=search] {
  border: solid 1px #ccc;
  padding: 9px 10px 9px 32px;
  width: 55px;
  
  -webkit-border-radius: 10em;
  -moz-border-radius: 10em;
  border-radius: 10em;
  
  -webkit-transition: all .5s;
  -moz-transition: all .5s;
  transition: all .5s;
}
input[type=search]:focus {
  width: 130px;
  background-color: #fff;
  border-color: #66CC75;
  
  -webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
  -moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
  box-shadow: 0 0 5px rgba(109,207,246,.5);
}


input:-moz-placeholder {
  color: #999;
}
input::-webkit-input-placeholder {
  color: #999;
}

/* Demo 2 */
#demo-2 input[type=search] {
  width: 28px;
  padding-left: 10px;
  color: transparent;
  cursor: pointer;
}
#demo-2 input[type=search]:hover {
  background-color: #fff;
}
#demo-2 input[type=search]:focus {
  width: 130px;
  padding-left: 32px;
  color: #000;
  background-color: #fff;
  cursor: auto;
}
#demo-2 input:-moz-placeholder {
  color: transparent;
}
#demo-2 input::-webkit-input-placeholder {
  color: transparent;
}

a.nav-link.active {
    background: transparent!important;
    border: none;
    border-bottom: 2px solid #fff;
    color: #fff !important;
}
a.nav-link{
  color:#fff !important;
  font-size:18px;
  font-weight:500;
}

a:hover{
  text-decoration:none;
}
/*----------*/
/*form styles*/
#msform {
    text-align: center;
    position: relative;
    margin-top: 30px;
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 0 15px 1px rgb(0 0 0 / 40%);
    padding: 20px;
    box-sizing: border-box;
    width: 100%;
    position: relative;
}

/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}

/*inputs*/
#msform input, #msform textarea {
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 13px;
}

#msform input:focus, #msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #05a0c7;
    outline-width: 0;
    transition: All 0.5s ease-in;
    -webkit-transition: All 0.5s ease-in;
    -moz-transition: All 0.5s ease-in;
    -o-transition: All 0.5s ease-in;
}

/*buttons*/
#msform .action-button {
       width: 45%;
    background: #05a0c7;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button:hover, #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #05a0c7;
}

#msform .action-button-previous {
        width: 45%;
    background: #C5C5F1;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button-previous:hover, #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
}

/*headings*/
.fs-title {
    font-size: 16px;
    text-transform: uppercase;
    color: #2C3E50;
    margin-bottom: 10px;
    letter-spacing: 1px;
    font-weight: bold;
}

.fs-subtitle {
    font-weight: normal;
    font-size: 13px;
    color: #666;
    margin-bottom: 20px;
}

/*progressbar*/
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    /*CSS counters to number the steps*/
    counter-reset: step;
}

#progressbar li {
    list-style-type: none;
    color: white;
    text-transform: uppercase;
    font-size: 9px;
    width: 33.33%;
    float: left;
    position: relative;
    letter-spacing: 1px;
}

#progressbar li:before {
    content: counter(step);
    counter-increment: step;
    width: 24px;
    height: 24px;
    line-height: 26px;
    display: block;
    font-size: 12px;
    color: #333;
    background: white;
    border-radius: 25px;
    margin: 0 auto 10px auto;
}

/*progressbar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: white;
    position: absolute;
    left: -50%;
    top: 9px;
    z-index: -1; /*put it behind the numbers*/
}

#progressbar li:first-child:after {
    /*connector not needed before the first step*/
    content: none;
}

/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before, #progressbar li.active:after {
    background: #05a0c7;
    color: white;
}


/* Not relevant to this form */
.dme_link {
    margin-top: 30px;
    text-align: center;
}
.dme_link a {
    background: #FFF;
    font-weight: bold;
    color: #05a0c7;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 5px 25px;
    font-size: 12px;
}

.dme_link a:hover, .dme_link a:focus {
    background: #C5C5F1;
    text-decoration: none;
}
fieldset{
  text-align: left !important; 
}


.type-height
{
    height: 40px;
    border: 1px solid #ccc;
    background: transparent;
    margin-bottom:5px;
    font-size: 14px;
}
body.bg-set {
    background-image: url(img/swiping-bg.jpg) !important;
}


.bootstrap-tagsinput .tag {
    margin-right: 2px;
    color: #ffffff;
    background: #05a0c7;
    margin-bottom: 2px;
    padding: 4px;
    border-radius: 4px;
}

.bootstrap-tagsinput{
    border: none;
    width: 100%;
        margin-top: 10px;
}

.bootstrap-tagsinput input[type="text"]{
     margin-top: 10px;
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Add Task</h6></span></div>

<div class="right">
<form id="demo-2">
  <!-- <input type="search" placeholder="Search">
  <i class="fa fa-search pr-3"></i> -->
</form>
</div>


</div>
</div>

<!---->
<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:7px"></div>
  
  <!----step-form-->
     <div class="col-12">
         <br><br>
         <div class="alert alert-danger errpost" role="alert" style="display: none;"></div>
          <div class="alert alert-success succpost" role="alert" style="display: none;"></div>
        <form id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Add Task</li>
                <li>Social Profiles</li>
                <li>Add Task</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>

              <h2 class="fs-title">Add Task</h2>

              <input type="text" name="task_title" class="task_title" placeholder="Enter Task Title">

             <textarea name="descp" class="descp" placeholder="Enter  Task Description"></textarea> 
            

               <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                
                
               

                <br>
                 <div class="row">
                     <div class="col-6 pl-0">
                <h2 class="fs-title" style="min-height:40px;">Task Category</h2>
                 
                   
                 <select name="task_cat" class="task_cat type-height">
                     <option value="">Select Task Category</option>
                     <?php
                    include_once 'controller/config.php';
                    $getcat = mysqli_query($con,"SELECT * FROM cat ORDER BY id DESC");
                             
                    while($get_c =mysqli_fetch_array($getcat)){ ?>
    
                       <option value="<?php echo $get_c['cat'];?>"><?php echo $get_c['cat'];?></option>
                       <?php } ?>
                 </select>
             </div>
             
                  <div class="col-6 pl-0">
                 <div class="form-check">
                 <h2 class="fs-title" style="min-height:40px;">Task Type</h2>

                  <select name="task_type" class="task_type type-height">
                     <option value="">Select Task Type</option>
                      <option value="Fixed">Fixed</option>
                       <option value="Per hour basis">Per hour basis</option>
                 </select>
                 </div></div></div><br>

                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                
                
                 <h2 class="fs-title">Currency</h2>
                 <select name="task_currency" class="task_currency type-height w-100">
                     <option value="">Select  Currency</option>
                      <option value="$">$ Dollar</option>
                      <!--<option value="INR">INR</option>-->
                 </select>
                 
                <h2 class="fs-title">Budget</h2>
                <!--<h5 class="fs-subtitle">Whate is your budget?</h5>-->
                <input type="number" name="budget" class="budget" placeholder="$ 000"/>
                 <!--<p>This is just an estimate.you can negotiate the final price leter.</p>-->
                 
                    <h2 class="fs-title">Tag</h2>

                <!--  <textarea name="tag" class="tag" placeholder="Enter Tag"></textarea> -->
                 <div class="bs-example">
                <input type="text" class="tags_value" id="#inputTag" value="" data-role="tagsinput" placeholder="Enter Tag with Comma">

              </div>

                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="addtask" class="submit action-button addtask" value="Post Task"/>
            </fieldset>
        </form>
        <!-- link to designify.me code snippets -->
      
        <!-- /.link to designify.me code snippets -->
    </div>
  <!---step-form--->



</div>


<div style="height:110px"></div>

<!----footer include----->
  <?php include 'include/footer2.php';?>
<!---footer include-----> 

</div><!----page-content---> 
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript">
  //jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  next_fs = $(this).parent().next();
  
  //activate next step on progressbar using the index of next_fs
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  
  //show the next fieldset
  next_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale current_fs down to 80%
      scale = 1 - (1 - now) * 0.2;
      //2. bring next_fs from the right(50%)
      left = (now * 50)+"%";
      //3. increase opacity of next_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
      next_fs.css({'left': left, 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

$(".previous").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();
  
  //de-activate current step on progressbar
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
  
  //show the previous fieldset
  previous_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale previous_fs from 80% to 100%
      scale = 0.8 + (1 - now) * 0.2;
      //2. take current_fs to the right(50%) - from 0%
      left = ((1-now) * 50)+"%";
      //3. increase opacity of previous_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({'left': left});
      previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

$(".submit").click(function(){
  return false;
})
</script>


     <script>
         //signup using ajax

    $(document).ready(function() {

        $('.addtask').click(function(e){

            e.preventDefault();

            var task_title = $(".task_title").val();
            var descp      = $(".descp").val();
            var task_cat   = $(".task_cat").val();
            var task_type  = $(".task_type").val();
            var task_currency     = $(".task_currency").val();
            
            var budget   = $(".budget").val();
            var tag      = $(".tags_value").val();
           // var t        = $("input").val()	


            //alert(tag);

            $.ajax({type: "POST", url: "controller/api/job_post.php",dataType: "json",

            data: {task_title:task_title,descp:descp,task_cat:task_cat,task_type:task_type,task_currency:task_currency,budget:budget,tag:tag},

            success : function(data){

            if (data.status=='success') {
           
            $("#msform")[0].reset();

            //$('.succpost').show();   

           // $(".succpost").html("<p>"+data.response+"</p>");

            window.location = 'tasks-details.php?task_id='+data.task_id;

            }

            else{

            $('.errpost').show();   

            $(".errpost").html("<p>"+data.response+"</p>");

            }

                }

            });



        });

    });

     </script>

     <script>

        $(document).ready(function(){
         $("#inputTag").tagsinput('items');
});

      
     </script>
     <!--library  -->

</body>
</html>