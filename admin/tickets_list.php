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

          <h1><i class=""></i> Tickets </h1>

        </div>

        <ul class="app-breadcrumb breadcrumb">

          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>Form</li>

          <li class="breadcrumb-item">Tickets List</li>

        </ul>

      </div>

      

    



     <div class="row">

       <div class="col-md-12">

        <div class="tile">

          <div class="tile-body table-responsive">

               

             <table class="table table-hover table-bordered" id="user">

                  <thead>

                    <tr>

                      <th>#</th>

                      <th>Date</th>

                      <th>Title</th>

                      <th>Description</th>
                      <th>Status</th>
                      <th>View Chat</th>
                      <th>Action</th>

                    </tr>

                  </thead>

                  <tbody>

                    <?php

                      $i=1;
                      $sql=mysqli_query($con,"SELECT * FROM create_ticket ORDER BY id DESC");

                      while($rowcount=mysqli_fetch_array($sql)){
                        $ticket_id = $rowcount['ticket_id'];
                       
                      ?>

                    <tr>

                      <td><?php echo $i;?></td>

                      <td><?php echo $rowcount['timestamp'];?></td>

                      <td><?php echo substr($rowcount['title'],0,30)."...";?></td>
                      <td><?php echo substr($rowcount['descp'],0,50)."...";?></td>
                      <td><?php if($rowcount['status'] == '1'){ echo '<span class="badge badge-success">Open</span>';}else{ echo '<span class="badge badge-danger hidden">Close</span>';} ?></td>

                      <td><a href="view_ticket.php?t=<?php echo $rowcount['ticket_id'];?>"><span class="badge badge-warning"><i class="fa fa-comments"></i> Chat</span></a></td>
                    
                      <td><?php if($rowcount['status'] == '1'){ ?>
                        <a href="controller/update_ticket.php?t=<?php echo $ticket_id;?>&status=0" onclick="return confirm('Are you sure?')" class="btn btn-danger">Close</a>
                       <?php 
                        }else{ ?>
                        <a href="controller/update_ticket.php?t=<?php echo $ticket_id;?>&status=1" onclick="return confirm('Are you sure?')" class="btn btn-success">Open</a>
                        <?php } ?>
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