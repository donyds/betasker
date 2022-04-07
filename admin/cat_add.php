<?php
include 'controller/session.php';
include '../controller/config.php' ;
?>
<!DOCTYPE html>
<html lang="en">
  <!----css----->
  <?php include 'include/css.php';?>
  <link rel="stylesheet" type="text/css" href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  <style>
  .bootstrap-tagsinput .tag {
  margin-right: 2px;
  color: #ffffff;
  background: #05a0c7;
  margin-bottom: 2px;
  padding: 4px;
  border-radius: 4px;
  }
  .bootstrap-tagsinput{
  width: 100%;
  margin-top: 10px;
  }
  .bootstrap-tagsinput input[type="text"]{
  margin-top: 10px;
  }
  </style>
  <!-----css---->
  <body class="app sidebar-mini">
    <!----css----->
    <?php include 'include/header-sidebar.php';?>
    <!-----css---->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-user"></i> Task Category </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="tile">
            <div class="tile-body">
              <form method="post" action="controller/adcat.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">Enter Category</label>
                  <input class="form-control" type="text" name="cat" placeholder="Enter Category" required="">
                </div>
                <div class="form-group">
                  <label class="control-label">Enter Keywords or Tags</label>
                  <input type="text" name="keywords" class="form-control col-md-8" id="#inputTag" data-role="tagsinput" placeholder="Enter Tag with Comma" required="">
                </div>
                <div class="form-group">
                  <label class="control-label">Category Image</label>
                  <input class="form-control" type="file" name="cat_img" required="" style="border: none;">
                </div>
                <div class="form-group mx-auto text-center">
                  <button type="submit" name="submit" class="form-control col-4 btn btn-info">Add</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!----css----->
    <?php include 'include/footer.php';?>
    <script src="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <!-----css---->
    <script type="text/javascript">$('#user').DataTable();</script>
    <script>
    $(document).ready(function(){
    $("#inputTag").tagsinput('items');
    });
    </script>
  </body>
</html>