<?php 
    //Include constants.php for SITEURL
    include('../connection/connect.php'); 
    //1. Destory the Session
    session_destroy(); //Unsets $_SESSION['user']

    //2. REdirect to Login Page
    header('location:'.SITEURL.'admin/login.php');

?>