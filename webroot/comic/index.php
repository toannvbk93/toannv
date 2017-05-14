<?php

include("../include/config.php");
include("../include/functions/import.php");

$templateselect = "ragecomic.tpl";
STemplate::assign('menu',4);
STemplate::display($templateselect);
?>