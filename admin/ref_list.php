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

          <h1><i class="fa fa-user"></i> Referral User list</h1>

        </div>

        <ul class="app-breadcrumb breadcrumb">

          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>Referral User list</li>

          <li class="breadcrumb-item">Referral User list</li>

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

                      <th>User</th>

                      <th>Referral From</th>

                      <th>Earn Reward</th>

                    </tr>

                  </thead>

                  <tbody>

                    <?php

                      $i=1;

                      $sql=mysqli_query($con,"SELECT * FROM ref_log ORDER BY id DESC");

                      while($rowcount=mysqli_fetch_array($sql)){
                      $uid    = $rowcount['uid'];
                      $ref_id = $rowcount['ref_id'];

                      //get ref user data

                      $ref_udata = mysqli_query($con,"SELECT * FROM account WHERE account_id='$ref_id'");

                      $refd  = mysqli_fetch_array($ref_udata);

                      $refname = $refd['fullname'];
                      //get user data
                      $udata = mysqli_query($con,"SELECT * FROM account WHERE account_id='$uid'");

                      $daatau  = mysqli_fetch_array($udata);

                      $duname  = $daatau['fullname'];
            

                      ?>

                    <tr>

                      <td><?php echo $i;?></td>
                      <td><?php echo $duname;?></td>
                      <td><?php echo $refname;?></td>
                      <td><?php echo $rowcount['ref_price'];?></td>

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