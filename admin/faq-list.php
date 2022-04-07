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

          <h1><i class=""></i> Faq </h1>

        </div>

        <ul class="app-breadcrumb breadcrumb">

          <a href="faq.php" class="btn btn-primary">Add</a>


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

                      <th>Title</th>

                      <th>Description</th>

                      <th>Action</th>


                    </tr>

                  </thead>

                  <tbody>

                    <?php

                      $i=1;
                      $sql=mysqli_query($con,"Select * FROM faq ORDER BY id DESC");

                      while($rowcount=mysqli_fetch_array($sql)){

                      ?>

                    <tr>

                      <td><?php echo $i;?></td>

                      <td><?php echo $rowcount['title'];?></td>

                      <td><?php echo $rowcount['descp'];?></td>

                      <td><a href="controller/del_faq.php?id=<?php echo $rowcount['id'];?>" title="delete" class="" onclick="return confirm('Are you sure you want to delete this')"><i class="fa fa-trash-o"></i> </a></td>

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