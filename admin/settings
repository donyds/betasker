<?php 

include 'controller/session.php';

include '../controller/config.php' ;



?>

<!DOCTYPE html>

<html lang="en">



<!----css----->

<?php include 'include/css.php';?>
       
</script>
<body class="app sidebar-mini">



<!----css----->

<?php include 'include/header-sidebar.php';?>

 <!-- Main section start-->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Settings</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Settings</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">

                <?php
             if(!empty($_SESSION['succ'])) {  ?>


          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?php echo $_SESSION['succ']; ?></strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php } unset($_SESSION['succ']); ?>

        
                      <?php
                      $sql=mysqli_query($con,"Select * FROM admin WHERE id='1'");
                      $getd=mysqli_fetch_array($sql);
                      ?>

              <form class="form-horizontal" method="post" action="controller/settings_upd.php" enctype="multipart/form-data">
               

               <div class="form-group row">
                  <label class="control-label col-md-3">Email</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control col-md-8" name="email" value="<?php echo $getd['email'];?>" placeholder="Enter" required="">
                    
                  </div>
                </div>


                <div class="form-group row">
                  <label class="control-label col-md-3">Password</label>
                  <div class="col-md-8">
                    <input type="password" class="form-control col-md-8" name="password" value="<?php echo $getd['password'];?>" placeholder="Enter" required="">
                    
                  </div>
                </div>
                
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </main>

<?php include 'include/footer.php';?>

<!-----css---->



 <script type="text/javascript">$('#user').DataTable();</script>



  </body>

</html>