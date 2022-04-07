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
.custom-b{
      background: #149388;
    font-size: 20px;
    font-weight: 600;
    min-height: 45px;
    padding-top: 5px;
}
#name, #email, #number, #pwd {
    height: 50px;
}
.col-11{
    max-width:100%;
}
.bg-danger {
    width: 100%;
    padding: 17px 5px !important;
    color: #fff;
}
</style>
</head>
<body class="bg-set">
<div class = "views">
<div class="navbar">
<div class="navbar-bg"></div>
<div class="navbar-inner sliding">
                    <div class="left"> <a href="#" onclick="goBack()" class="link back"><i class="icon icon-back"></i>                </a> </div>
                    <div class="title"><span class="subtitle"><h6 class="pt-2">Sign up</h6></span></div>
                    <div class="right"> <a class="link"></a> </div>
                </div>
</div>
<!---->
<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:40px"></div>
<div class="row">
<div class="container mb-5">
  <!--<div class="alert alert-danger signupalert showmsg" role="alert" style="display: none;"></div>-->
  
   <div class="alert col-12 ml-1 mr-1 alert-danger alert-dismissible fade show signupalert" role="alert" style="display: none;">
                            <div class="row">   
                             <div class="col-1 bg-danger">  
                              <span class="icon-bg"><i class="fa fa-exclamation-triangle"></i></span></div>
                               <div class="col-10 pl-0 pt-2 showmsg"></div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            </div>
                            
                        <form id="myform" method="post" autocomplete="off">
                            <div class="form-group">
                             <input type="text" class="form-control w-100 name" id="name" placeholder="Full Name" name="name" oninput="this.value = this.value.replace(/[^a-z.^A-Z. ]/g, '').replace(/(\..*)\./g, '$1');">
                            
                            <small class="fname_err" style="color:red; display:none;">Please Select Full Name</small>
                            </div>
                            <div class="form-group">
                             <input type="email" name="email" class="form-control w-100 email" id="email" placeholder="Enter your E-mail" name="email">
                            
                            <small class="email_err" style="color:red; display:none;">Please Select E-mail</small>
                            </div>
                            <div class="form-group">
                             <input type="number" name="mobile" class="form-control w-100 mobile" id="number" placeholder="Mobile Number" name="number" >
                            <small class="mob_err" style="color:red; display:none;">Please Select Mobile Number</small>
                            </div>
                            <div class="form-group">
                              <input type="password" name="password" class="form-control password" id="pwd" placeholder="Enter Password" name="pswd">
                            <small class="pass_err" style="color:red; display:none;">Please Select Password</small>
                            
                            </div>
                            
                            <div class="form-group">
                               <select class="form-control role" name="role">
                                 <option value="">Select Role</option>
                                 <option value="Task Provider">As a Poster</option>
                                 <option value="Freelancer">As a tasker</option>
                                 <option value="Both">Both</option>
                               </select>  
                             <small class="role_err" style="color:red; display:none;">Please Select Role</small>
                            </div>
                            <div class="form-group form-check">
                              <label class="form-check-label">
                                <input type="checkbox" name="remember" id="remember" class="form-check-input remember" value="1"> <span style="font-weight:500">Terms & Conditon Apply <a href="#">Read Terms</a> </span>
                              </label><br>
                             <small class="tnc" style="color:red; display:none;">Please Select Terms & Conditon</small>
                            </div>
                           <br>
                            <div class="form-group">
                              <!-- href="get-started.php" -->
                              <input type="hidden" class="ref_id" name="ref_id" value="<?php echo $_GET['ref'];?>">
                             <button type="button" class="col button button-large button-round button-fill w-75 mx-auto text-white btn-success text-capitalize submitsignup"  style="font-size: 20px;background:#91d18b;min-height:40px;font-weight:600">Sign Up </button>
                            </div>  
                            
                             
                           <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                          </form>
                    <div class="form-group text-center">
                    <p class="text-center" style="font-weight:500"><span class="black">Already have a account ? </span><a href="login.php" class="link external"><span>Login</span></a></p>
                    </div>  
                    <p class="pt-3" style="font-weight:400;font-size:13px">By sign Up, I agree to BeTasker <a href="#">Terms & Conditions</a> and <a href="#">Community Guidelines</a>, <a href="#">Privacy Policy.</a></p>
                    <p class="text-center pt-3" style="font-weight:500">© 2021 Betasker All Right Reserved.</p>

            </div><!--container-->
         </div>
      </div><!----page-content---> 
 </div>

<!-- ajax call -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
         //signup using ajax
    $(document).ready(function() {
        $('.submitsignup').click(function(e){
            e.preventDefault();
            var name     = $(".name").val();
            var email    = $(".email").val();
            var mobile   = $(".mobile").val();
            var password = $(".password").val();
            var role     = $(".role").val();
            var ref_id   = $(".ref_id").val();
           if(name ==''){
            
            $(".fname_err").show();
            }else if(email ==''){
            $(".fname_err").hide();
            $(".email_err").show();
            }
            // else if(mobile ==''){
            // $(".fname_err").hide();
            // $(".email_err").hide();    
            // $(".mob_err").show();
            // }
            else if(password ==''){
            $(".pass_err").show();
            $(".fname_err").hide();
            $(".email_err").hide();    
            // $(".mob_err").hide();
            }else if(role ==''){
            $(".role_err").show();
            $(".pass_err").hide();
            $(".fname_err").hide();
            $(".email_err").hide();    
            // $(".mob_err").hide();
            }else if ($('input[type=checkbox]:checked').length == 0) {
            $(".tnc").show();
            $(".role_err").hide();
            $(".pass_err").hide();
            $(".fname_err").hide();
            $(".email_err").hide();    
            // $(".mob_err").hide();
            }else{    
            $.ajax({type: "POST", url: "controller/api/signup.php",dataType: "json",
            data: {name:name,email:email,mobile:mobile,password:password,role:role,ref_id:ref_id},
            success : function(data){
            if (data.status=='success') {
            $(".tnc").hide();
            $("#myform")[0].reset();
            //window.location = 'put-otp.php?mob='+mobile;
            window.location = 'put-otp.php';
            }
            else{
            $(".tnc").hide();
            $('.signupalert').show();   
            $(".showmsg").html(data.response);
            }
            }
            });
            }
       
        });
    });
     </script>
     <script>
function goBack() {
  window.history.back();
}
</script>
</body>
</html>