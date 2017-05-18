<?php /* Smarty version 2.6.6, created on 2017-05-18 17:15:38
         compiled from ragecomic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'makeseo', 'ragecomic.tpl', 77, false),array('modifier', 'stripslashes', 'ragecomic.tpl', 96, false),array('insert', 'get_member_profilepicture', 'ragecomic.tpl', 99, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" onkeypress="keyfind(event)" lang="<?php echo $this->_tpl_vars['lang254']; ?>
" dir="LTR">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<title><?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Công cụ chế ảnh online, chế ragecomic, ảnh troll">
<meta name="keywords" content="Công cụ chế ảnh online,ragecomic,troll,chế ảnh,<?php if ($this->_tpl_vars['metakeywords'] != ""):  echo $this->_tpl_vars['metakeywords']; ?>
,<?php endif;  echo $this->_tpl_vars['site_name']; ?>
">
<meta name="title" content="Công cụ chế ảnh online - <?php echo $this->_tpl_vars['site_name']; ?>
" />
<link href="<?php echo $this->_tpl_vars['baseurl']; ?>
/css/style.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="icon" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/favicon.ico" />
<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/favicon.ico" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/jquery.scrollTo-1.4.2-min.js"></script>

<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/jQuery.cssTransform.Patch.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/jquery-ui.min.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/jquery-ui-1.7.2.custom.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/cp_depends.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/excanvas.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/CanvasWidget.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/CanvasPainter.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/jquery.batchImageLoad.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/interface.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/jquery.autogrow.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/jquery.blockUI.min.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/colorpicker.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/jquery.repeatedclick.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/jquery.imgDrop.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/jquery.getimagedata.min.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/base64.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/canvas2image.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/jquery.mCustomScrollbar.css" media="screen" rel="stylesheet" type="text/css" />
<?php if ($_SESSION['language'] == 'vi'): ?>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/rage.min.vi.js" type="text/javascript"></script>
<?php else: ?>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/rage.min.en.js" type="text/javascript"></script>
<?php endif; ?>
<link href="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/style.min.css" media="screen" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/colorpicker.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body id="page-landing" class="main-body ">
<div id="header">
    <div id="searchbar_container">
        <div id="searchbar_wrapper">
            <div id="header_searchbar"  style="display:none;">
                <div id="search_wrapper">
                    <form action="<?php echo $this->_tpl_vars['baseurl']; ?>
/search">
                        <input id="sitebar_search_header" type="text" class="search search_input" name="query" tabindex="1" placeholder="<?php echo $this->_tpl_vars['lang189']; ?>
"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="headerContent">
        <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/" id="logo"><?php echo $this->_tpl_vars['site_name']; ?>
</a>
        <ul id="menuBar" class="main-menu" style="overflow:visible">

            <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/">Mới</a>
            </li>
            <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/vote">Bình chọn</a>
            </li>
            <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/video">Video</a>
            </li>
            <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/hot">Hot</a> </li>
            <li><a class="current">Chế ảnh</a>
                <ul>
                    <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic">Chế Comic</a>
                    </li>
                    <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/meme">Chế Meme</a>
                    </li>
                    <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/chetin">Chế tin nhắn</a>
                    </li>
                </ul>
            </li>
            <?php if ($this->_tpl_vars['allchannels']): ?> <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['allchannels']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
            <li><a class="<?php if ($this->_tpl_vars['menu'] == 5): ?>current<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/<?php echo ((is_array($_tmp=$this->_tpl_vars['allchannels'][$this->_sections['i']['index']]['cname'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
"><?php echo $this->_tpl_vars['allchannels'][$this->_sections['i']['index']]['cname']; ?>
</a>
            </li>
            <?php endfor; endif; ?> <?php endif; ?>
            <li><a class="<?php if ($this->_tpl_vars['menu'] == 6): ?>current<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/search"><strong>Tìm kiếm</strong></a>
            </li>
            <!--<?php if ($this->_tpl_vars['allchannels']): ?>
            <li><a class="<?php if ($this->_tpl_vars['menu'] == 5): ?>current<?php endif; ?>">Kênh HOT</a>
              <ul>
                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['allchannels']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                          <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/<?php echo ((is_array($_tmp=$this->_tpl_vars['allchannels'][$this->_sections['i']['index']]['cname'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
"><?php echo $this->_tpl_vars['allchannels'][$this->_sections['i']['index']]['cname']; ?>
</a></li>
                          <?php endfor; endif; ?>
              </ul>
            </li>
            <?php endif; ?>-->
            <li><a class="post-button upload <?php if ($this->_tpl_vars['menu'] == 7): ?>current<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/submit" onclick="_gaq.push(['_trackEvent', 'New-Post', 'Clicked', 'Headbar', 1]);">Đăng ảnh</a>
            </li>
        </ul>
        <div id="headerRight">
            <?php if ($_SESSION['USERID'] != ""): ?>
            <!-- <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$_SESSION['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
/messages" class="notiButton" title="<?php echo $this->_tpl_vars['lang194']; ?>
"></a> -->
            <div class="avatar noNoti">
                <a id="profile-username" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$_SESSION['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class="avatarLink" title="<?php echo ((is_array($_tmp=$_SESSION['USERNAME'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
">
                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_member_profilepicture', 'assign' => 'profilepicture', 'value' => 'var', 'USERID' => ((is_array($_tmp=$_SESSION['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))), $this); ?>

                <img src="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/<?php echo $this->_tpl_vars['profilepicture']; ?>
?<?php echo time(); ?>
" width="30px" height="30px" />
                </a>
                <ul>
                    <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$_SESSION['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo $this->_tpl_vars['lang192']; ?>
</a>
                    </li>
                    <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$_SESSION['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
/likes"><?php echo $this->_tpl_vars['lang193']; ?>
</a>
                    </li>
                    <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$_SESSION['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
/messages">Tin nhắn</a>
                    </li>
                    <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/settings"><?php echo $this->_tpl_vars['lang45']; ?>
</a>
                    </li>
                    <li><a href="javascript:loadContent('#loadme', '<?php echo $this->_tpl_vars['baseurl']; ?>
/log_out');"><?php echo $this->_tpl_vars['lang198']; ?>
</a>
                    </li>
                </ul>
            </div>
            <?php else: ?>
            <div class="login">
                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/login"><?php echo $this->_tpl_vars['lang197']; ?>
</a>
            </div>
            <?php endif; ?>
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
                <div class="dock-container" title="<?php echo $this->_tpl_vars['lang295']; ?>
">
                </div>
            </div>
        </div>
        <div id='promptContainer' title='<?php echo $this->_tpl_vars['lang296']; ?>
'>
            <p class='errorText'></p>
            <p><?php echo $this->_tpl_vars['lang297']; ?>
</p>
            <div>
                <strong><?php echo $this->_tpl_vars['lang298']; ?>
 </strong>
                <input type='text' id='txtImportUrl' value='' />
            </div>
            <p><?php echo $this->_tpl_vars['lang299']; ?>
</p>
            <div>
                <strong><?php echo $this->_tpl_vars['lang300']; ?>
 </strong>
                <input type="file" id="fileToUpload" style="width: 164px;" />
            </div>
        </div>
        <div id='startUpMessageContainer' title='Pro-tip'>
        </div>
        <div id='exportContainer' title='<?php echo $this->_tpl_vars['lang301']; ?>
'>
            <div>
                <div style='float: left'>
                    <img alt="" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/packs/neutral/images/Thoughtful.png" style="width: 66px;" /></div>
                <div>
                    <?php echo $this->_tpl_vars['lang302']; ?>

                </div>
                <div style='clear: both'>
                </div>
            </div>
        </div>
        <div id="canvasContainer">
            <div id="controllers" class="ui-widget-header ui-corner-all">
                <div id="templateController" class="controllerSubset" style="border-left: none; padding-left: 3px;">
                    <select id="drpPacks" title="<?php echo $this->_tpl_vars['lang303']; ?>
" style="margin: 0;">
                    </select>
                </div>
                <div id="toolsController" class="controllerSubset">
                    <strong style='padding-right: 5px'><?php echo $this->_tpl_vars['lang304']; ?>
</strong>
                    <span title='<?php echo $this->_tpl_vars['lang305']; ?>
' id='addTextCtrl' class='menuIcon'>
                        <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/cdn/img/ragecomic/text_dropcaps.png" />
                    </span>
                    <span title='<?php echo $this->_tpl_vars['lang306']; ?>
' id='importImage' class='menuIcon'>
                        <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/cdn/img/ragecomic/photo_add.png" />
                    </span>
                </div>
                <div id="brushController" class="controllerSubset">
                    <strong style='padding-right: 5px'><?php echo $this->_tpl_vars['lang307']; ?>
</strong>
                    <span title='<?php echo $this->_tpl_vars['lang308']; ?>
' id="customWidget" class='menuIcon'>
                        <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/cdn/img/ragecomic/color_wheel.png" />
                    </span>
                    <span title='<?php echo $this->_tpl_vars['lang309']; ?>
' id="brushSize" class='menuIcon'>
                        <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/cdn/img/ragecomic/paintbrush.png" />
                    </span>
                    <span title="<?php echo $this->_tpl_vars['lang310']; ?>
" id="undoBrush" class='menuIcon'>
                        <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/cdn/img/ragecomic/arrow_undo.png" />
                    </span>
                    <div id="brushSizeSlider">
                    </div>
                </div>
                <div id="panelController" class="controllerSubset" style="float: right">
                    <strong style='padding-right: 5px'><?php echo $this->_tpl_vars['lang311']; ?>
</strong>
                    <span title='<?php echo $this->_tpl_vars['lang312']; ?>
' id='addFrameCtrl' class='menuIcon'>
                        <img alt="" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/cdn/img/ragecomic/add.png" />
                    </span>
                    <span title='<?php echo $this->_tpl_vars['lang313']; ?>
' id='removeFrameCtrl' class='menuIcon'>
                        <img alt="" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/cdn/img/ragecomic/delete.png" />
                    </span>
                </div>
                <div id="canvasControllerDiv" class="controllerSubset">
                    <strong style='padding-right: 5px'><?php echo $this->_tpl_vars['lang314']; ?>
</strong>
                    <span title='<?php echo $this->_tpl_vars['lang315']; ?>
' id='exportCanvas' class='menuIcon'>
                        <img alt="" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/cdn/img/ragecomic/disk.png" />
                    </span>
                </div>
                <div style="clear: both">
                </div>
            </div>
            <div id='drawingCanvasContainer'>
                <canvas id="drawingCanvasInterface"></canvas>
                <canvas id="drawingCanvas"></canvas>
                <img id="watermark" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic/cdn/img/ragecomic/watermark.png" style="display: none;" />
            </div>
        </div>
     <div style="margin-bottom:5px;" align="center"></div>

    </div>
</div>
<?php echo '
    <script type="text/javascript">
        $(document).ready(function () {
            RageComic.initialize({
                packRoot: "';  echo $this->_tpl_vars['baseurl']; ?>
/comic/<?php echo '",
                siteUrl: "",
                builderUrl: "';  echo $this->_tpl_vars['baseurl']; ?>
/comic<?php echo '",
                cdnRoot: "';  echo $this->_tpl_vars['baseurl']; ?>
/comic/cdn/<?php echo '"
            });
        });
        window.onbeforeunload = confirmExit;
        function confirmExit() {
            return "';  echo $this->_tpl_vars['lang316'];  echo '";
        }
    </script>
'; ?>

</div>
</body>
</html>