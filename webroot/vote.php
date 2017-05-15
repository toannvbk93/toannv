<?php
include("include/config.php");
include("include/functions/import.php");
$thebaseurl     = $config['baseurl'];
$voteforvisitor = $config['voteforvisitor'];
if(isset($_SESSION['USERID'])){
  $SID = intval($_SESSION['USERID']);
}
else {
  $SID = "";
}
if (isset($_SESSION['viewtype']) && isset($_REQUEST['view']) && $_SESSION['viewtype'] == "" && $_REQUEST['view'] == "") {
    $_SESSION['viewtype'] = "list";
} else{
  if(isset($_REQUEST['view'] )){
      if ($_SESSION['viewtype'] == "list" && $_REQUEST['view'] == "") {
          $_SESSION['viewtype'] = "list";
      } elseif ($_SESSION['viewtype'] == "thumbs" && $_REQUEST['view'] == "") {
          $_SESSION['viewtype'] = "thumbs";
      } elseif ($_REQUEST['view'] != "") {
          $_SESSION['viewtype'] = $_REQUEST['view'];
      }
    }
}

if ($SID > 0 || $voteforvisitor == 1) {
    $page = "";
    if(isset($_REQUEST['page']))
      $page = intval($_REQUEST['page']);
    if ($page == "") {
        $page = "1";
    }
    $currentpage = $page;

    if ($page >= 2) {
        $pagingstart = ($page - 1) * $config['items_per_page'];
    } else {
        $pagingstart = "0";
    }

    $query1 = "SELECT count(*) as total from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.phase='0' order by A.PID desc limit $config[maximum_results]";
    $query2 = "SELECT A.*, B.username from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.phase='0' order by A.PID desc limit $pagingstart, $config[items_per_page]";

    $executequery1 = $conn->Execute($query1);

    $totalvideos = $executequery1->fields['total'];
    if ($totalvideos > 0) {
        if ($executequery1->fields['total'] <= $config['maximum_results']) {
            $total = $executequery1->fields['total'];
        } else {
            $total = $config['maximum_results'];
        }

        $toppage = ceil($total / $config['items_per_page']);
        if ($toppage == 0) {
            $xpage = $toppage + 1;
        } else {
            $xpage = $toppage;
        }

        $executequery2 = $conn->Execute($query2);
        $posts         = $executequery2->getrows();

        @$queryvr        = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='" . mysql_real_escape_string($pid) . "' AND A.active='1' AND A.phase='0' ORDER BY A.PID desc limit 3";
        $executequeryvr = $conn->execute($queryvr);
        $vr             = $executequeryvr->getarray();
        STemplate::assign('vr', $vr);

        if ($config['rhome'] == 1) {
            $ctime = 24 * 60 * 60;

            $utime = time() - $ctime;

            $addthis = "AND A.time_added>=" . $utime;

            @$queryr        = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='" . mysql_real_escape_string($pid) . "' AND A.active='1' AND A.youtube_key='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' $addthis ORDER BY A.view desc limit 5";
            $executequeryr = $conn->execute($queryr);
            $r             = $executequeryr->getarray();
            STemplate::assign('r', $r);

        }


        $beginning   = $pagingstart + 1;
        $ending      = $pagingstart + $executequery2->recordcount();
        $k           = 1;
        $theprevpage = $currentpage - 1;
        $thenextpage = $currentpage + 1;

        if ($currentpage > 0) {
            if ($currentpage > 1) {
                STemplate::assign('tpp', $theprevpage);
            }
            $counter    = 0;
            $lowercount = $currentpage - 5;
            if ($lowercount <= 0)
                $lowercount = 1;
            while ($lowercount < $currentpage) {
                $lowercount++;
                $counter++;
            }
            $uppercounter = $currentpage + 1;
            while (($uppercounter < $currentpage + 10 - $counter) && ($uppercounter <= $toppage)) {
                $uppercounter++;
            }
            if ($currentpage < $toppage) {
                STemplate::assign('tnp', $thenextpage);
            }
        }
    }

    $eurl = base64_encode("/vote?page=" . $currentpage);
    STemplate::assign('eurl', $eurl);

    if (empty($currentpage)) {
        $tpage = 2;
    } else {
        $tpage = $currentpage + 1;
    }
    STemplate::assign('tpage', $tpage);
    if(isset($posts))
    STemplate::assign('posts', $posts);
    if ($_SESSION['viewtype'] == "list") {
        $templateselect = "vote.tpl";
    } else {
        $templateselect = "tvote.tpl";
    }

} else {
    $templateselect = "vote2.tpl";
}

if ($config['topgags'] > 0) {
    $ctime = 24 * 60 * 60;
    if ($config['topgags'] == 2) {
        $ctime = $ctime * 7;
    }
    if ($config['topgags'] == 3) {
        $ctime = $ctime * 30;
    }
    $utime         = time() - $ctime;
    $query3        = "SELECT * FROM posts WHERE time_added>='$utime' AND active='1' AND youtube_key='' AND fod_key='' AND vfy_key='' AND vmo_key='' AND nsfw='0' order by favclicks desc  limit 5";
    $executequery3 = $conn->execute($query3);
    $topgags       = $executequery3->getrows();
}

if ($config['channels'] == 1) {
    $query5        = "SELECT * FROM channels";
    $executequery5 = $conn->Execute($query5);
    $cats          = $executequery5->getarray();
    STemplate::assign('allchannels', $cats);
    $ccount = count($cats);
    $ctotal = array();
    $chname = array();
    for ($i = 0; $i < $ccount; $i++) {
        $j             = $cats[$i]['CID'];
        $query3        = "SELECT count(*) as total from posts A, channels B where B.CID=$j AND A.CID=B.CID";
        $executequery3 = $conn->Execute($query3);
        if ($executequery3->fields['total'] > 0) {
            array_push($ctotal, $executequery3->fields['total']);
            $query4        = "SELECT cname from channels where CID=$j";
            $executequery4 = $conn->Execute($query4);
            array_push($chname, $executequery4->fields['cname']);
        }
    }

    array_multisort($ctotal, SORT_DESC, $chname);
    $ctotalcount = count($ctotal);
    $c = "";
    for ($i = 0; $i < $ccount - 1; $i++) {

        $c[$i]["ctotal"] = $ctotal[$i];
        $c[$i]["chname"] = $chname[$i];
    }
    STemplate::assign('c', $c);

}

$_SESSION['location'] = "/vote?page=" . $currentpage;

//TEMPLATES BEGIN
STemplate::assign('pagetitle', $lang['174']);
STemplate::assign('menu', 3);
if(isset($topgags))
  STemplate::assign('topgags', $topgags);
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>
