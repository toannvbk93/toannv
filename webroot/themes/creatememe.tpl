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
<link href="css/meme.css" rel="stylesheet" />
<link href="css/spectrum.css" rel="stylesheet" />
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

            <li><a href="{$baseurl}/">{$lang336}</a>
            </li>
            <li><a href="{$baseurl}/vote">{$lang337}</a>
            </li>
            <li><a href="{$baseurl}/video">{$lang338}</a>
            </li>
            <li><a href="{$baseurl}/hot">{$lang339}</a> </li>
            <li><a class="current">{$lang340}</a>
                <ul>
                    <li><a href="{$baseurl}/comic">Chế Comic</a>
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
<div class="box memes">
	<h1>{$k}</h1>
	<div class="row">
		<div class="span4">
				<p>{$lang319}</p>
				<select id="fontsizesel">
				<option value="18">18</option>
				<option value="24" selected>24</option>
				<option value="32">32</option>
				<option value="48">48</option>
				<option value="72">72</option>
				<option value="144">144</option>
				</select>

				<p>{$lang320}</p>
				<input type='text' id="custom" value="#ffffff" />

				<p>{$lang321}</p>
				<input type='text' id="strokesel" value="#000000" />
				<hr />

				<p>{$lang322}</p>
				<textarea id="tc1">{$lang324}</textarea>
				<p>
					<button type="button" class="btn btn-success" id="cap1">{$lang326}</button>
					<button type="button" class="btn btn-danger" id="rcap1">{$lang327}</button>
				</p>

				<p>{$lang323}<p>
				<textarea id="tc2">{$lang325}</textarea>
				<p>
					<button type="button" class="btn btn-success" id="cap2">{$lang326}</button>
					<button type="button" class="btn btn-danger" id="rcap2">{$lang327}</button>
				</p>
				<hr />
			<form id="createimg" action="create.php" method="post">
				<p><button id="cands" class="btn btn-large btn-primary" type="button">{$lang328}</button></p>
				<input type="hidden" id="imgdata" name="imgdata">
			</form>
		</div>
		<div class="span8">
			<div id="memestage"></div>
		</div>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
<div id="heightStage" style="display: none;"></div>
<script>
	var gblImgName = "{$imgname}";
	var watermark = "{$watermark}";
</script>
<script src="js/kinetic-v4.0.5.min.js" type="text/javascript"></script>
{if $smarty.session.language eq "vi"}
<script src="{$baseurl}/meme/js/meme.min.vi.js" type="text/javascript"></script>
{else}
<script src="{$baseurl}/meme/js/meme.min.en.js" type="text/javascript"></script>
{/if}
<script src="js/spectrum.js" type="text/javascript"></script>
</body>
</html>
