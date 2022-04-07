<?php
require 'controller/api/google-api/vendor/autoload.php';

// Creating new google client instance
$client = new Google_Client();

// Enter your Client ID
$client->setClientId('62350480345-4vo9o16juvhvcnu0pjl56urucobc2iuk.apps.googleusercontent.com');
// Enter your Client Secrect
$client->setClientSecret('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');
// Enter the Redirect URL
$client->setRedirectUri('https://sharukh.dbtechserver.online/betasker/controller/api/loginwith_gmail.php');

// Adding those scopes which we want to get (email & profile Information)
$client->addScope("email");
$client->addScope("profile");


if(isset($_GET['code'])):

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    // getting profile information
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();

    // showing profile info
    echo "<pre>";
    var_dump($google_account_info);

else: 
    // Google Login Url = $client->createAuthUrl(); 
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

/*body{
  background-image:url(https://designsupply-web.com/samplecontent/vender/codepen/20181014.png) !important;
}*/
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

  
/*.bg-set{
background-image:url(img/dubai.jpg);
background-size: cover;
}
*/
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
    font-size: 20px;
    font-weight: 600;
    min-height: 45px;
    padding-top: 5px;
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




.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #220814;
    opacity: 0.6;
}

h1 {
  text-align: center;
  color: #fff;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  z-index: 3;
  max-width: 400px;
  width: 100%;
  height: 50px;
}

.logo {
    text-align: center;
    color: #fff;
    padding-top:95px;
    z-index: 3;
    left: auto;
    right: auto;
}

#video-background {
  position: fixed;
  right: 0; 
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
  width: auto; 
  height: auto;
  z-index: -100;
}

.bg-video-wrap {
    overflow-y: hidden;
}

.or {
    font-size: 20px;
    position:relative;
}

.or:before {
    content: '';
    position: absolute;
    height: 2px;
    width: 90px;
    background: #fff;
    bottom: 10px;
    left: -100px;
}

.or:after {
    content: '';
    position: absolute;
    height: 2px;
    width: 90px;
    background: #fff;
    bottom: 10px;
    right:-100px;
}

.fade:not(.show) {
    opacity: unset;
}
.alert {
    font-size: 19px;
}
</style>
</head>

<body class="">
  <div class="overlay">
    </div>
<div class = "views">
<!---->
 
<div class="page-conten">
<div class="bg-video-wrap">
    
   
   <center><img class="logo" src="img/betasker-white.png" width="50%"></center>

    <h1>
    
    <div class="row mt-5 pt-5">

       
        <div class="col"><a class="col button button-large button-round button-fill text-white btn-success text-capitalize" href="login.php" style="font-size: 20px;height: 40px;">Sign In </a></div>

      <div class="col"><a class="col button button-large button-round button-fill text-white btn-secondary text-capitalize" href="signup.php" style="font-size: 20px;background:#91d18b;height: 40px;">Sign Up </a></div>

      <div class="col-12 mt-3"> <span class="or">Or continue with</span></div>
              
              <?php if(isset($_GET['wr'])){ ?>
            <div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <div class="row">
        <div class="col-2 bg-danger"><span class="icon-bg"><i class="fa fa-exclamation-triangle text-white"></i></span></div>
        <div class="col-10"> <strong>Sign up failed!(Something went wrong).</strong></div>
    </div>
  </div>
   <?php } ?>
           
            <!-- <div class="col-12 mt-2 "><a class="text-left  col button button-large button-round button-fill text-white btn-secondary text-capitalize" href="#" style="font-size: 20px;background:#91d18b;height: 40px;"><i class="fa fa-facebook text-white"></i> &nbsp;&nbsp;&nbsp;Facebook </a>
            </div> -->

            <div class="col-12 mt-2 text-left"><a class="text-left col button button-large button-round button-fill text-dark btn-secondary text-capitalize" href="<?php echo $client->createAuthUrl(); ?>" style="font-size: 20px;background:#fff;height: 40px;color#000"><i class="fa fa-google text-dark"></i>&nbsp;&nbsp;&nbsp; Google </a>
            </div>

             <div class="col-12 mt-4 text-left">
                  <p class="text-white pl-2" style="font-size:14px;color:#fff;"> By signing up, i agree to Btask Terms & Conditions, & Community Guidelines.</p>
             </div>
    </div>

      <!----->  

    </h1>
  </div>

  <video autoplay loop id="video-background" muted>
  <source src="img/login-bg.webm" type="video/webm">
</video>

    </h1>
  </div>


</div>  <!----page-content---> 
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/js/framework7.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.min.css"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script>
        </script>

</body>
</html>
<?php endif; ?>
