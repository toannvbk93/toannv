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

include("../include/config.php");
include("../include/functions/import.php");

$love = cleanit($_REQUEST['l']);
$unlove = cleanit($_REQUEST['u']);
$pid = cleanit($_REQUEST['pid']);
$SID = intval($_SESSION['USERID']);
if(($SID > 0) && ($pid > 0))
{
	$query="SELECT favclicks, unfavclicks FROM posts WHERE PID='".mysql_real_escape_string($pid)."'";
    $executequery=$conn->execute($query);
    $favclicks = $executequery->fields['favclicks'];
	$unfavclicks = $executequery->fields['unfavclicks'];
	
	if($love == "1")
	{
		$favclicks = $favclicks + 1;
		$unfavclicks = $unfavclicks - 1;
		$query="INSERT INTO posts_favorited SET PID='".mysql_real_escape_string($pid)."', USERID='".mysql_real_escape_string($SID)."'";
		$result=$conn->execute($query);
		$query="UPDATE posts SET favclicks=".$favclicks." WHERE PID='".mysql_real_escape_string($pid)."'";
		$result=$conn->execute($query);
		$query="UPDATE posts SET unfavclicks=".$unfavclicks." WHERE PID='".mysql_real_escape_string($pid)."'";
		$result=$conn->execute($query);
		$query="DELETE FROM posts_unfavorited WHERE PID='".mysql_real_escape_string($pid)."' AND USERID='".mysql_real_escape_string($SID)."'";
		$result=$conn->execute($query);
	}
	elseif($love == "-1")
	{
		$favclicks = $favclicks - 1;
		$unfavclicks = $unfavclicks + 1;
		$query="DELETE FROM posts_favorited WHERE PID='".mysql_real_escape_string($pid)."' AND USERID='".mysql_real_escape_string($SID)."'";
		$result=$conn->execute($query);
		$query="UPDATE posts SET favclicks=".$favclicks." WHERE PID='".mysql_real_escape_string($pid)."'";
		$result=$conn->execute($query);
		$query="UPDATE posts SET unfavclicks=".$unfavclicks." WHERE PID='".mysql_real_escape_string($pid)."'";
		$result=$conn->execute($query);
	}
	if($unlove == "1")
	{
		$favclicks = $favclicks - 1;
		$unfavclicks = $unfavclicks + 1;
		$query="INSERT INTO posts_unfavorited SET PID='".mysql_real_escape_string($pid)."', USERID='".mysql_real_escape_string($SID)."'";
		$result=$conn->execute($query);
		$query="UPDATE posts SET unfavclicks=".$unfavclicks." WHERE PID='".mysql_real_escape_string($pid)."'";
		$result=$conn->execute($query);
		$query="UPDATE posts SET favclicks=".$favclicks." WHERE PID='".mysql_real_escape_string($pid)."'";
		$result=$conn->execute($query);
		$query="DELETE FROM posts_favorited WHERE PID='".mysql_real_escape_string($pid)."' AND USERID='".mysql_real_escape_string($SID)."'";
		$result=$conn->execute($query);
	}
	elseif($unlove == "-1")
	{
		$favclicks = $favclicks + 1;
		$unfavclicks = $unfavclicks - 1;
		$query="DELETE FROM posts_unfavorited WHERE PID='".mysql_real_escape_string($pid)."' AND USERID='".mysql_real_escape_string($SID)."'";
		$result=$conn->execute($query);
		$query="UPDATE posts SET unfavclicks=".$unfavclicks." WHERE PID='".mysql_real_escape_string($pid)."'";
		$result=$conn->execute($query);
		$query="UPDATE posts SET favclicks=".$favclicks." WHERE PID='".mysql_real_escape_string($pid)."'";
		$result=$conn->execute($query);
	}
	
	$myes = $config['myes'];
	$mno = $config['mno'];
	if($favclicks >= $myes)
	{
		$query="UPDATE posts SET phase='1', ttime='".time()."' WHERE PID='".mysql_real_escape_string($pid)."' AND phase='0'";
		$result=$conn->execute($query);
	}
	elseif($unfavclicks >= $mno)
	{
		delete_post($pid);
	}
	echo intval($favclicks);
}
?>