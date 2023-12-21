<?php
     include('config/constants.php');
    //1. Destroy session
    session_destroy();

    header("location:".SITEURL.'login.php');
?>