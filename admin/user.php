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

          <h1><i class="fa fa-user"></i> User</h1>

        </div>

        <ul class="app-breadcrumb breadcrumb">

          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>Form</li>

          <li class="breadcrumb-item">User List</li>

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

                      <th>Fullname</th>

                      <th>Email</th>

                      <th>Mobile</th>
                      
                      <th>Role</th>
                      
                      <th>Profile</th>
                      
                      <!-- <th>Mobile OTP</th> -->
                      <th>Email OTP</th>

                      <th>Status</th>

                      <th>Action</th>

                    </tr>

                  </thead>

                  <tbody>

                    <?php

                      $i=1;

                      $sql=mysqli_query($con,"Select * FROM account ORDER BY id DESC");

                      while($rowcount=mysqli_fetch_array($sql)){

                      ?>

                    <tr>

                      <td><?php echo $i;?></td>

                      <td><a href="task.php?id=<?php echo $rowcount['account_id'];?>"><?php echo $rowcount['fullname'];?></a></td>

                      <td><?php echo $rowcount['email_address'];?></td>

                      <td><?php echo $rowcount['mobile_no'];?></td>
                      
                      <td><?php echo $rowcount['role'];?></td>
                     
                      <td><img src="../img/<?php echo $rowcount['img'];?>" width="80px" hieght="80px"></td>
                      
                       <!-- <td><?php //echo $rowcount['reg_otp'];?></td> -->
                       
                        <td><?php echo $rowcount['reg_otp_email'];?></td>

                      <td><?php $get_status = $rowcount['verify_status'];

                        if ($get_status=='0') {

                          echo '<span class="badge badge-danger">Unactive</span>';

                        }

                        else{

                          echo '<span class="badge badge-success">Active</span>';

                        }



                      ?></td>

                      <td><a href="controller/del_user.php?id=<?php echo $rowcount['id'];?>" title="delete" class="" onclick="return confirm('Are you sure you want to delete this user')"><i class="fa fa-trash-o"></i> </a></td>

                      

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