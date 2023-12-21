<?php
    //Authorization - Access control
    //Check if the user is logged in or not
    if(!isset($_SESSION['user'])){ // if session is not set
        $_SESSION['no-login-message'] = '<div class="error">Please Login to Get Access</div>';
        header("location:".SITEURL.'login.php');
    }
?>