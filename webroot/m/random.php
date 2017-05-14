<?php
/**************************************************************************************************
| Codehaivl
| http://www.Codehaivl.com
| codehaivl@gmail.com
|
|**************************************************************************************************
|
| By using this software you agree that you have read and acknowledged our End-User License 
| 
|
| Copyright (c) Codehaivl.com. All rights reserved.
|**************************************************************************************************/

include("config.php");
$mobileurl = $config['mobileurl'];
include($config['maindir']."/include/config.php");
STemplate::assign('mobileurl',$mobileurl);

$query="SELECT PID, story FROM posts WHERE active='1' order by rand() limit 1";
$executequery=$conn->execute($query);
$PID = intval($executequery->fields['PID']);
$story = makeseo($executequery->fields['story']);
if($PID > 0)
{
	header("Location:$config[baseurl]".$config['postfolder'].$PID."");exit;
}
else
{
	header("Location:$config[baseurl]/");exit;
}
?>