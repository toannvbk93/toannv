<?php

include("include/config.php");
include("include/functions/import.php");
$thebaseurl = $config['baseurl'];

function getPageUrl(){
     static $pageURL = '';
     if(empty($pageURL)){
          $pageURL = 'http';
          if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')$pageURL .= 's';
          $pageURL .= '://';
          if($_SERVER['SERVER_PORT'] != '80')$pageURL .= $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
          else $pageURL .= $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
     }
     return $pageURL;
}
$error = "";
if (is_numeric($_REQUEST['pid']))
{
	$pid = $_REQUEST['pid'];
	STemplate::assign('pid',$pid);
}
else
{
	$error = $lang['138'];
}
if ($error == "")
{
	if (does_post_exist($pid))
	{
		$query = "SELECT A.*, B.username, B.profilepicture FROM posts A, members B WHERE A.PID='".mysql_real_escape_string($pid)."' AND A.USERID=B.USERID";
       	$executequery = $conn->execute($query);
       	$parray = $executequery->getarray();		$pos = strrpos($parray[0]['pic'],".");
		$ph = strtolower(substr($parray[0]['pic'],$pos+1,strlen($parray[0]['pic'])-$pos));
		if($ph == "gif")
		{
			$parray[0]['gif'] = 1;
		}
		else
		{
			$parray[0]['gif'] = 0;
		}
		$CID = $parray[0]['CID'];
		$queryc = "SELECT A.cname,B.PID FROM channels A, posts B WHERE A.CID='".$CID."' limit 1";
		$executequeryc = $conn->execute($queryc);
		$c =  $executequeryc->getarray();
    //toannv
		@$cname = $c[0]['cname'];
		STemplate::assign('cname',$cname);
		STemplate::assign('p',$parray[0]);
		$active = intval($parray[0]['active']);
		$videourl = trim($parray[0]['url']);
		$phase = intval($parray[0]['phase']);
		STemplate::assign('phase',$phase);
		$USERID = $parray[0]['USERID'];
		STemplate::assign('USERID',$USERID);
		$SID = "";
    if(isset($_SESSION['USERID']))
      $SID = $_SESSION['USERID'];
		if($SID != "" && $USERID != "")
		{
			if($SID == $USERID)
			{
				$owner = "1";
				STemplate::assign('owner', 1);
			}
		}
		if($active == "1" || $owner == "1")
		{
			STemplate::assign('pagetitle',stripslashes($parray[0]['story']));
			$PID = $parray[0]['PID'];
			STemplate::assign('PID',$PID);
			update_post_viewed($PID);
			update_last_viewed($PID);
			update_your_viewed($USERID);
			if (session_verification())
			{
				update_you_viewed($SID);
			}
			if($phase==1) {
				update_hot_post($PID);
			}
			$url = getPageUrl();
			$pos = strrpos($url,"new");
			if($pos > 0)
			{
				STemplate::assign('new',1);
			}

			$queryr = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY rand() desc limit 3";
			$executequeryr = $conn->execute($queryr);
			$r =  $executequeryr->getarray();
			STemplate::assign('r',$r);
	$queryvnew = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key='' AND A.favclicks>= '10' ORDER BY A.PID desc limit 3";

			$executequeryvnew = $conn->execute($queryvnew);

			$vnew =  $executequeryvnew->getarray();

			STemplate::assign('vnew',$vnew);



	$querylq = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key='' AND A.favclicks>= '10' ORDER BY rand() desc limit 3";
			$executequerylq = $conn->execute($querylq);
			$lq =  $executequerylq->getarray();
			STemplate::assign('lq',$lq);

	$queryvr = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' ORDER BY rand() desc limit 3";
			$executequeryvr = $conn->execute($queryvr);
			$vr =  $executequeryvr->getarray();
			STemplate::assign('vr',$vr);
			//ini_set('display_errors',1);
if ( $config['populargags'] > 0){

				$ctime = 24 * 60 * 60;
				if ($config['populargags'] == 2){$ctime = $ctime * 7;}
				if ($config['populargags'] == 3){$ctime = $ctime * 30;}
				$utime = time() - $ctime;
				$querypopular1 = "SELECT count(*) as total FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' AND time_added>='$utime' ORDER BY rand() desc limit 18";
				$executequerypopular1 = $conn->execute($querypopular1);
				$totalpopular = $executequerypopular1->fields['total'];
				if ($totalpopular > 0)
				{
					$querypopular2 = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' AND time_added>='$utime' ORDER BY rand() desc limit 18";
					$executequerypopular2 = $conn->execute($querypopular2);
					$popular =  $executequerypopular2->getarray();
					STemplate::assign('popular',$popular);
					$pcount = count($popular);
					$boxindexmax = ceil($pcount/3)-1;
					STemplate::assign('boxindexmax',$boxindexmax);
				}
			}
      //toannv
			@$encodedurl = urlencode($thebaseurl.$config[postfolder]);
			STemplate::assign('encodedurl',$encodedurl);
      //toannv
      @$eurl = base64_encode($config[postfolder].$pid."/");
			STemplate::assign('eurl',$eurl);

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

			$query="SELECT view FROM posts WHERE PID='".mysql_real_escape_string($pid)."'";
        	$executequery=$conn->execute($query);
        	$view = $executequery->fields['view'];
			STemplate::assign('view',$view);
		}
		else
		{
			$error = $lang['140'];
		}
	}
	else
	{
		$error = $lang['139'];
	}
}
if ($error == "")
{
	$theme = "view.tpl";
}
else
{
	$theme = "empty.tpl";
}

if ($config['channels'] == 1)
{
$cats = loadallchannels();
STemplate::assign('allchannels',$cats);

$c = loadtopchannels($cats);
STemplate::assign('c',$c);
}
//toannv
@$_SESSION['location'] = $config[postfolder].$pid;

//TEMPLATES BEGIN
STemplate::assign('viewpage',1);
STemplate::assign('error',$error);
@STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display($theme);
STemplate::display('footer.tpl');
//TEMPLATES END
?>
