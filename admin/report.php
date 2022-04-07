<?php 
include 'controller/session.php';
include '../controller/config.php' ;
?>
<!DOCTYPE html>
<html lang="en">
<!----css----->
<?php include 'include/css.php';?>
<!-----css---->
  
<body class="app sidebar-mini">
<!----css----->
<?php include 'include/header-sidebar.php';?>
<!-----css---->
  <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class=""></i> All Report User</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>Form</li>
          <li class="breadcrumb-item">Report</li>
        </ul>
      </div>
      
    
     <div class="row">
       <div class="col-md-12">
        <div class="tile">
          <div class="tile-body table-responsive">
              
             <table class="table table-hover table-bordered" id="user">
                  <thead>
                    <tr>
                      <th>S No</th>
                      <th>Date</th>
                      <th>To User</th>
                      <th>Title</th>
                      <th>Comment</th>
                      <th>From User</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i=1;
                     
                      $sql=mysqli_query($con,"SELECT * FROM report_user ORDER BY id DESC");
                      while($rowcount=mysqli_fetch_array($sql)){
                            $report_user  = $rowcount['report_user'];
                            $uid          = $rowcount['uid'];
                            
                            $sql_u     = mysqli_query($con,"SELECT * FROM account WHERE account_id='$report_user'");
                            $get_u = mysqli_fetch_array($sql_u);

                            $sql_t     = mysqli_query($con,"SELECT * FROM account WHERE account_id='$uid'");
                            $get_t = mysqli_fetch_array($sql_t);
                       
                      ?>
                    <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $rowcount['date'];?></td>
                      <td><?php echo $get_u['fullname'];?></td>
                      <td><?php echo $rowcount['type'];?></td>
                      <td><?php echo $rowcount['comment'];?></td>
                      <td><?php echo $get_t['fullname'];?></td>
                    </tr>
                  <?php $i++ ;} ?>
                  </tbody>
                </table>
               </div>
           </div>
       </div>
     </div>
    </main>
<!----css----->
<?php include 'include/footer.php';?>
<!-----css---->
 <script type="text/javascript">$('#user').DataTable();</script>
  </body>
</html>