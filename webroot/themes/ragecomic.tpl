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

<script src="{$baseurl}/comic/jQuery.cssTransform.Patch.js" type="text/javascript"></script>
<script src="{$baseurl}/comic/jquery-ui.min.js" type="text/javascript"></script>
<link href="{$baseurl}/comic/jquery-ui-1.7.2.custom.css" rel="stylesheet" type="text/css" />
<script src="{$baseurl}/comic/cp_depends.js" type="text/javascript"></script>
<script src="{$baseurl}/comic/excanvas.js" type="text/javascript"></script>
<script src="{$baseurl}/comic/CanvasWidget.js" type="text/javascript"></script>
<script src="{$baseurl}/comic/CanvasPainter.js" type="text/javascript"></script>
<script src="{$baseurl}/comic/jquery.batchImageLoad.js" type="text/javascript"></script>
<script src="{$baseurl}/comic/interface.js" type="text/javascript"></script>
<script src="{$baseurl}/comic/jquery.autogrow.js" type="text/javascript"></script>
<script src="{$baseurl}/comic/jquery.blockUI.min.js" type="text/javascript"></script>
<script src="{$baseurl}/comic/colorpicker.js" type="text/javascript"></script>
<script src="{$baseurl}/comic/jquery.repeatedclick.js" type="text/javascript"></script>
<script src="{$baseurl}/comic/jquery.imgDrop.js" type="text/javascript"></script>
<script src="{$baseurl}/comic/jquery.getimagedata.min.js" type="text/javascript"></script>
<script src="{$baseurl}/comic/base64.js" type="text/javascript"></script>
<script src="{$baseurl}/comic/canvas2image.js" type="text/javascript"></script>
<script src="{$baseurl}/comic/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
<link href="{$baseurl}/comic/jquery.mCustomScrollbar.css" media="screen" rel="stylesheet" type="text/css" />
{if $smarty.session.language eq "vi"}
<script src="{$baseurl}/comic/rage.min.vi.js" type="text/javascript"></script>
{else}
<script src="{$baseurl}/comic/rage.min.en.js" type="text/javascript"></script>
{/if}
<link href="{$baseurl}/comic/style.min.css" media="screen" rel="stylesheet" type="text/css" />
<link href="{$baseurl}/comic/colorpicker.css" media="screen" rel="stylesheet" type="text/css" />
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
<br />
<div id="container">
<div class="box infoBox rageBuilderContainer">
    <div id="blank_content">
        <div>
            <div class="dock" id="toolbar">
                <div class="dock-container" title="{$lang295}">
                </div>
            </div>
        </div>
        <div id='promptContainer' title='{$lang296}'>
            <p class='errorText'></p>
            <p>{$lang297}</p>
            <div>
                <strong>{$lang298} </strong>
                <input type='text' id='txtImportUrl' value='' />
            </div>
            <p>{$lang299}</p>
            <div>
                <strong>{$lang300} </strong>
                <input type="file" id="fileToUpload" style="width: 164px;" />
            </div>
        </div>
        <div id='startUpMessageContainer' title='Pro-tip'>
        </div>
        <div id='exportContainer' title='{$lang301}'>
            <div>
                <div style='float: left'>
                    <img alt="" src="{$baseurl}/comic/packs/neutral/images/Thoughtful.png" style="width: 66px;" /></div>
                <div>
                    {$lang302}
                </div>
                <div style='clear: both'>
                </div>
            </div>
        </div>
        <div id="canvasContainer">
            <div id="controllers" class="ui-widget-header ui-corner-all">
                <div id="templateController" class="controllerSubset" style="border-left: none; padding-left: 3px;">
                    <select id="drpPacks" title="{$lang303}" style="margin: 0;">
                    </select>
                </div>
                <div id="toolsController" class="controllerSubset">
                    <strong style='padding-right: 5px'>{$lang304}</strong>
                    <span title='{$lang305}' id='addTextCtrl' class='menuIcon'>
                        <img src="{$baseurl}/comic/cdn/img/ragecomic/text_dropcaps.png" />
                    </span>
                    <span title='{$lang306}' id='importImage' class='menuIcon'>
                        <img src="{$baseurl}/comic/cdn/img/ragecomic/photo_add.png" />
                    </span>
                </div>
                <div id="brushController" class="controllerSubset">
                    <strong style='padding-right: 5px'>{$lang307}</strong>
                    <span title='{$lang308}' id="customWidget" class='menuIcon'>
                        <img src="{$baseurl}/comic/cdn/img/ragecomic/color_wheel.png" />
                    </span>
                    <span title='{$lang309}' id="brushSize" class='menuIcon'>
                        <img src="{$baseurl}/comic/cdn/img/ragecomic/paintbrush.png" />
                    </span>
                    <span title="{$lang310}" id="undoBrush" class='menuIcon'>
                        <img src="{$baseurl}/comic/cdn/img/ragecomic/arrow_undo.png" />
                    </span>
                    <div id="brushSizeSlider">
                    </div>
                </div>
                <div id="panelController" class="controllerSubset" style="float: right">
                    <strong style='padding-right: 5px'>{$lang311}</strong>
                    <span title='{$lang312}' id='addFrameCtrl' class='menuIcon'>
                        <img alt="" src="{$baseurl}/comic/cdn/img/ragecomic/add.png" />
                    </span>
                    <span title='{$lang313}' id='removeFrameCtrl' class='menuIcon'>
                        <img alt="" src="{$baseurl}/comic/cdn/img/ragecomic/delete.png" />
                    </span>
                </div>
                <div id="canvasControllerDiv" class="controllerSubset">
                    <strong style='padding-right: 5px'>{$lang314}</strong>
                    <span title='{$lang315}' id='exportCanvas' class='menuIcon'>
                        <img alt="" src="{$baseurl}/comic/cdn/img/ragecomic/disk.png" />
                    </span>
                </div>
                <div style="clear: both">
                </div>
            </div>
            <div id='drawingCanvasContainer'>
                <canvas id="drawingCanvasInterface"></canvas>
                <canvas id="drawingCanvas"></canvas>
                <img id="watermark" src="{$baseurl}/comic/cdn/img/ragecomic/watermark.png" style="display: none;" />
            </div>
        </div>
     <div style="margin-bottom:5px;" align="center"></div>
            
    </div>
</div>
{literal}
    <script type="text/javascript">
        $(document).ready(function () {
            RageComic.initialize({
                packRoot: "{/literal}{$baseurl}/comic/{literal}",
                siteUrl: "",
                builderUrl: "{/literal}{$baseurl}/comic{literal}",
                cdnRoot: "{/literal}{$baseurl}/comic/cdn/{literal}"
            });
        });
        window.onbeforeunload = confirmExit;
        function confirmExit() {
            return "{/literal}{$lang316}{literal}";
        }
    </script>
{/literal}
</div>
</body>
</html>