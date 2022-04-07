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

          <h1><i class=""></i> Task List</h1>

        </div>

        <ul class="app-breadcrumb breadcrumb">

          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>Form</li>

          <li class="breadcrumb-item">Task List</li>

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

                      <th>Task Name</th>

                      <th>Task Description</th>

                      <th>Task Budget</th>

                      <th>Bid</th>

                      <th>Status</th>

                      <th>Action</th>

                    </tr>

                  </thead>

                  <tbody>

                    <?php

                      $i=1;
                      $account_id = $_GET['id'];
                      if($account_id){
                      $sql=mysqli_query($con,"Select * FROM task_create WHERE account_id='$account_id'");

                      }else{
                      $sql=mysqli_query($con,"Select * FROM task_create ORDER BY id DESC");

                      }

                      while($rowcount=mysqli_fetch_array($sql)){

                          $uid       = $rowcount['account_id'];

                          $task_id   = $rowcount['task_id'];

                          

                          $sql_u =mysqli_query($con,"Select * FROM account WHERE account_id='$uid'");

                          $get_u = mysqli_fetch_array($sql_u);

                          

                          $sql_b =mysqli_query($con,"Select * FROM task_apply WHERE task_id='$task_id'");

                          $bid   = mysqli_num_rows($sql_b);

                          //$get_b = mysqli_fetch_array($sql_b);



                          

                      ?>

                    <tr>

                      <td><?php echo $i;?></td>

                      <td><?php echo $rowcount['date'];?></td>

                      <td><?php echo $get_u['fullname'];?></td>

                      <td><?php echo $rowcount['task_title'];?></td>

                      <td><?php echo $rowcount['task_description'];?></td>

                      <td>$ <?php echo $rowcount['task_budget'];?></td>

                      <td><a href="bid.php?id=<?php echo $task_id;?>" class="badge badge-info"><?php echo $bid;?></a></td>

                      

                     

                      <td>

                          <?php $get_status = $rowcount['task_status'];

                        if ($get_status=='0') { ?>

                         <a href="controller/task_status.php?id=<?php echo $rowcount['id'];?>&status=1" class="badge badge-success" onclick="return confirm('Are you sure you want open this')">Open</a>

                       <?php  } else{ ?>

                       

                       <a href="controller/task_status.php?id=<?php echo $rowcount['id'];?>&status=0" class="badge badge-danger" onclick="return confirm('Are you sure you want close this')">Close</a>

                       

                      <?php  }  ?>

                       </td>

                       <td>

                          <a href="controller/del_task.php?id=<?php echo $rowcount['id'];?>" class="" onclick="return confirm('Are you sure you want to delete this')"><i class="fa fa-trash"></i></a>

                          

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