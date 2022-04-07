<?php

include("controller/config.php");

//for otp function
//$getting_no = $_GET['mob'];
//$get_udetails  = "SELECT * FROM account WHERE mobile_no = '$getting_no'";
//$chku    = mysqli_query($con,$get_udetails);
//$getuser = mysqli_fetch_array($chku);
// $username = $getuser['fullname'];
// $email    = $getuser['email_address'];
//$otp      = rand(1000,9999);
// $mail_otp = mt_rand(1000,9999);
// $update = "UPDATE `account` SET reg_otp_email='$mail_otp' WHERE mobile_no='$getting_no'";
// $sql_update = mysqli_query($con, $update);

?>

<!DOCTYPE html>
<html>
  
  <head>
    <meta name = "viewport" content = "width = device-width, initial-scale = 1,
    maximum-scale = 1, minimum-scale = 1, user-scalable = no, minimal-ui" />
    <meta name="theme-color" content="#05b2de">
    <meta name = "apple-mobile-web-app-capable" content = "yes" />
    <meta name = "apple-mobile-web-app-status-bar-style" content = "black" />
    <title>Betasker</title>
    <link rel = "stylesheet"
      href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.min.css" />
      <link rel = "stylesheet"
        href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.colors.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <style type="text/css">
          .navbar {
    background: #05a0c7 !important;
}

.black {
    color: #000;
    font-weight: 500;
}

 .weight-500{
  font-weight: 500;
 }

 .otp-bg{
    background-image:none ;
 }

 input {
    padding: 5px !IMPORTANT;
    height: 40px !important;
}

.custom-inputb{
        border-radius: 38px;
        padding:4px;
}

        </style>
      </head>
      
      <body class="otp-bg">
        <div class = "views">
          
          <div class="navbar">
            <div class="navbar-bg"></div>
            <div class="navbar-inner sliding">
              <div class="left">
                <!--<a href="#" onclick="goBack()"  class="link back">-->
                <!--  <i class="icon icon-back"></i>-->
                <!--</a>-->
              </div>
              <div class="title pt-2 pl-2"><span class="subtitle"><h6>OTP </h6></span></div>
              <div class="right">
                <a class="link"></a>




              </div>
            </div>
          </div>
          <!-- registration form start -->
          <div class = "page-content">
            
            
            <form id="myform">
              <div class = "content-block-title text-center" style="padding-top: 0px;">
                <div class="text-center mx-auto pt-5 pb-0 w-75"><!-- <img class="img-fluid " src="img/put-otp.png"> -->
                    <img class="img-fluid " src="img/verification-otp.png">
                </div>
              </div>
              <center><h3 class="">Verification</h3></center>
              <div class = "list-block" style="width: 94%; margin: auto;">
                  
                   <div class="alert alert-danger signupalert" role="alert" style="display: none;"></div>
                   
                  

                <ul class="input">
                  <li>
                    <div class="block mx-auto">
                      <div class="row no-gap" style="border:none;">
                        <!--<div class="col">-->
                        <!--  <div class="item-input-wrap custom-inputb">-->
                        <!--    <input type="number" name="mob_otp" placeholder="Enter 4 -Digit OTP via Mobile" class="mob_otp">-->
                        <!--  </div>-->
                        <!--</div>-->
                        

                        <!--<div class="col">-->
                        <!--  <div class="item-input-wrap custom-inputb">-->
                        <!--    <input type="number" placeholder="" class="">-->
                        <!--  </div>-->
                        <!--</div>-->
                        <!--<div class="col">-->
                        <!--  <div class="item-input-wrap custom-inputb">-->
                        <!--    <input type="number" placeholder="" class="">-->
                        <!--  </div>-->
                        <!--</div>-->
                        <!--<div class="col">-->
                        <!--  <div class="item-input-wrap custom-inputb">-->
                        <!--    <input type="number" placeholder="" class="">-->
                        <!--  </div>-->
                        <!--</div>-->
                        
                      </div>
                    </div>
                  </li>
                  <!--<li>-->
                  <!--  <p class="pt-1 pl-3 ft-14">You wil get a <strong>OTP</strong> via SMS</p>-->
                  <!--</li>-->
                  
                  
                   <li>
                    <div class="block mx-auto">
                      <div class="row no-gap" style="border:none;">
                        <div class="col">
                          <div class="item-input-wrap custom-inputb">
                            <input type="number" name="email_otp" placeholder="Enter 4 -Digit OTP via E-mail" class="email_otp">
                          </div>
                        </div>
                       
                      </div>
                    </div>
                  </li>
                  <li>
                    <p class="pt-1 pl-3 ft-14">You wil get a <strong>OTP</strong> via  E-Mail</p>
                  </li>
                  
                  
                  
                  <input type="hidden"  name="mob" value="<?php echo $_GET['mob'];?>" class="mob" >

                  
                  
                  <li class="pt-4">
                    
                   
                      <button type="submit" class="reg-btn col button button-sm button-round button-fill otpbtn"><img class="img-fluid custom-with" src="img/send.png"> Submit</button>
                    
                  </li>
                  <li><p class="text-center pt-2"><span class="black">Don't receive verification code ?</span> <a href="" class="weight-500" style="color:#0090b5">Resend</a> </p></li>
                </ul>
                <div class = "content-block-title text-center">
                  <p>Copyright  @ Betasker</p>
                </div>
                
              </div>
            </div>
          </div>
        </form>
        
        <!--wrong crentials alert -->
        
        
        
        
        <script>
        function goBack() {
        window.history.back();
        }
        </script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/js/framework7.min.js"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.min.css"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       
       
        <!--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
    <script>
         //signup using ajax

    $(document).ready(function() {

        $('.otpbtn').click(function(e){

            e.preventDefault();

            //var mob_otp     = $(".mob_otp").val();
            var email_otp   = $(".email_otp").val();
            var mobile      = $(".mob").val();
           
           
           // alert(mobile);

            $.ajax({type: "POST", url: "controller/api/otp_verify.php",dataType: "json",

            data: {email_otp:email_otp,mobile:mobile},

            success : function(data){

            if (data.status=='success') {
           
            $("#myform")[0].reset();

           // $('.signupalert').show();   

            //$(".signupalert").html("<p>"+data.response+"</p>");

            window.location = 'get-started.php';

            }

            else{
                
              //window.location = 'put-otp.php?err&mob='+mobile;

            $('.signupalert').show();   

            $(".signupalert").html("<p>"+data.response+"</p>");

            }

                }

            });



        });

    });

     </script>
      </body>
    </html>
   