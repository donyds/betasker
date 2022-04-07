<?php 

include 'controller/session.php';

include '../controller/config.php' ;



?>

<!DOCTYPE html>

<html lang="en">



<!----css----->

<?php include 'include/css.php';?>

<!-----css---->
   <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
 tinymce.init({
    selector: 'textarea#descp',
    plugins : 'image',
  toolbar : 'image',

    images_upload_url : 'controller/editor.php',
    automatic_uploads : false,

    images_upload_handler : function(blobInfo, success, failure) {
      var xhr, formData;

      xhr = new XMLHttpRequest();
      xhr.withCredentials = false;
      xhr.open('POST', 'controller/extra_img.php');

      xhr.onload = function() {
        var json;

        if (xhr.status != 200) {
          failure('HTTP Error: ' + xhr.status);
          return;
        }

        json = JSON.parse(xhr.responseText);

        if (!json || typeof json.file_path != 'string') {
          failure('Invalid JSON: ' + xhr.responseText);
          return;
        }

        success(json.file_path);
      };

      formData = new FormData();
      formData.append('file', blobInfo.blob(), blobInfo.filename());

      xhr.send(formData);
    },
  });

      
       
       
</script>
<body class="app sidebar-mini">



<!----css----->

<?php include 'include/header-sidebar.php';?>

 <!-- Main section start-->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Privacy Policy</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Privacy Policy</a></li>
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
                      $sql=mysqli_query($con,"Select * FROM terms WHERE id='2'");
                      $getd=mysqli_fetch_array($sql);
                      ?>

              <form class="form-horizontal" method="post" action="controller/terms_upd.php" enctype="multipart/form-data">
               

                <div class="form-group row">
                  <!-- <label class="control-label col-md-3">Description</label> -->
                  <div class="col-md-8">
                    <textarea class="form-control col-md-8" id="descp" name="descp" required=""><?php echo $getd['descp'];?></textarea>
                    
                  </div>
                </div>
                <input type="hidden" name="id" value="2">
                
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