<?php
/**************************************************************************************************
| Mobile Module Responsive
| codehaivl
| http://www.codehaivl.com
| codehaivl@gmail.com
|
|**************************************************************************************************
|
| By using this software you agree that you have read and acknowledged our End-User License 
| 
|
| Copyright (c) codehaivl.com. All rights reserved.
|**************************************************************************************************/
include("config.php");
$mobileurl = $config['mobileurl'];
include($config['maindir']."/include/config.php");
STemplate::assign('mobileurl',$mobileurl);
destroy_slrememberme($_SESSION['USERNAME']);
$_SESSION['USERID']="";
$_SESSION['EMAIL']="";
$_SESSION['USERNAME']="";
$_SESSION['VERIFIED']="";
$_SESSION['FILTER']="";
$_SESSION['FB']="";
header("location: $config[baseurl]/");
?>
