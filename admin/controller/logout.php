<?php

 session_start();

    unset($_SESSION["admin"]);
    //unset($_COOKIE['admin']); 

 header("Location: ../index.php");

?>