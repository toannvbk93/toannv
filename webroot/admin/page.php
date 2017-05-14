<?php

include("../include/config.php");
include_once("../include/functions/import.php");
$thesitemappath = $config['basedir']."/sitemap/";
$thebaseurl = $config['baseurl'];

verify_login_admin();


$mainmenu = "14";
$submenu = "1";
$message = "Hãy chọn page bạn muốn lấy bài.";
Stemplate::assign('message',$message);
Stemplate::assign('mainmenu',$mainmenu);
Stemplate::assign('submenu',$submenu);
STemplate::display("administrator/global_header.tpl");
STemplate::display("administrator/page.tpl");
STemplate::display("administrator/global_footer.tpl");
?>