<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" onkeydown="keyfind(event)" lang="{$lang254}" dir="{$lang255}">

<head prefix="og: http://ogp.me/ns/fb#">
    <title>{if $pagetitle ne ""}{$pagetitle} - {/if} {$site_name}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="{if $metadescription ne " "}{$metadescription} - {/if}{$site_name}">
    <meta name="keywords" content="{if $pagetitle ne " "}{$pagetitle},{/if}{if $metakeywords ne " "}{$metakeywords},{/if}{$site_name}">
    <meta name="title" content="{if $pagetitle ne " "}{$pagetitle} - {/if}{$site_name}" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0" />
    <meta property="og:title" content="{if $pagetitle ne " "}{$pagetitle} - {/if}{$site_name}"/>
    <meta property="og:site_name" content="{$site_name}" /> {if $p.pic ne ""}
    <meta property="og:url" content="{$baseurl}{$postfolder}{$p.PID}/" /> {elseif $p.youtube_key != ""}
    <meta property="og:url" content="{$baseurl}{$postfolder}{$p.PID}/" /> {elseif $p.fod_key != ""}
    <meta property="og:url" content="{$baseurl}{$postfolder}{$p.PID}/" /> {elseif $p.vmo_key != ""}
    <meta property="og:url" content="{$baseurl}{$postfolder}{$p.PID}/" /> {else}
    <meta property="og:url" content="{$baseurl}/" /> {/if} {if $p.pic ne ""}
    <meta property="og:image" content="{$purl}/{$p.path}/t/s-{$p.pic}" /> {elseif $p.youtube_key != ""}
    <meta property="og:image" content="http://img.youtube.com/vi/{$p.youtube_key}/0.jpg" /> {elseif $p.fod_key != ""}
    <meta property="og:image" content="http://www.funnyordie.com/media/{$p.fod_key}/thumbnail/large.jpg" /> {elseif $p.vfy_key != ""}
    <meta property="og:image" content="{$baseurl}/images/9gag-logo-large.png" /> {elseif $p.vmo_key != ""}
    <meta property="og:image" content="{$baseurl}/images/9gag-logo-large.png" /> {/if}
    <meta property="og:type" content="blog" />
    <meta property="fb:app_id" content="{$FACEBOOK_APP_ID}" />
    <meta property="fb:admins" content="{$FACEBOOK_ADMIN}" />
    <script src="{$baseurl}/ckeditor/ckeditor.js"></script>
    <link href="{$baseurl}/css/style_{$lang255}.css?v=1.0" media="screen" rel="stylesheet" type="text/css" />
    <link href="{$baseurl}/css/style_LTR.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="icon" href="{$baseurl}/favicon.ico" />
    <link rel="shortcut icon" href="{$baseurl}/images/favicon.ico" />

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js"></script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>



    <script type="text/javascript" src="{$baseurl}/js/jquery.1.10.2.min.js"></script>
    <script type="text/javascript" src="{$baseurl}/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="{$baseurl}/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="{$baseurl}/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script type="text/javascript" src="{$baseurl}/js/Config.1.0.js"></script>
    <script type="text/javascript" src="{$baseurl}/js/Common.1.4.7.min.js"></script>

    <link href="{$baseurl}/js/jquery-ui-1.10.3.custom.css" rel="stylesheet" type="text/css" />



    <script type="text/javascript">
        Gauvl.indexPage.init(1, "index", 1);
    </script>
    {if $RSS eq "1"}
    <link rel="alternate" type="application/rss+xml" title="RSS For {$site_name}" href="{$baseurl}/rss.php" /> {/if}
</head>

<body id="page-landing" class="main-body ">
    <div id="fb-root"></div>

    {if $enable_fc eq "1"} {if $smarty.session.language eq "ar"} {literal}
    <script src="http://connect.facebook.net/vi_VN/all.js"></script>
    <script>
        FB.init({
            appId: '{/literal}{$FACEBOOK_APP_ID}{literal}',
            status: true,
            cookie: true,
            xfbml: true
        });
        FB.Event.subscribe('auth.login', function(response) {
            window.location.reload();
        });
    </script>
    {/literal} {else} {literal}
    <script src="http://connect.facebook.net/vi_VN/all.js"></script>
    <script>
        FB.init({
            appId: '{/literal}{$FACEBOOK_APP_ID}{literal}',
            status: true,
            cookie: true,
            xfbml: true
        });
        FB.Event.subscribe('auth.login', function(response) {
            window.location.reload();
        });
    </script>
    {/literal} {/if} {/if} {literal}
    <script type="text/javascript">
        setTimeout(function() {
            $("#tooltip").fadeOut().empty();
        }, 10000);
    </script>
    {/literal}
    <div id="tmp-img" style="display:none"></div>
    {literal}
    <script type="text/javascript">
        function rmt(l) {
            var img = new Image();
            img.src = l;
            document.getElementById('tmp-img').appendChild(img);
        }

        function myWindow(location, address, gaCategory, gaAction, entryLink) {
            var w = 640;
            var h = 460;
            var sTop = window.screen.height / 2 - (h / 2);
            var sLeft = window.screen.width / 2 - (w / 2);
            var sharer = window.open(address, "Share on Facebook", "status=1,height=" + h + ",width=" + w + ",top=" + sTop + ",left=" + sLeft + ",resizable=0");
        }
    </script>
    {/literal}
    <div id="head-wrapper">

        <div id="searchbar_container">
            <div id="searchbar_wrapper">
                <div id="header_searchbar" style="display:none;">
                    <div id="search_wrapper">
                        <form action="{$baseurl}/search">
                            <input id="sitebar_search_header" type="text" class="search search_input" name="query" tabindex="1" placeholder="{$lang189}" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="head-bar">
            <h1><a href="{$baseurl}/">{$site_name}</a></h1>
            <ul id="nav" class="main-menu" style="overflow:visible">

                <li><a class="{if $menu eq 1}current{/if}" href="{$baseurl}/">Mới</a>
                </li>
                <li><a class="{if $menu eq 3}current{/if}" href="{$baseurl}/vote">Bình chọn</a>
                </li>
                <li><a class="{if $menu eq 4}current{/if}" href="{$baseurl}/video">Video</a>
                </li>
                <li><a class="{if $menu eq 2}current{/if}" href="{$baseurl}/hot">Hot</a> </li>
                <li><a class="{if $menu eq 2}current{/if}" href="{$baseurl}/comic">chế ảnh</a> </li>
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
            <ul class="main-2-menu">
                {if $smarty.session.USERID ne ""}
                <li>
                    {literal}
                    <script type="text/javascript">
                        function loadContent(elementSelector, sourceURL) {
                            $("" + elementSelector + "").load("" + sourceURL + "");
                        }
                    </script>
                    {/literal}
                    <div id="loadme"></div>
                    <div id="profile-menu" class="profile-menu">
                        {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$smarty.session.USERID}
                        <a id="profile-username" href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}" class="profile-button"><img width="25" height="25" src="{$membersprofilepicurl}/thumbs/{$profilepicture}?{$smarty.now}" alt="avatar" />
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
                </li>
                {else}
                <div id="headerRight">
                    <div class="login1">
                        <!--<a href="https://www.facebook.com/dialog/permissions.request?app_id={$FACEBOOK_APP_ID}&display=page&next={$baseurl}/&response_type=code&fbconnect=1&perms=email,user_birthday,user_about_me" label="Header">{$lang197}</a>-->
                        <a href="login" label="Header">{$lang197}</a>
                    </div>
                </div>

                {/if}

            </ul>
        </div>
    </div>
    <div id="notice-bar">
        <div class="wrap">
            Thông báo:</b> Sau nhiều biến cố, rất có thể 1 thời trẻ trâu dữ dội của chúng ta sẽ phải dừng tại đây. Nếu may mắn hơn, nó sẽ còn tiếp tục...
        </div>
    </div>
    {literal}
    <script type="text/javascript">
        $('.search-button').click(function() {
            $('#header_searchbar').toggle('slow');
        });
        setInterval("change_logo_color();", 10000);

        function change_logo_color() {
            var col = 'rgb(' + (Math.floor((Math.random() * 128) + 50)) + ',' + (Math.floor((Math.random() * 128) + 50)) + ',' + (Math.floor((Math.random() * 128) + 50)) + ')';
            $('#head-bar h1 a').animate({
                "background-color": col
            }, 500);
        }
    </script>
    {/literal}
    <div id="container" style="">
        {if $viewpage eq "1"} {include file='js1.tpl'} {else} {include file='js.tpl'} {/if}
