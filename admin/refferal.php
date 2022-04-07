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
          <h1><i class="fa fa-user"></i> Referral Price </h1>
        </div>
      </div>
      <div class="row">

        <div class="col-md-8 mx-auto">
        <a href="ref_list.php" class="btn btn-info">Refer User List</a>
        <br>
        <br>

          <div class="tile">
            <div class="tile-body">
                <?php //get ref price
                $getref     = mysqli_query($con,"SELECT * FROM refer_price WHERE id='1'");
                $refp       = mysqli_fetch_array($getref,MYSQLI_ASSOC);
                $price_ref  = $refp['price'];
                ?>
              <form method="post" action="controller/upd_refprice.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">Enter Referral Price</label>
                  <input class="form-control" type="number" min="1" name="price_ref" placeholder="Enter Referral Price" value="<?php echo $price_ref;?>" maxlength="15">
                </div>
             
                <div class="form-group mx-auto text-center">
                  <button type="submit" name="submit" class="form-control col-4 btn btn-info">Update</button>
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