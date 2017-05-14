<?php
$lskip = "1";
include("include/config.php");
destroy_slrememberme($_SESSION['USERNAME']);
$_SESSION['USERID']="";
$_SESSION['EMAIL']="";
$_SESSION['USERNAME']="";
$_SESSION['VERIFIED']="";
$_SESSION['FILTER']="";
$_SESSION['FB']="";
//session_destroy();
header("location: $config[baseurl]/");
?>