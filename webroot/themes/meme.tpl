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
	<div id="searchbar_container">
        <div id="searchbar_wrapper">
            <div id="header_searchbar"  style="display:none;">
                <div id="search_wrapper">
                    <form action="{$baseurl}/search">
                        <input id="sitebar_search_header" type="text" class="search search_input" name="query" tabindex="1" placeholder="{$lang189}"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
		<div id="headerContent">
		<a href="{$baseurl}/" id="logo">{$site_name}</a>
	    <ul id="menuBar" class="main-menu" style="overflow:visible">

            <li><a href="{$baseurl}/">Mới</a>
            </li>
            <li><a href="{$baseurl}/vote">Bình chọn</a>
            </li>
            <li><a href="{$baseurl}/video">Video</a>
            </li>
            <li><a href="{$baseurl}/hot">Hot</a> </li>
            <li><a class="current">Chế ảnh</a>
                <ul>
                    <li><a href="{$baseurl}/comic">Chế Comic</a>
                    </li>
                    <li><a href="{$baseurl}/meme">Chế Meme</a>
                    </li>
                    <li><a href="{$baseurl}/chetin">Chế tin nhắn</a>
                    </li>
                </ul>
            </li>
            {if $allchannels} {section name=i loop=$allchannels}
            <li><a class="{if $menu eq 5}current{/if}" href="{$baseurl}/channels/{$allchannels[i].cname|makeseo}">{$allchannels[i].cname}</a>
            </li>
            {/section} {/if}
            <li><a class="{if $menu eq 6}current{/if}" href="{$baseurl}/search"><strong>Tìm kiếm</strong></a>
            </li>
            <!--{if $allchannels}
            <li><a class="{if $menu eq 5}current{/if}">Kênh HOT</a>
              <ul>
                {section name=i loop=$allchannels}
                          <li><a href="{$baseurl}/channels/{$allchannels[i].cname|makeseo}">{$allchannels[i].cname}</a></li>
                          {/section} 
              </ul>
            </li>
            {/if}-->
            <li><a class="post-button upload {if $menu eq 7}current{/if}" href="{$baseurl}/submit" onclick="_gaq.push(['_trackEvent', 'New-Post', 'Clicked', 'Headbar', 1]);">Đăng ảnh</a>
            </li>
        </ul>
        <div id="headerRight">
			{if $smarty.session.USERID ne ""}
			<!-- <a href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}/messages" class="notiButton" title="{$lang194}"></a> -->
			<div class="avatar noNoti">
				<a id="profile-username" href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}" class="avatarLink" title="{$smarty.session.USERNAME|stripslashes}">
				{insert name=get_member_profilepicture assign=profilepicture value=var USERID=$smarty.session.USERID|stripslashes}
				<img src="{$membersprofilepicurl}/{$profilepicture}?{$smarty.now}" width="30px" height="30px" />
				</a>
				<ul>
                    <li><a href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}">{$lang192}</a>
                    </li>
                    <li><a href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}/likes">{$lang193}</a>
                    </li>
                    <li><a href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}/messages">Tin nhắn</a>
                    </li>
                    <li><a href="{$baseurl}/settings">{$lang45}</a>
                    </li>
                    <li><a href="javascript:loadContent('#loadme', '{$baseurl}/log_out');">{$lang198}</a>
                    </li>
				</ul>
			</div>
			{else}
			<div class="login">
				<a href="{$baseurl}/login">{$lang197}</a>
			</div>
			{/if}
		</div>
		<div class="clear"></div>
	</div>
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