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

          <h1><i class=""></i> All Transaction</h1>

        </div>

        <ul class="app-breadcrumb breadcrumb">

          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>Form</li>

          <li class="breadcrumb-item">Transaction</li>

        </ul>

      </div>

      

    



     <div class="row">

       <div class="col-md-12">

        <div class="tile">

          <div class="tile-body table-responsive">

               <?php

               if(!empty($_SESSION['task_succ'])) {  ?>

              <div class="alert alert-success alert-dismissible fade show" role="alert">

                <strong><?php echo $_SESSION['task_succ']; ?></strong> 

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                  <span aria-hidden="true">&times;</span>

                </button>

              </div>

              <?php } unset($_SESSION['task_succ']); ?>

              

             <table class="table table-hover table-bordered" id="user">

                  <thead>

                    <tr>

                      <th>S No</th>

                      <th>Date</th>

                      <th>Username</th>

                      <th>Type</th>

                      <th>Amount</th>

                      <th>Status</th>

                    </tr>

                  </thead>

                  <tbody>

                    <?php

                      $i=1;

                     

                      $sql=mysqli_query($con,"Select * FROM payment_transaction ORDER BY id DESC");

                      while($rowcount=mysqli_fetch_array($sql)){

                            $uid       = $rowcount['account_from'];

                            $sql_u     = mysqli_query($con,"Select * FROM account WHERE account_id='$uid'");

                            $get_u = mysqli_fetch_array($sql_u);

                          

                        //   $sql_b =mysqli_query($con,"Select * FROM task_apply WHERE task_id='$task_id'");

                        //   $bid   = mysqli_num_rows($sql_b);

                        //   $get_b = mysqli_fetch_array($sql_b);



                          

                      ?>

                    <tr>

                      <td><?php echo $i;?></td>

                      <td><?php echo $rowcount['date']." ".$rowcount['time'];?></td>

                      <td><?php echo $get_u['fullname'];?></td>

                      <td><?php echo $rowcount['title'];?></td>

                      <td>$ <?php echo $rowcount['amount'];?></td>

                      

                      <td><a class="badge badge-success text-white px-1 py-1"><?php echo $rowcount['status'];?></a>

                       

                     

                       </td>

                      

                      

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