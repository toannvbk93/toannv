<?php
include("app_api/config.php");
include("app_api/function.php");
include("app_api/api.php");

$lg    = empty($_REQUEST['language']) ? '':trim($_REQUEST['language']);
$langs = array('en', 'vn');
if(in_array($lg, $langs))
	include("app_api/lang/".$lg.".php");
else
	include("app_api/lang/vn.php");


$method = empty($_REQUEST['method']) ? '':$_REQUEST['method'];
if($method=='')
    response(array('status' => false, 'msg' => $lang[0]), 200);

switch ($method) {
	case 'get_config':
		get_config();
		break;
	case 'fetch_posts':
		fetch_posts();
		break;
	case 'view_post':
		view_post();
		break;
	case 'post_report':
		post_report();
		break;
	case 'search':
		search();
		break;
	case 'facebook_login':
		facebook_login();
		break;
	case 'votegag':
		votegag();
		break;
	case 'user_profile':
		user_profile();
		break;
	case 'user_settings':
		user_settings();
		break;
	case 'user_change_avatar':
		user_change_avatar();
		break;
	case 'user_delete':
		user_delete();
		break;
    default:
        response(array('status' => false, 'msg' => $lang[0]), 200);
        break;
}

?>
