<?php include("controller/cookie.php");?>

<!DOCTYPE html>
<html>
<head>
<meta name = "viewport" content = "width = device-width, initial-scale = 1,
maximum-scale = 1, minimum-scale = 1, user-scalable = no, minimal-ui" />
<meta name="theme-color" content="#05b2de">
<meta name = "apple-mobile-web-app-capable" content = "yes" />
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
 color: #05a0c7 !important;
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
  .custom-accordion {
    padding-left: 0;
    padding-right: 0;
  }

  .custom-accordion .accordion-item-toggle {
    padding: 0px 15px;
    height: 44px;
    line-height: 44px;
    font-size: 17px;
    color: #000;
    border-bottom: 1px solid rgba(0, 0, 0, 0.15);
    cursor: pointer;
  }

  .custom-accordion .accordion-item-toggle:active {
    background: rgba(0, 0, 0, 0.15);
  }

  .custom-accordion .accordion-item-toggle span {
    display: inline-block;
    margin-left: 15px;
  }

  .custom-accordion .accordion-item:last-child .accordion-item-toggle {
    border-bottom: none;
  }

  .custom-accordion .icon-plus,
  .custom-accordion .icon-minus {
    display: inline-block;
    width: 22px;
    height: 22px;
    border: 1px solid #000;
    border-radius: 100%;
    line-height: 20px;
    text-align: center;
  }

  .custom-accordion .icon-minus {
    display: none;
  }

  .custom-accordion .accordion-item-opened .icon-minus {
    display: inline-block;
  }

  .custom-accordion .accordion-item-opened .icon-plus {
    display: none;
  }

  .custom-accordion .accordion-item-content {
    padding: 0px 15px;
  }


li.accordion-item {
    border-bottom: 2px solid #ebeaec;
    padding: 19px 0px;
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Faq </h6></span></div>


</div>
</div>

<!---->
<div class="page-content pt-5 pl-3">
<div class="" style="margin-top:40px"></div>


<div class="card">
<div class="card-content card-content-padding set-ft">
<div class="list accordion-list">
<ul>

<?php
$query = mysqli_query($con,"SELECT * FROM faq ORDER BY id DESC");
while($userData = mysqli_fetch_array($query)){
 
?>
<li class="accordion-item">
<a href="#" class="item-link item-content">
<div class="item-inner">
<div class="item-title"><?php echo $userData['title'];?></div>
</div>
</a>
<div class="accordion-item-content" style="" aria-hidden="true">
<div class="block">
<p>
<?php echo $userData['descp'];?>
</p>
</div>
</div>
</li>
<?php } ?>



</ul>

</div>
</div>
</div><!---->





<div style="padding-bottom:20px; padding-top:70px"></div>
</div>  <!----page-content---> 

<!----footer------>
<?php include 'include/footer2.php';?> 
<!----footer------>
<script>
	var app = new Framework7();

var $ = Dom7;

$('.accordion-item').on('accordion:opened', function () {
  app.dialog.alert('Accordion item opened');
});

$('.accordion-item').on('accordion:closed', function (e) {
  app.dialog.alert('Accordion item closed');
});

app.on('accordionOpened', function (el) {
  console.log('The following element opened:');
  console.log(el);
});
</script>
</body>
</html>