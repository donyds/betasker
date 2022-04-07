<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width = device-width, initial-scale = 1,    maximum-scale = 1, minimum-scale = 1, user-scalable = no, minimal-ui" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta name="theme-color" content="#05b2de">
		<title>Betasker</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.colors.min.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<style type="text/css">
		.navbar {
		background: #0090b5;
		}
	/*	.navbar-inner.sliding {
    background: #0090b5;
}*/
		.input img {
		filter: brightness(0.2);
		}

		.item-media {
    padding-right: 0px !important;
}
.list-block .item-media+.item-inner {
    margin-left: 0px !important;
}

.item-media .fa {
    font-size: 28px;
    color: #0090b5;
}

.reg-btn{
	font-size:23px;
}



		</style>
	</head>
	<body class="otp-bg" style="background-image:none;">
		<div class="views">
			<div class="navbar">
				<div class="navbar-bg"></div>
				<div class="navbar-inner sliding">
					<div class="left"> <a href="#" onclick="goBack()" class="link back"><i class="icon icon-back"></i>                </a> </div>
					<div class="title"><span class="subtitle"><h6 class="pt-2">Forgot Password</h6></span></div>
					<div class="right"> <a class="link"></a> </div>
				</div>
			</div>
			<!-- registration form start -->
			<div class="page-content pt-5">
			    
			    
				<form id="myfoem" method="POST" action="controller/api/login.php">
					<div class="content-block-title text-center" style="padding-top: 0px;">
						<div class="text-center mx-auto pt-5 pb-0 w-75"><img class="img-fluid " src="img/otp-topimg.jpg"></div>
					</div>
					<center>
					<h3>Forgot Password</h3>
								  <!--<div class="alert alert-danger signupalert" role="alert" style="display: none;"></div>-->
                                  
                         <div class="alert col-11 ml-1 mr-1 alert-danger alert-dismissible fade show signupalert" role="alert" style="display: none;">
                            <div class="row">   
                             <div class="col-1 bg-danger"> 	
                              <span class="icon-bg"><i class="fa fa-exclamation-triangle"></i></span></div>
                               <div class="col-10 pt-2 pl-0 showmsg">
                              
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            </div>




                            <div class="alert col-11 ml-1 mr-1 alert-success alert-dismissible fade show success" role="alert" style="display: none;">
                            <div class="row">   
                             <div class="col-1 bg-success"> 	
                              <span class="icon-bg"><i class="fa fa-exclamation-triangle"></i></span></div>
                               <div class="col-10 pt-2 pl-0 success_msg">
                              
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            </div>


 
                                 <div class="alert col-11 ml-1 mr-1 alert-success alert-dismissible fade show" role="alert" style="display: none;">
                                 	 <div class="row">   
                             <div class="col-1 bg-success"> 	

                           <span class="icon-bg"><i class="fa fa-check-circle"></i></span></div> 
                        
                        
                            <div class="col-10 pl-0 showsucmsg"></div>
                        
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        </div>


					</center>
					<div class="list-block" style="width: 94%; margin: auto;">
						<ul class="input">
							<li>
								<div class="item-content input-login">
									<div class="item-media"><!-- <img class="img-fluid w-50" src="img/phone.png"> --><i class="fa fa-mobile"></i> </div>
									<div class="item-inner">
										<div class="item-input"> <input type="email" class="email" placeholder="Enter Your Email" name="email" required="" required=""> </div>
									</div>
								</div>
							    <small class="email_err" style="color:red; display:none;">Please Select Email</small>

								
							</li>
								
							
							<li>
								<p class="pt-3 pl-2 ft-14"><a href="login.php">Login Here</a></p>
							</li>


							<li class="pt-4">
								<a href="otp-screen.php">
							     <button type="submit" name="submit" class="reg-btn col button button-sm button-round button-fill check_email">
							     	<!-- <i class="fa fa-paper-plane"><i> --> <img class="img-fluid custom-with" src="img/send.png" style="filter:unset;"> &nbsp; Submit
							     </button>
							   </a>
							 </li>

						</ul>
						<div class="content-block-title text-center">
							<p>Copyright @ Betasker</p>
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/js/framework7.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.min.css"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script>
		</script>
		
		
		<!-- ajax call -->
     <script>
         //signup using ajax

    $(document).ready(function() {

        $('.check_email').click(function(e){

            e.preventDefault();

            var email   = $(".email").val();

             if(email ==''){

            $(".email_err").show();

            }else{

            //alert(password);

            $.ajax({type: "POST", url: "controller/api/verify_email.php",dataType: "json",

            data: {email:email},

            success : function(data){

            if (data.status=='success') {
            
            $(".email_err").hide();
            $("#myfoem")[0].reset();
            $('.signupalert').hide();   

            $('.success').show();   
           
            $(".success_msg").html(data.response);

            //window.location = 'browse-tasks.php';

            }

            else{
            $(".email_err").hide();

            $('.success').hide();   

            $('.signupalert').show();   

            $(".showmsg").html(data.response);

            }

                }

            });

          }

        });

    });

     </script>
     <!--library  -->

	</body>
</html>