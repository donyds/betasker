<?php include("controller/cookie.php");?>
<?php
$task_id   = $_GET['task_id'];
$get_task  = mysqli_query($con,"SELECT * FROM task_create WHERE task_id='$task_id'");
$getdata   = mysqli_fetch_array($get_task);

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
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.min.css" />

<link rel = "stylesheet"href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.material.colors.min.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css"> -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style type="text/css">


.icost {
    padding: 4px 5px;
    border: 1px solid;
    border-radius: 50px;
}

input#remember {
    width: unset !important;
    margin-left: 0px !important;
}

/*----------------------*/
.onoffswitch {
    position: relative; width: 90px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}

.onoffswitch-checkbox {
    display: none;
}

.onoffswitch-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #999999; border-radius: 20px;
}

.onoffswitch-inner {
    display: block; width: 200%; margin-left: -100%;
    -moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
    -o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
}

.onoffswitch-inner:before, .onoffswitch-inner:after {
    display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
    font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
}

.onoffswitch-inner:before {
    content: "YES";
    padding-left: 10px;
    background-color: #2FCCFF; color: #FFFFFF;
}

.onoffswitch-inner:after {
    content: "NO";
    padding-right: 10px;
    background-color: #EEEEEE; color: #999999;
    text-align: right;
}

.onoffswitch-switch {
    display: block; width: 18px; margin: 6px;
    background: #FFFFFF;
    border: 2px solid #999999; border-radius: 20px;
    position: absolute; top: 0; bottom: 0; right: 56px;
    -moz-transition: all 0.3s ease-in 0s; -webkit-transition: all 0.3s ease-in 0s;
    -o-transition: all 0.3s ease-in 0s; transition: all 0.3s ease-in 0s; 
}

.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
    margin-left: 0;
}

.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
    right: 0px; 
}


 .onoffswitch1 {
    position: relative; width: 90px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}

.onoffswitch1-checkbox {
    display: none;
}

.onoffswitch1-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #999999; border-radius: 30px;
}

.onoffswitch1-inner {
    display: block; width: 200%; margin-left: -100%;
    -moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
    -o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
}

.onoffswitch1-inner:before, .onoffswitch1-inner:after {
    display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
    font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
    border-radius: 30px;
    box-shadow: 0px 15px 0px rgba(0,0,0,0.08) inset;
}

.onoffswitch1-inner:before {
    content: "YES";
    padding-left: 10px;
    background-color: #2FCCFF; color: #FFFFFF;
    border-radius: 30px 0 0 30px;
}

.onoffswitch1-inner:after {
    content: "NO";
    padding-right: 10px;
    background-color: #EEEEEE; color: #999999;
    text-align: right;
    border-radius: 0 30px 30px 0;
}

.onoffswitch1-switch {
    display: block; width: 30px; margin: 0px;
    background: #FFFFFF;
    border: 2px solid #999999; border-radius: 30px;
    position: absolute; top: 0; bottom: 0; right: 56px;
    -moz-transition: all 0.3s ease-in 0s; -webkit-transition: all 0.3s ease-in 0s;
    -o-transition: all 0.3s ease-in 0s; transition: all 0.3s ease-in 0s; 
    background-image: -moz-linear-gradient(center top, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 80%); 
    background-image: -webkit-linear-gradient(center top, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 80%); 
    background-image: -o-linear-gradient(center top, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 80%); 
    background-image: linear-gradient(center top, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 80%);
    box-shadow: 0 1px 1px white inset;
}

.onoffswitch1-checkbox:checked + .onoffswitch1-label .onoffswitch1-inner {
    margin-left: 0;
}

.onoffswitch1-checkbox:checked + .onoffswitch1-label .onoffswitch1-switch {
    right: 0px; 
}

.onoffswitch2 {
    position: relative; width: 90px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}

.onoffswitch2-checkbox {
    display: none;
}

.onoffswitch2-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #999999; border-radius: 5px;
}

.onoffswitch2-inner {
    display: block; width: 200%; margin-left: -100%;
    -moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
    -o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
}

.onoffswitch2-inner:before, .onoffswitch2-inner:after {
    display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
    font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
}

.onoffswitch2-inner:before {
    content: "YES";
    padding-left: 10px;
    background-color: #2FCCFF; color: #FFFFFF;
}

.onoffswitch2-inner:after {
    content: "NO";
    padding-right: 10px;
    background-color: #EEEEEE; color: #999999;
    text-align: right;
}

.onoffswitch2-switch {
    display: block; width: 18px; margin: 0px;
    background: #FFFFFF;
    border: 2px solid #999999; border-radius: 5px;
    position: absolute; top: 0; bottom: 0; right: 68px;
    -moz-transition: all 0.3s ease-in 0s; -webkit-transition: all 0.3s ease-in 0s;
    -o-transition: all 0.3s ease-in 0s; transition: all 0.3s ease-in 0s; 
    background-image: -moz-linear-gradient(center top, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 100%);
    background-image: -webkit-linear-gradient(center top, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 100%);
    background-image: -o-linear-gradient(center top, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 100%);
    background-image: linear-gradient(center top, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 100%);
}

.onoffswitch2-checkbox:checked + .onoffswitch2-label .onoffswitch2-inner {
    margin-left: 0;
}

.onoffswitch2-checkbox:checked + .onoffswitch2-label .onoffswitch2-switch {
    right: 0px; 
}

.onoffswitch3
{
    position: relative; width: 90px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}

.onoffswitch3-checkbox {
    display: none;
}

.onoffswitch3-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 0px solid #999999; border-radius: 0px;
}

.onoffswitch3-inner {
    display: block; width: 200%; margin-left: -100%;
    -moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
    -o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
}

.onoffswitch3-inner > span {
    display: block; float: left; position: relative; width: 50%; height: 30px; padding: 0; line-height: 30px;
    font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
}

.onoffswitch3-inner .onoffswitch3-active {
    padding-left: 10px;
    background-color: #EEEEEE; color: #FFFFFF;
}

.onoffswitch3-inner .onoffswitch3-inactive {
    padding-right: 10px;
    background-color: #EEEEEE; color: #FFFFFF;
    text-align: right;
}

.onoffswitch3-switch {
    display: block; width: 18px; margin: 0px; text-align: center; 
    border: 0px solid #999999;border-radius: 0px; 
    position: absolute; top: 0; bottom: 0;
}
.onoffswitch3-active .onoffswitch3-switch {
    background: #27A1CA; left: 0;
}
.onoffswitch3-inactive .onoffswitch3-switch {
    background: #A1A1A1; right: 0;
}

.onoffswitch3-active .onoffswitch3-switch:before {
    content: " "; position: absolute; top: 0; left: 18px; 
    border-style: solid; border-color: #27A1CA transparent transparent #27A1CA; border-width: 15px 9px;
}


.onoffswitch3-inactive .onoffswitch3-switch:before {
    content: " "; position: absolute; top: 0; right: 18px; 
    border-style: solid; border-color: transparent #A1A1A1 #A1A1A1 transparent; border-width: 15px 9px;
}


.onoffswitch3-checkbox:checked + .onoffswitch3-label .onoffswitch3-inner {
    margin-left: 0;
}

.onoffswitch4 {
    position: relative; width: 90px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}

.onoffswitch4-checkbox {
    display: none;
}

.onoffswitch4-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #27A1CA; border-radius: 0px;
}

.onoffswitch4-inner {
    display: block; width: 200%; margin-left: -100%;
    -moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
    -o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
}

.onoffswitch4-inner:before, .onoffswitch4-inner:after {
    display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 26px;
    font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
    border: 2px solid transparent;
    background-clip: padding-box;
}

.onoffswitch4-inner:before {
    content: "Yes";
    padding-left: 10px;
    background-color: #FFFFFF; color: #27A1CA;
}

.onoffswitch4-inner:after {
    content: "No";
    padding-right: 10px;
    background-color: #FFFFFF; color: #666666;
    text-align: right;
}

.onoffswitch4-switch {
    display: block; width: 25px; margin: 0px;
    background: #27A1CA;
    position: absolute; top: 0; bottom: 0; right: 65px;
    -moz-transition: all 0.3s ease-in 0s; -webkit-transition: all 0.3s ease-in 0s;
    -o-transition: all 0.3s ease-in 0s; transition: all 0.3s ease-in 0s; 
}

.onoffswitch4-checkbox:checked + .onoffswitch4-label .onoffswitch4-inner {
    margin-left: 0;
}

.onoffswitch4-checkbox:checked + .onoffswitch4-label .onoffswitch4-switch {
    right: 0px; 
}



.cmn-toggle 
{
  position: absolute;
  margin-left: -9999px;
  visibility: hidden;
}

.cmn-toggle + label 
{
  display: block;
  position: relative;
  cursor: pointer;
  outline: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

input.cmn-toggle-round-flat + label 
{
  padding: 2px;
  width: 75px;
  height: 30px;
  background-color: #dddddd;
  -webkit-border-radius: 60px;
  -moz-border-radius: 60px;
  -ms-border-radius: 60px;
  -o-border-radius: 60px;
  border-radius: 60px;
  -webkit-transition: background 0.4s;
  -moz-transition: background 0.4s;
  -o-transition: background 0.4s;
  transition: background 0.4s;
}

input.cmn-toggle-round-flat + label:before, input.cmn-toggle-round-flat + label:after 
{
  display: block;
  position: absolute;
  content: "";
}

input.cmn-toggle-round-flat + label:before 
{
  top: 2px;
  left: 2px;
  bottom: 2px;
  right: 2px;
  background-color: #fff;
  -webkit-border-radius: 60px;
  -moz-border-radius: 60px;
  -ms-border-radius: 60px;
  -o-border-radius: 60px;
  border-radius: 60px;
  -webkit-transition: background 0.4s;
  -moz-transition: background 0.4s;
  -o-transition: background 0.4s;
  transition: background 0.4s;
}

input.cmn-toggle-round-flat + label:after 
{
  top: 4px;
  left: 4px;
  bottom: 4px;
  width: 22px;
  background-color: #dddddd;
  -webkit-border-radius: 52px;
  -moz-border-radius: 52px;
  -ms-border-radius: 52px;
  -o-border-radius: 52px;
  border-radius: 52px;
  -webkit-transition: margin 0.4s, background 0.4s;
  -moz-transition: margin 0.4s, background 0.4s;
  -o-transition: margin 0.4s, background 0.4s;
  transition: margin 0.4s, background 0.4s;
}

input.cmn-toggle-round-flat:checked + label 
{
  background-color: #27A1CA;
}

input.cmn-toggle-round-flat:checked + label:after 
{
  margin-left: 45px;
  background-color: #27A1CA;
}

div.switch5 { clear: both; margin: 0px 0px; }
div.switch5 > input.switch:empty { margin-left: -999px; }
div.switch5 > input.switch:empty ~ label { position: relative; float: left; line-height: 1.6em; text-indent: 4em; margin: 0.2em 0px; cursor: pointer; -moz-user-select: none; }
div.switch5 > input.switch:empty ~ label:before, input.switch:empty ~ label:after { position: absolute; display: block; top: 0px; bottom: 0px; left: 0px; content: "off"; width: 3.6em; height: 1.5em; text-indent: 2.4em; color: rgb(153, 0, 0); background-color: rgb(204, 51, 51); border-radius: 0.3em; box-shadow: 0px 0.2em 0px rgba(0, 0, 0, 0.3) inset; }
div.switch5 > input.switch:empty ~ label:after { content: " "; width: 1.4em; height: 1.5em; top: 0.1em; bottom: 0.1em; text-align: center; text-indent: 0px; margin-left: 0.1em; color: rgb(255, 136, 136); background-color: rgb(255, 255, 255); border-radius: 0.15em; box-shadow: 0px -0.2em 0px rgba(0, 0, 0, 0.2) inset; transition: all 100ms ease-in 0s; }
div.switch5 > input.switch:checked ~ label:before { content: "on"; text-indent: 0.5em; color: rgb(102, 255, 102); background-color: rgb(51, 153, 51); }
div.switch5 > input.switch:checked ~ label:after { margin-left: 2.1em; color: rgb(102, 204, 102); }
div.switch5 > input.switch:focus ~ label { color: rgb(0, 0, 0); }
div.switch5 > input.switch:focus ~ label:before { box-shadow: 0px 0px 0px 3px rgb(153, 153, 153); }







.switch6 {  max-width: 17em;  margin: 0 auto; }
.switch6-light > span, .switch-toggle > span {  color: #000000; }
.switch6-light span span, .switch6-light label, .switch-toggle span span, .switch-toggle label {  color: #2b2b2b; }

.switch-toggle a, 
.switch6-light span span { display: none; }

.switch6-light { display: block; height: 30px; position: relative; overflow: visible; padding: 0px; margin-left:0px; }
.switch6-light * { box-sizing: border-box; }
.switch6-light a { display: block; transition: all 0.3s ease-out 0s; }

.switch6-light label, 
.switch6-light > span { line-height: 30px; vertical-align: middle;}

.switch6-light label {font-weight: 700; margin-bottom: px; max-width: 100%;}

.switch6-light input:focus ~ a, .switch6-light input:focus + label { outline: 1px dotted rgb(136, 136, 136); }
.switch6-light input { position: absolute; opacity: 0; z-index: 5; }
.switch6-light input:checked ~ a { right: 0%; }
.switch6-light > span { position: absolute; left: -100px; width: 100%; margin: 0px; padding-right: 100px; text-align: left; }
.switch6-light > span span { position: absolute; top: 0px; left: 0px; z-index: 5; display: block; width: 50%; margin-left: 100px; text-align: center; }
.switch6-light > span span:last-child { left: 50%; }
.switch6-light a { position: absolute; right: 50%; top: 0px; z-index: 4; display: block; width: 50%; height: 100%; padding: 0px; }





/*------------------*/

.toolbar.messagebar {
position: fixed !important;
bottom: 0px !important;
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

.footer .navbar, .toolbar{
color:#212529;}
.navbar a.link, .subnavbar a.link, .toolbar a.link{
color:unset ;}

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

/*buttongroup label{
  border: 1px solid #fff;
  padding: 6px 12px;  
  cursor: pointer;
  color: #fff;
  background-color: #777;
  transition: all 0.2s;
}

.buttongroup label:not(:first-of-type){
  border-left: 0;
}

.buttongroup label:hover{
  background-color: #333;
}*/

/* Hide the radio button */
input[name='market']{ 
  display:none;
}

/* The checked buttons label style */
input[name='market']:checked+label{
  background-color: #05a0c7;
} 
/*.buttongroup label {
    border: 1px solid #fff;
    padding: 6px 12px;
    cursor: pointer;
    color: #fff;
    background-color: #777;
    transition: all 0.2s;
}*/

a.add-imgs {
    padding-top: 15px;
    padding-right: 20px;
}

span.tot {
    position: absolute;
    left: 20px;
    font-size: 15px;
    bottom: 2px;
}


.mycard-footer {
    font-size: 15px;
    text-align: center;
    padding-bottom: 10px;
}

.gallery-card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
    margin-bottom:14px;
}
.gallery-card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    /*padding: 1.25rem;*/
}
.gallery-card img {
  text-align: center;
  padding:20px;
}
label{
    margin-bottom: 0 !important;
}
/*--checkbox--*/

.block-check {
    display: block;
    position: relative;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    text-align: center;
}

/* Hide the browser's default checkbox */
.block-check input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    cursor: pointer;
}

/* On mouse-over, add a grey background color */
.block-check:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.block-check input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.block-check input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.block-check .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

/*.bg-adc{
     background-color: #05a0c7 !important;
     color: #fff !Important;
}*/

.bg-adc{
     background-color: #ededed !important;
     color: #000 !Important;
}

.pac-container{
    z-index: 9990 !important;
}

input#Fixed {
    width: auto;
    min-width: 10%;
    top: 5px;
    position: relative;
}
input#Hourly {
    width: auto;
    min-width: 10%;
    top: 5px;
    position: relative;
}
.buttongroup.text-center.input-group label {
    padding-left: 10px;
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
<div class="title pt-1 pl-2"><span class="subtitle"><h6>Post Task</h6></span></div>

<div class="right">

 
  
</div>


</div>
</div>

<!---->
<div class="page-content pt-5 pl-3" style="overflow-x: hidden;">
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

             
              <label>Task Title</label>
              <input type="text" name="task_title" class="task_title" placeholder="Enter Task Title" value="<?php echo $getdata['task_title'];?>">
              <small class="title_err" style="color:red; display:none;">Please Select Task Title</small>
              <br>
              <label>Describe your task</label>
              <textarea name="descp" class="descp" placeholder="Enter  Task Description"><?php echo $getdata['task_description'];?></textarea> 
              <small class="descp_err" style="color:red; display:none;">Please Select Describe your task</small>

            <!--   <span class="text-info" style="color:#17a2b8 !important;"><a style="color:#17a2b8;" href="add-img.php"> <i class="fa fa-plus icost"></i> Add Must haves</a></span><br> -->

              <div class="row pt-2">
                 <div class="col-8">
                  <h6>Can this task be completed remotely?</h6>
              </div>

                 <div class="col-4">
                     <div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
                    <label class="onoffswitch-label" for="myonoffswitch">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div>
                 </div>
              </div>

              <div class="row mt-3" id="locat">

               Task location (postcode)
                <input type="text" name="task_location" id="location" class="task_title mt-2 task_location" value="<?php echo $getdata['task_location'];?>" placeholder="City Name" autocomplete="off" onclick="mapaddressforcountry()">

              </div>  


            

               <input type="button" name="next" class="next action-button" value="Continue"/>
            </fieldset>
            <fieldset>
                
                
               

                <br>
                 <div class="row">
                     <div class="col-12 pl-0">
               
                    <label>when do you need it done?</label>
                      <input type="date" name="task_end" id="datepicker" min="<?php echo date('Y-m-d');?>" value="<?php echo $getdata['task_end'];?>" class="task_title task_end" placeholder="Select a date">
                    
                    <small class="tend_err" style="color:red; display:none;">Please Select when do you need it done</small>
                     
                      
                      
                       <label class="form-check-label">

        <input type="checkbox" name="remember" id="remember" class="form-check-input remember" value="1" <?php if($getdata['time_prefer'] != 'Anytime') echo 'checked="checked"';?>> <span style="width:unset;padding-left: 20px;"> I need a certain time of day </span>

      </label>

  </div>

            <div class="col-12 mt-5 pl-0" id="ck" style="display:none">

             <h6>What time(s) do you need the Tasker?</h6>

             <div class= "row">
             
             <div class="col-6 mb-2 mt-2">
               <div class="gallery-card">
                    <div class="gallery-card-body">
                      <label class="block-check">
                     <img src="img/icon/morning.png" class="img-flude" />
                     <input type="radio" class="ck time_prefer" value="Morning (Before 10am)" name="time_prefer" <?php if($getdata['time_prefer'] == 'Morning (Before 10am)') echo 'checked="checked"';?>>
                      <span class="checkmark"></span>
                      </label>
                       <div class="mycard-footer">
                        <h6>Morning</h6>
                        <span>Before 10am</span>
                        </div>
                    </div>
                  </div>
             </div><!---->

              <div class="col-6 mb-2 mt-2">
                 <div class="gallery-card">
                    <div class="gallery-card-body">
                      <label class="block-check">
                         <img src="img/icon/midday.png" class="img-flude" />
                    <input type="radio" class="ck time_prefer" value="Midday (10am - 2pm)" name="time_prefer" <?php if($getdata['time_prefer'] == 'Midday (10am - 2pm)') echo 'checked="checked"';?>>
                      <span class="checkmark"></span>
                      </label>
                       <div class="mycard-footer">
                       <h6>Midday</h6>
                        <span>10am - 2pm</span>
                        </div>
                    </div>
                  </div>
             </div><!---->

              <div class="col-6 mb-2 mt-2">
                <div class="gallery-card">
                    <div class="gallery-card-body">
                    <label class="block-check">
                           <img src="img/icon/afternoon.png" class="img-fluid" />
                      <input type="radio" class="ck time_prefer" value="Afternoon (2pm - 6pm)" name="time_prefer" <?php if($getdata['time_prefer'] == 'Afternoon (2pm - 6pm)') echo 'checked="checked"';?>>
                      <span class="checkmark"></span>
                      </label>
                      <div class="mycard-footer">
                        <h6>Afternoon</h6>
                        <span>2pm - 6pm</span>
                        </div>
                    </div>
                  </div>
             </div><!---->

              <div class="col-6 mb-2 mt-2">
             
                  <div class="gallery-card">
                    <div class="gallery-card-body">
                    <label class="block-check">
                    <img src="img/icon/evening.png" class="img-fluid" />
                    <input type="radio" class="ck time_prefer" value="Evening (After 6pm)" name="time_prefer" <?php if($getdata['time_prefer'] == 'Evening (After 6pm)') echo 'checked="checked"';?>>
                      <span class="checkmark"></span>
                      </label>
                       <div class="mycard-footer">
                       <h6>Evening</h6>
                        <span>After 6pm</span>
                        </div>
                    </div>
                  </div>
             </div>  
             
             <div class="col-12 mb-2 mt-2">
               <p>it's Ok,you can sort out exact time with your Task later</p>
             </div>   

             <script>
                  $(document).on('click','.time_prefer',function(){
      var $radio = $(this).closest('form').find('input[type="radio"]:checked');
      $('.gallery-card').css('background','#fff');
      $radio.closest('.gallery-card') .css('background','#05a0c7');
    });
             </script>
                     
                    

                     

            <!---->
              
             </div> <!----row----->  

              <script>
                  $(function () {
        $("#remember").click(function () {
            if ($(this).is(":checked")) {
                $("#ck").show();
               
            } else {
                $("#ck").hide();
               
            }
        });
    });
             </script>
            </div>
             
              </div><br>

                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                

                <div class="col-8 mx-auto text-center">
                <div class="buttongroup text-center input-group">  
                
                 <div class="form-check-inline">
                      <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input task_type" id="radio1" name="task_type" value="Fixed" <?php if($getdata['task_type']=='Fixed'){ echo "checked=checked";}  ?>>Total
                      </label>
                    </div>
                    <div class="form-check-inline">
                      <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input task_type" id="radio2" name="task_type" value="Hourly" <?php if($getdata['task_type']=='Hourly'){ echo "checked=checked";}  ?>>Hourly rate
                      </label>
                    </div>
                </div>
              </div>
                                  
                  
                 <br>
                 
                <div class="tbudget">
                <label>What is your budget?</label>
                <input type="number" name="budget" class="budget" value="<?php echo $getdata['task_budget'];?>" placeholder="GBP" min="0" oninput="this.value = Math.abs(this.value)" style="text-align:center;min-height: 50px"/>
                </div>
                <small class="budget_err" style="color:red; display:none;">Please Select Whate is your budget</small>
                
                

                <?php 
                 $thr = $getdata['task_hour'];
                 $tb  = $getdata['task_budget'];
                 $hb  = $tb/$thr ;
                ?>
               
                  <div class="row hbudget" style="display: none;">
                    <div class="col-6">
                        <label>Hours</label>
                        <input type="number" name="hours" value="<?php echo $getdata['task_hour'];?>" class="hours" min="1" oninput="this.value = Math.abs(this.value)" placeholder="Hours"/>
                         <small class="hour_err" style="color:red; display:none;">Please Select Hours</small>

                    </div>


                    <div class="col-6">
                        <label>Price per hour</label>
                        <input type="number" name="hourly_budget" value="<?php echo $hb;?>" class="hourly_budget" min="0" oninput="this.value = Math.abs(this.value)" placeholder="GBP"/>
                        <small class="hour_pric_err" style="color:red; display:none;">Please Select Price </small>

                    </div>

                    
                </div>

                
                <input type="hidden" name="cat" value="<?php echo $_GET['cat'];?>" class="cat">
                <input type="hidden" name="task_id" value="<?php echo $_GET['task_id'];?>" class="task_id">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
              
               <input type="button" name="addtask" class="submit action-button addtask" value="Post Task"/>
               <!-- <a  class="action-button" href="https://sharukh.dbtechserver.online/betasker/congratulation.php">&nbsp;&nbsp;&nbsp; Post Task &nbsp;&nbsp;&nbsp;</a> -->
            </fieldset> 
        </form>
        <!-- link to designify.me code snippets -->
      
        <!-- /.link to designify.me code snippets -->
    </div>
  <!---step-form--->



</div>
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

<!-- <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script type="text/javascript">
   // Get today's date
var today = new Date();

$("#datepicker").datepicker({
    changeMonth: true,
    changeYear: true,
    minDate: today 
});

</script> -->


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
<!-- Google Maps JavaScript library -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyB-l9hZxAvJPDqAHWufmnDgyHVInQJs6Qs&latlng"></script>

<script>
function mapaddressforcountry() {

var options = {
 types: ['(cities)'],
 componentRestrictions: {country: "es"}
};

var input = document.getElementById('location');
var autocomplete = new google.maps.places.Autocomplete(input, options);
}
</script>
<!-- end gmap -->

 <script>

 $(document).ready(function() {

        $('.addtask').click(function(e){

            e.preventDefault();

            var task_title    = $(".task_title").val();
            var descp         = $(".descp").val();
            var task_location = $(".task_location").val(); 
            var task_end      = $(".task_end").val();
            var time_prefer   = $(".time_prefer:checked").val();
            var task_type     = $(".task_type:checked").val();
            var budget        = $(".budget").val();
            var hours         = $(".hours").val();
            var hourly_budget = $(".hourly_budget").val();
            var task_cat      = $(".cat").val();
            var task_id       = $(".task_id").val();
            
            //alert(task_type);
            //var task_currency     = $(".task_currency").val();
            //var tag      = $(".tags_value").val();
            if(task_title ==''){

            $(".title_err").show();

            }else if(descp ==''){
            
            $(".title_err").hide();
            $(".descp_err").show();

            }else if(task_end ==''){
            
            $(".tend_err").show();
            $(".title_err").hide();
            $(".descp_err").hide();

             }else if(task_type =='Hourly' && hours =='' ){
            
            $(".hour_err").show();
            $(".tend_err").hide();
            $(".title_err").hide();
            $(".descp_err").hide();
            $(".budget_err").hide();
           



             }else if(task_type =='Hourly' && hourly_budget =='' ){
            
            $(".hour_pric_err").show();
            $(".hour_err").hide();
            $(".tend_err").hide();
            $(".title_err").hide();
            $(".descp_err").hide();
            $(".budget_err").hide();
            
 
             }else if(task_type =='Fixed' && budget == ''){
            
            $(".budget_err").show();
            $(".hour_pric_err").hide();
            $(".hour_err").hide();
            $(".tend_err").hide();
            $(".title_err").hide();
            $(".descp_err").hide();

             }



             else{

            $.ajax({type: "POST", url: "controller/api/job_post_upd.php",dataType: "json",

            data: {task_title:task_title,descp:descp,task_location:task_location,task_end:task_end,time_prefer:time_prefer,task_cat:task_cat,task_type:task_type,task_id:task_id,budget:budget,hours:hours,hourly_budget:hourly_budget},

            success : function(data){

            if (data.status=='success') {
           
            $("#msform")[0].reset();
            $(".budget_err").hide();
            $(".hour_pric_err").hide();

            //$('.succpost').show();   

           // $(".succpost").html("<p>"+data.response+"</p>");

            //window.location = 'tasks-details.php?task_id='+data.task_id;
            window.location = 'browse-tasks.php';

            }

            else{
            
            $(".budget_err").hide();
            $(".hour_pric_err").hide();

            $('.errpost').show();   

            $(".errpost").html("<p>"+data.response+"</p>");

            }

                }

            });

           }

        });

    });

     </script>

     <script>

        $(document).ready(function(){
         $("#inputTag").tagsinput('items');
});

      
     </script>

<script>
$(function () {
$("#myonoffswitch").click(function () {
if ($(this).is(":checked")) {
$("#locat").hide();

} else {

$("#locat").show();
}
});
});
</script>

<script>
    $(document).ready(function() {
    $("input[name$='task_type']").click(function() {
        
        var task_type = $(this).val();
        if(task_type=='Hourly'){
        $(".hbudget").show();
        $(".tbudget").hide();
        }else{
        
        $(".hbudget").hide();
        $(".tbudget").show();
        }
        
        
    });


});
</script>
     <!--library  -->

</body>
</html>