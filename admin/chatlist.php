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

          <h1><i class=""></i> Chat-Room </h1>

        </div>

        <ul class="app-breadcrumb breadcrumb">

          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>Form</li>

          <li class="breadcrumb-item">Chat-Room</li>

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

                      <th>Room Title</th>

                      <th>Task Title</th>

                      <th>View Chat</th>

                    </tr>

                  </thead>

                  <tbody>

                    <?php

                      $i=1;
                      $sql=mysqli_query($con,"Select * FROM chat_room ORDER BY id DESC");

                      while($rowcount=mysqli_fetch_array($sql)){

                          $room_id       = $rowcount['room_id'];
                          $task_creator  = $rowcount['task_creator'];
                         
                      ?>

                    <tr>

                      <td><?php echo $i;?></td>

                      <td><?php echo $rowcount['timestamp']?></td>

                      <td><?php echo $rowcount['room_title'];?></td>

                      <td><?php echo $rowcount['task_title'];?></td>

                      <td>
                        <a href="message_chat.php?id=<?php echo $room_id; ?>&creator=<?php echo $task_creator; ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                        <a href="controller/del_chat.php?id=<?php echo $room_id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?');"><i class="fa fa-trash"></i></a>
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