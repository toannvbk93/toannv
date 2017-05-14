<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" onkeypress="keyfind(event)" lang="{$lang254}" dir="LTR">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<title>{if $pagetitle ne ""}{$pagetitle} - {/if}{$site_name}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Công cụ chế ảnh online, chế ragecomic, ảnh troll">
<meta name="keywords" content="Công cụ chế ảnh online,ragecomic,troll,chế ảnh,{if $metakeywords ne ""}{$metakeywords},{/if}{$site_name}">
<meta name="title" content="Công cụ chế ảnh online - {$site_name}" />
<link href="{$baseurl}/css/style.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="icon" href="{$baseurl}/favicon.ico" />
<link rel="shortcut icon" href="{$baseurl}/favicon.ico" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="{$baseurl}/js/jquery.scrollTo-1.4.2-min.js"></script>
<link href="css/meme.css" rel="stylesheet">
</head>
<body id="page-landing" class="main-body ">
<div id="header">
	<div id="head-bar">        <h1><a href="{$baseurl}/">{$site_name}</a></h1>        <ul id="nav" class="main-menu" style="overflow:visible">  	           <li><a class="{if $menu eq 1}current{/if}" href="{$baseurl}/">Mới</a></li>    <li><a class="{if $menu eq 4}current{/if}" href="{$baseurl}/vote">Bình chọn</a></li>           <li><a class="{if $menu eq 2}current{/if}" href="{$baseurl}/video">Video</a></li>	   <li><a class="{if $menu eq 3}current{/if}" href="{$baseurl}/hot">Hot</a>	</li>            <li><a href="#">Chế ảnh</a>				<ul>					<li><a href="{$baseurl}/comic">Chế ảnh</a></li>					<li><a href="{$baseurl}/meme">Chế meme</a></li>						<li><a href="{$baseurl}/chetin">Chế tin nhắn</a></li>				</ul>			</li>              {if $allchannels}						{section name=i loop=$allchannels}                    <li><a href="{$baseurl}/channels/{$allchannels[i].cname|makeseo}">{$allchannels[i].cname}</a></li>                    {/section} 						{/if}           <li><a href="{$baseurl}/search"><strong>Tìm kiếm</strong></a></li>            <!--{if $allchannels}			<li><a class="{if $menu eq 5}current{/if}">Kênh HOT</a>				<ul>					{section name=i loop=$allchannels}                    <li><a href="{$baseurl}/channels/{$allchannels[i].cname|makeseo}">{$allchannels[i].cname}</a></li>                    {/section} 				</ul>			</li>			{/if}-->													 </ul>        <ul class="main-2-menu">            {if $smarty.session.USERID ne ""}            <li>                {literal}                <script type="text/javascript">                function loadContent(elementSelector, sourceURL) {                $(""+elementSelector+"").load(""+sourceURL+"");                }                </script>                {/literal}                <div id="loadme"></div>                <div id="profile-menu" class="profile-menu">                             <a id="profile-username" href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}" class="profile-button"><img width="25" height="25" src="{$membersprofilepicurl}/thumbs/{$smarty.session.USERID|stripslashes}.jpg?{$smarty.now}" alt="avatar"/></a>                <ul>                    <li><a href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}">{$lang192}</a></li>                    <li><a href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}/likes">{$lang193}</a></li>                       <li><a href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}/messages">Tin nhắn</a></li>                    <li><a href="{$baseurl}/settings">{$lang45}</a></li>                    <li><a href="javascript:loadContent('#loadme', '{$baseurl}/log_out');">{$lang198}</a></li>                </ul>                           </div>            </li>            {else}                         <div id="headerRight">                <div class="login1">            <a href="https://www.facebook.com/dialog/permissions.request?app_id={$FACEBOOK_APP_ID}&display=page&next={$baseurl}/&response_type=code&fbconnect=1&perms=email,user_birthday,user_about_me" label="Header">{$lang197}</a>           </div></div>                                {/if}                 </ul>    </div>
</div>
{literal}
<script type="text/javascript">
$('.searchButton').click(function(){
    $('#header_searchbar').toggle('slow');
    });
</script>
{/literal}
<div id="container">
<div class="container">
<div class="box memes"><h3>{$lang318}</h3>
{php}
if ($handle = opendir('templates'))
{
	while (false !== ($entry = readdir($handle)))
	{
	$pngl = pathinfo($entry);
	if($pngl['extension'] == 'png' || $pngl['extension'] == 'jpg' || $pngl['extension'] == 'gif')
	{		
		$imbasename = $pngl['basename'];
		$imext = $pngl['extension'];
		print '<div class="meme">';
		print '<a href="create.php?t='.$entry.'">';
		print '<div class="meme-img">';
		print '<div class="meme-img-wrap">';
		print '<img src="templates/'.$entry.'" alt="" >';
		print '</div></div>';
		print '<div class="clear"></div>';
		print '<div class="info">';
		$k = explode(".",str_replace("_"," ",$entry));
		print '<h4 title="'.$k[0].'">'.$k[0].'</h4>';
		print '</div></a></div>';
	}
	}
	closedir($handle);
}
{/php}
<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>