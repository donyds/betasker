<style type="text/css">
.toolbar-inner img {
    filter: grayscale(100%);
}

</style>
<!----footer----->
<?php if($_COOKIE['type']=='post'){ ?>
<div class="footer">
<div class="toolbar" style="background: linear-gradient(to right, #e1effb, #f9f9f9);height: 62px;">
<div class="toolbar-inner" style="padding-bottom: 10px">
<a href="home.php" class="link external">
<i class="fa fa-home fa-2x setfooternav-active pb-3" aria-hidden="true"></i><h1 class="ftmanage pt-2">Home</h1>
</a>

<a href="job.php" class="link external">
<i class="fa fa-briefcase fa-2x setfooternav pb-3" aria-hidden="true"></i>
<h1 class="ftmanage pt-2">Job</h1>
</a>

<a href = "pay.php" class = "link">
<i class="fa fa-money fa-2x setfooternav pb-3" aria-hidden="true"></i>
<h1 class="ftmanage pt-2">Payment</h1>
</a> 
<a href="chat-list.php" class="link external">
<i class="fa fa-commenting-o fa-2x setfooternav pb-3" aria-hidden="true"></i>
<h1 class="ftmanage pt-2">Chat</h1>
</a>

<a href="setting.php" class="link external">
<i class="fa fa-cog fa-2x setfooternav pb-3" aria-hidden="true"></i>
<h1 class="ftmanage pt-2">Setting</h1>
</a>

</div>
</div>
</div>
<?php }else{ ?>
<div class="footer">
<div class="toolbar" style="background: linear-gradient(to right, #e1effb, #f9f9f9);height: 62px;">
<div class="toolbar-inner" style="padding-bottom: 10px">
<a href="home2.php" class="link external">
<i class="fa fa-home fa-2x setfooternav-active pb-3" aria-hidden="true"></i><h1 class="ftmanage pt-2">Home</h1>
</a>

<a href="findjob.php" class="link external">
<i class="fa fa-briefcase fa-2x setfooternav pb-3" aria-hidden="true"></i>
<h1 class="ftmanage pt-2">Find Job</h1>
</a>

<a href = "frelance-pay.php" class = "link">
<i class="fa fa-money fa-2x setfooternav pb-3" aria-hidden="true"></i>
<h1 class="ftmanage pt-2">Payment</h1>
</a> 
<a href="chat-list.php" class="link external">
<i class="fa fa-commenting-o fa-2x setfooternav pb-3" aria-hidden="true"></i>
<h1 class="ftmanage pt-2">Chat</h1>
</a>

<a href="setting.php" class="link external">
<i class="fa fa-cog fa-2x setfooternav pb-3" aria-hidden="true"></i>
<h1 class="ftmanage pt-2">Setting</h1>
</a>

</div>
</div>
</div>

<?php } ?>

<!----footer------>   

<!--Js -->

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

<!--Js -->