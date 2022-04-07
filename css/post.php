<!DOCTYPE html>

<html>

  

  <head>

    <meta name = "viewport" content = "width = device-width, initial-scale = 1,

    maximum-scale = 1, minimum-scale = 1, user-scalable = no, minimal-ui" />

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
  	background-image:url(img/bg-home.png);
  }

.ico-user {
    font-weight: 600!important;
    background-size: cover;
    border-radius: 40px;
    width: 40px;
    height: 40px;
    right: 0;
    background-color: rgba(93, 156, 236, .3)!important;
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

<div class="title"><span class="subtitle"></span></div>

<!-- <div class="right">

<a class="link"> <i class="fa fa-search float-right text-white" style="width: 12%;

            right: 12px; margin-top: 10px;font-size:26px"></i></a>

</div> -->

</div>

</div>

<!--Home-->

<div class="page-content pt-5 pl-3">

 <h3 class="pl-3 text-white"><img class="ico-user" src="http://forestathome.com/mfa/images/avatars/5s.png"> <strong style="pl-2">Hello Arpit </strong></h3>
 <P class="pl-5 text-white" style="padding-left: 50px;color:#fff;font-weight:600"><span class="pl-3"></span>Good Morning</span></P>

<div class="" style="margin-top:100px">
 </div>

<div class="pr-2 mt-2 mb-2 d-flex card mx-3">
<div class="row pl-2 align-items-center">
<div class="col-80 text-center">
	<h3 class="pl-2 pt-3">Total post Job</h3>
	<hr>
	<h1 class="text-danger">20</h1>
</div>
<div class="col-20">
	<i class="fa fa-arrow-right"></i>
</div>
</div>
</div><!------->


<div class="pr-2 mt-2 mb-2 d-flex card mx-3">
<div class="row pl-2 align-items-center">
<div class="col-80 text-center">
	<h3 class="pl-2 pt-3">Total Spend</h3>
	<hr>
	<h1 class="text-danger">1000 $</h1>
</div>
<div class="col-20">
	<i class="fa fa-arrow-right"></i>
</div>
</div>
</div><!------->

<div class="pr-2 mt-2 mb-2 d-flex card mx-3">
<div class="row pl-2 align-items-center">
<div class="col-80 text-center">
	<h3 class="pl-2 pt-3">active Project</h3>
	<hr>
	<h1 class="text-danger">10</h1>
</div>
<div class="col-20">
	<i class="fa fa-arrow-right"></i>
</div>
</div>
</div><!------->


<?php 
for ($i=1; $i < 5; $i++) { ?>
<div class="card">
<div class="card-content card-content-padding set-ft">
<h4 class="pl-2 pt-2">title</h4>
<p class="pl-2">Card with header and footer. Card headers are used to display card titles and footers for additional information or just for custom actions.</p></div>
</div>

<?php }

?>

<div style="padding-bottom:20px; padding-top:70px"></div>
</div>  <!----page-content---> 


<!----footer----->
<div class="footer">
<div class="toolbar" style="background: linear-gradient(to right, #e1effb, #f9f9f9);height: 62px;">
               <div class="toolbar-inner" style="padding-bottom: 10px">
                  <a href="home.php" class="link external">
                     <i class="fa fa-home fa-2x setfooternav-active pb-3" aria-hidden="true"></i><h1 class="ftmanage pt-2">Home</h1>
                  </a>

                  <a href=".php" class="link external">
                    <i class="fa fa-briefcase fa-2x setfooternav pb-3" aria-hidden="true"></i>
                    <h1 class="ftmanage pt-2">Job</h1>
                  </a>

                  <a href = ".php" class = "link">
                     <i class="fa fa-money fa-2x setfooternav pb-3" aria-hidden="true"></i>
                      <h1 class="ftmanage pt-2">Payment</h1>
                  </a> 
                 
                <a href="recharge.php" class="link external">
                      <i class="fa fa-commenting-o fa-2x setfooternav pb-3" aria-hidden="true"></i>
                      <h1 class="ftmanage pt-2">Chat</h1>

                  </a>

                   <a href="recharge.php" class="link external">
                      <i class="fa fa-cog fa-2x setfooternav pb-3" aria-hidden="true"></i>
                      <h1 class="ftmanage pt-2">Setting</h1>

                  </a>

          </div>
            </div>
</div>            
<!----footer------>   

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

        <script>

       

        </script>

      </body>

    </html>