<?php
include("include/config.php");
include("include/functions/import.php");
$thebaseurl = $config['baseurl'];
if(isset($_SESSION['viewtype']) && isset($_REQUEST['view']))
if($_SESSION['viewtype'] == "" && $_REQUEST['view'] == "")
{
$_SESSION['viewtype'] = "list";
}
elseif($_SESSION['viewtype'] == "list" && $_REQUEST['view'] == "")
{
$_SESSION['viewtype'] = "list";
}
elseif($_SESSION['viewtype'] == "thumbs" && $_REQUEST['view'] == "")
{
$_SESSION['viewtype'] = "thumbs";
}
elseif( $_REQUEST['view'] != "")
{
$_SESSION['viewtype'] = $_REQUEST['view'];
}

$page = intval($_REQUEST['page']);

if($page=="")
{
	$page = "1";
}
$currentpage = $page;

if ($page >=2)
{
	$pagingstart = ($page-1)*$config['items_per_page'];
}
else
{
	$pagingstart = "0";
}
if ($config['trendingenabled'] == 0){
//$query1 = "SELECT count(*) as total from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.phase>'0' order by A.PID desc limit $config[maximum_results]";
//$query2 = "SELECT A.*, B.username from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.phase>'0' order by A.PID desc limit $pagingstart, $config[items_per_page]";

$query1 = "SELECT count(*) as total from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.favclicks>= '$config[mtrend]' order by A.time_added desc limit $config[maximum_results]";
$query2 = "SELECT A.*, B.username from posts A, members B where A.active='1' AND A.USERID=B.USERID  AND A.favclicks>= '$config[mtrend]' order by A.time_added desc limit $pagingstart, $config[items_per_page]";
}
else
{

$query1 = "SELECT count(*) as total from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.favclicks>= '$config[mtrend]' order by A.time_added desc limit $config[maximum_results]";
$query2 = "SELECT A.*, B.username from posts A, members B where A.active='1' AND A.USERID=B.USERID  AND A.favclicks>= '$config[mtrend]' order by A.time_added desc limit $pagingstart, $config[items_per_page]";
}

$executequery1 = $conn->Execute($query1);

$totalvideos = $executequery1->fields['total'];
if ($totalvideos > 0)
{
	if($executequery1->fields['total']<=$config[maximum_results])
	{
		$total = $executequery1->fields['total'];
	}
	else
	{
		$total = $config[maximum_results];
	}

	$toppage = ceil($total/$config[items_per_page]);
	if($toppage==0)
	{
		$xpage=$toppage+1;
	}
	else
	{
		$xpage = $toppage;
	}

	$executequery2 = $conn->Execute($query2);
	$posts = $executequery2->getrows();

	$queryvr = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' ORDER BY rand() desc limit 3";
			$executequeryvr = $conn->execute($queryvr);
			$vr =  $executequeryvr->getarray();
			STemplate::assign('vr',$vr);

if ($config['rhome'] == 1)
{
$queryr = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY rand() desc limit 6";
$executequeryr = $conn->execute($queryr);
$r =  $executequeryr->getarray();
STemplate::assign('r',$r);
}

	$beginning=$pagingstart+1;
	$ending=$pagingstart+$executequery2->recordcount();
	$k=1;
	$theprevpage=$currentpage-1;
	$thenextpage=$currentpage+1;

	if ($currentpage > 0)
	{
		if($currentpage > 1)
		{
			STemplate::assign('tpp',$theprevpage);
		}
		$counter=0;
		$lowercount = $currentpage-5;
		if ($lowercount <= 0) $lowercount = 1;
		while ($lowercount < $currentpage)
		{
			$lowercount++;
			$counter++;
		}
		$uppercounter = $currentpage+1;
		while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
		{
			$uppercounter++;
		}
		if($currentpage < $toppage)
		{
			STemplate::assign('tnp',$thenextpage);
		}
	}
}

$eurl = base64_encode("/?page=".$currentpage);
STemplate::assign('eurl',$eurl);

if ($_SESSION['viewtype'] == "list")
	{
	$templateselect = "home.tpl";
	}
	else
	{
	$templateselect = "thumbs.tpl";
	}

if ($config['topgags'] > 0)
{
	$ctime = 24 * 60 * 60;
	if ($config['topgags'] == 2){$ctime = $ctime * 7;}
	if ($config['topgags'] == 3){$ctime = $ctime * 30;}
	$utime = time() - $ctime;
	$query3 = "SELECT * FROM posts WHERE time_added>='$utime' AND active='1' AND youtube_key='' AND fod_key='' AND vfy_key='' AND vmo_key='' AND nsfw='0' order by favclicks desc  limit 6";
	$executequery3 = $conn->execute($query3);
	$topgags = $executequery3->getrows();
}

if ($config['channels'] == 1)
{
$cats = loadallchannels();
STemplate::assign('allchannels',$cats);

$c = loadtopchannels($cats);
STemplate::assign('c',$c);
}

$_SESSION['location'] = "/?page=".$currentpage;


//TEMPLATES BEGIN
STemplate::assign('menu',1);
STemplate::assign('posts',$posts);
STemplate::assign('topgags',$topgags);
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>
