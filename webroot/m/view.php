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

if ( $config['recommended'] > 0)
{
	$queryr = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY rand() desc limit 10";
	$executequeryr = $conn->execute($queryr);
	$r =  $executequeryr->getarray();
	STemplate::assign('r',$r);
}

$SID = $_SESSION['USERID'];
$pid = intval(cleanit($_REQUEST['pid']));
if($pid > 0 && does_post_exist($pid))
{
	$query        = "SELECT * FROM posts WHERE PID='".mysql_real_escape_string($pid)."' limit 1";
	$executequery = $conn->execute($query);
	$parray       = $executequery->getarray();
	$active       = $parray[0]['active'];
	$phase        = $parray[0]['phase'];
	$author_id    = $parray[0]['USERID'];
	$querypid     = $parray[0]['PID'];

	if($querypid!='' && $active =='1') {
		update_post_viewed($querypid);
		update_last_viewed($querypid);
		update_your_viewed($author_id);
		if (session_verification())
		{
			update_you_viewed($SID);
		}
		if($phase=='1') {
			update_hot_post($querypid);
		}
	}

	$querya = "SELECT count(*) as favorited FROM posts_favorited WHERE USERID=$SID AND PID=$querypid";
	$executequerya = $conn->Execute($querya);
	$queryb = "SELECT count(*) as unfavorited FROM posts_unfavorited WHERE USERID=$SID AND PID=$querypid";
	$executequeryb = $conn->Execute($queryb);
	$parray[0]['favorited'] = $executequerya->fields['favorited'];
	$parray[0]['unfavorited'] = $executequeryb->fields['unfavorited'];

	$query="SELECT PID, story FROM posts WHERE PID!='".mysql_real_escape_string($pid)."' AND PID>'".mysql_real_escape_string($pid)."' AND active='1' order by PID asc limit 1";
	$executequery=$conn->execute($query);
	$next = $executequery->fields['PID'];
	$nextstory = $executequery->fields['story'];
	STemplate::assign('next',$next);
	STemplate::assign('nextstory',$nextstory);
	$query="SELECT PID, story FROM posts WHERE PID!='".mysql_real_escape_string($pid)."' AND PID<'".mysql_real_escape_string($pid)."' AND active='1' order by PID desc limit 1";
	$executequery=$conn->execute($query);
	$prev = $executequery->fields['PID'];
	$prevstory = $executequery->fields['story'];
	STemplate::assign('prev',$prev);
	STemplate::assign('prevstory',$prevstory);

	STemplate::assign('p',$parray[0]);
	$templateselect = "view.tpl";
	$pagetitle = stripslashes($parray[0]['story']);
	$phase = intval($parray[0]['phase']);
	STemplate::assign('pagetitle',$pagetitle);
	STemplate::assign('phase',$phase);
}
//TEMPLATES BEGIN
STemplate::setTplDir($config['mobiledir']."/themes");
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>