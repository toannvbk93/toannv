<?php
include("include/config.php");
include("include/functions/import.php");
$thebaseurl = $config['baseurl'];

$page = intval($_REQUEST['page']);

if($page=="")
{
	$page = 1;
}
$currentpage = $page;

if ($page > 1)
{
	$pagingstart = ($page-1)*$config['items_per_page'];
}
else
{
	$pagingstart = "0";
}

$queryr = "SELECT * FROM members ORDER BY posts desc limit $pagingstart, 6";

	$executequeryr = $conn->Execute($queryr);
	$users = $executequeryr->getrows();
	$beginning=$pagingstart+1;
	$ending=$pagingstart+$executequeryr->recordcount();
	$k=1;
	$theprevpage=$currentpage-1;
	$thenextpage=$currentpage+1;
	$query1 = "SELECT count(*) as total FROM members ORDER BY posts desc";
	$executequery1 = $conn->Execute($query1);
	$totalusers = $executequery1->fields['total'];
	$lastpage = ceil($totalusers/$config[items_per_page]);
		if($currentpage > 1)
		{
			STemplate::assign('tpp',$theprevpage);
		}
		if($currentpage < $lastpage)
		{
			STemplate::assign('tnp',$thenextpage);
		}


$eurl = base64_encode("/top-member");
STemplate::assign('eurl',$eurl);
STemplate::assign('users',$users);
$templateselect = "topmem.tpl";

$query5 = "SELECT * FROM channels";
$executequery5 = $conn->Execute($query5);
$cats = $executequery5->getarray();
STemplate::assign('allchannels',$cats);


//TEMPLATES BEGIN
STemplate::assign('pagetitle', $lang['260']);
STemplate::assign('menu',4);

STemplate::display($templateselect);

//TEMPLATES END
?>
