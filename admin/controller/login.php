<?php

   include("../../controller/config.php");
   session_start();

   if(isset($_POST['submit'])) {

      // username and password sent from form 
 
      $myusername = $_POST['email'];

     // $mypassword = md5($_POST['pass']); 

       $mypassword = $_POST['password']; 

      $sql = "SELECT * FROM admin WHERE email = '$myusername' and password = '$mypassword'";

      $result = mysqli_query($con,$sql);

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

    

      if($count == 1) {

         $id    = $row['id'];
         $email = $row['email'];
         
         
         //setcookie("admin", $id, time()+3600);
         
          $_SESSION['admin'] = $email;
          $_SESSION['admin_id'] = $id;
         
         header("location: ../dashboard.php");

      }else {

            $_SESSION['err_login'] = 'Your Email or Password is invalid';

            header("location: ../index.php");

            

      }

   }

?>