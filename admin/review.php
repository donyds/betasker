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

          <h1><i class=""></i> Rating & Review </h1>

        </div>

        <ul class="app-breadcrumb breadcrumb">

          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>Form</li>

          <li class="breadcrumb-item">Rating & Review</li>

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

                      <th>Username</th>

                      <th>Task Name</th>

                      <th>Rate</th>

                      <th>Review</th>


                    </tr>

                  </thead>

                  <tbody>

                    <?php

                      $i=1;
                      $sql=mysqli_query($con,"Select * FROM review ORDER BY id DESC");

                      while($rowcount=mysqli_fetch_array($sql)){

                          $creator       = $rowcount['creator'];
                          $task_id       = $rowcount['task_id'];
                          $rate          = $rowcount['rate'];
                          //1st query
                          $sql_u =mysqli_query($con,"Select * FROM account WHERE account_id='$creator'");

                          $get_u = mysqli_fetch_array($sql_u);
                          //2nd query
                          $sql_b = mysqli_query($con,"Select * FROM task_create WHERE task_id='$task_id'");

                          $get_b = mysqli_fetch_array($sql_b);



                          

                      ?>

                    <tr>

                      <td><?php echo $i;?></td>

                      <td><?php echo $rowcount['date']." ".$rowcount['time'] ;?></td>

                      <td><?php echo $get_u['fullname'];?></td>

                      <td><?php echo $get_b['task_title'];?></td>

                      <td><?php for($K=0;$k < $rate;$k++){ ?>
                          <span class="fa fa-star checked"></span>
                          <?php } ?>
                      </td>

                      <td><?php echo $rowcount['review'];?></td>


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