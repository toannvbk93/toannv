<?php
/**************************************************************************************************
| Codehaivl
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

include("include/config.php");
include("include/functions/import.php");
$thebaseurl = $config['baseurl'];
$PID = intval($_POST['pid']);
$query="SELECT PID, story, pic, path FROM posts WHERE active='1' AND nsfw='0' AND pic!='' AND PID>".$PID." order by PID ASC limit 1";
$executequery=$conn->execute($query);
$PID = intval($executequery->fields['PID']);
$title = html_entity_decode(stripslashes($executequery->fields['story']), ENT_COMPAT, "UTF-8");
if ($PID == 0)
{
$query="SELECT PID, story, pic, path FROM posts WHERE active='1' AND nsfw='0' AND pic!='' order by PID ASC limit 1";
$executequery=$conn->execute($query);
$PID = intval($executequery->fields['PID']);
$title = html_entity_decode(stripslashes($executequery->fields['story']), ENT_COMPAT, "UTF-8");
}
if($config[SEO] == 1)
{
$titleseo = makeseo($title).".html";
}
else
{
$titleseo = "";
}
$image = cleanit($executequery->fields['pic']);
$path = cleanit($executequery->fields['path']);		
$arr = array('PID' => $PID, 'title' => $title, 'titleseo' => $titleseo, 'image' => $image, 'path' => $path);
echo json_encode($arr);
?>