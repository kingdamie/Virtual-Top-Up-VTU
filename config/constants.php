<?php
// start session 
session_start();

$connect= mysqli_connect("localhost", "root", "", "project-i") or die(mysqli_error());
//Create a contants to store non repeating values
define('SITEURL', 'http://localhost/project%20I/');


?>