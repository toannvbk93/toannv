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

include("include/config.php");
include("include/functions/import.php");
$thebaseurl = $config['baseurl'];

$templateselect = "about.tpl";
$pagetitle = $lang['67'];
STemplate::assign('pagetitle',$pagetitle);
 $queryvr = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='" . mysql_real_escape_string($pid) . "' AND A.active='1' AND A.phase='0' ORDER BY A.PID desc limit 3";        $executequeryvr = $conn->execute($queryvr);        $vr = $executequeryvr->getarray();        STemplate::assign('vr', $vr);
//TEMPLATES BEGIN
STemplate::assign('error',$error);
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>