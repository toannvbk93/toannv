<?php /* Smarty version 2.6.6, created on 2017-05-19 19:17:22
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'makeseo', 'header.tpl', 135, false),array('modifier', 'stripslashes', 'header.tpl', 165, false),array('insert', 'get_member_profilepicture', 'header.tpl', 164, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" onkeydown="keyfind(event)" lang="<?php echo $this->_tpl_vars['lang254']; ?>
" dir="<?php echo $this->_tpl_vars['lang255']; ?>
">

<head prefix="og: http://ogp.me/ns/fb#">
    <title><?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif; ?> <?php echo $this->_tpl_vars['site_name']; ?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="<?php if ($this->_tpl_vars['metadescription'] != ' '):  echo $this->_tpl_vars['metadescription']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
">
    <meta name="keywords" content="<?php if ($this->_tpl_vars['pagetitle'] != ' '):  echo $this->_tpl_vars['pagetitle']; ?>
,<?php endif;  if ($this->_tpl_vars['metakeywords'] != ' '):  echo $this->_tpl_vars['metakeywords']; ?>
,<?php endif;  echo $this->_tpl_vars['site_name']; ?>
">
    <meta name="title" content="<?php if ($this->_tpl_vars['pagetitle'] != ' '):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0" />
    <meta property="og:title" content="<?php if ($this->_tpl_vars['pagetitle'] != ' '):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
"/>
    <meta property="og:site_name" content="<?php echo $this->_tpl_vars['site_name']; ?>
" /> <?php if ($this->_tpl_vars['p']['pic'] != ""): ?>
    <meta property="og:url" content="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
/" /> <?php elseif ($this->_tpl_vars['p']['youtube_key'] != ""): ?>
    <meta property="og:url" content="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
/" /> <?php elseif ($this->_tpl_vars['p']['fod_key'] != ""): ?>
    <meta property="og:url" content="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
/" /> <?php elseif ($this->_tpl_vars['p']['vmo_key'] != ""): ?>
    <meta property="og:url" content="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
/" /> <?php else: ?>
    <meta property="og:url" content="<?php echo $this->_tpl_vars['baseurl']; ?>
/" /> <?php endif; ?> <?php if ($this->_tpl_vars['p']['pic'] != ""): ?>
    <meta property="og:image" content="<?php echo $this->_tpl_vars['purl']; ?>
/<?php echo $this->_tpl_vars['p']['path']; ?>
/t/s-<?php echo $this->_tpl_vars['p']['pic']; ?>
" /> <?php elseif ($this->_tpl_vars['p']['youtube_key'] != ""): ?>
    <meta property="og:image" content="http://img.youtube.com/vi/<?php echo $this->_tpl_vars['p']['youtube_key']; ?>
/0.jpg" /> <?php elseif ($this->_tpl_vars['p']['fod_key'] != ""): ?>
    <meta property="og:image" content="http://www.funnyordie.com/media/<?php echo $this->_tpl_vars['p']['fod_key']; ?>
/thumbnail/large.jpg" /> <?php elseif ($this->_tpl_vars['p']['vfy_key'] != ""): ?>
    <meta property="og:image" content="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/9gag-logo-large.png" /> <?php elseif ($this->_tpl_vars['p']['vmo_key'] != ""): ?>
    <meta property="og:image" content="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/9gag-logo-large.png" /> <?php endif; ?>
    <meta property="og:type" content="blog" />
    <meta property="fb:app_id" content="<?php echo $this->_tpl_vars['FACEBOOK_APP_ID']; ?>
" />
    <meta property="fb:admins" content="<?php echo $this->_tpl_vars['FACEBOOK_ADMIN']; ?>
" />
    <script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/ckeditor/ckeditor.js"></script>
    <link href="<?php echo $this->_tpl_vars['baseurl']; ?>
/css/style_<?php echo $this->_tpl_vars['lang255']; ?>
.css?v=1.0" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo $this->_tpl_vars['baseurl']; ?>
/css/style_LTR.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="icon" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/favicon.ico" />
    <link rel="shortcut icon" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/favicon.ico" />

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js"></script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>



    <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/jquery.1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/Config.1.0.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/Common.1.4.7.min.js"></script>

    <link href="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/jquery-ui-1.10.3.custom.css" rel="stylesheet" type="text/css" />



    <script type="text/javascript">
        Gauvl.indexPage.init(1, "index", 1);
    </script>
    <?php if ($this->_tpl_vars['RSS'] == '1'): ?>
    <link rel="alternate" type="application/rss+xml" title="RSS For <?php echo $this->_tpl_vars['site_name']; ?>
" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/rss.php" /> <?php endif; ?>
</head>

<body id="page-landing" class="main-body ">
    <div id="fb-root"></div>

    <?php if ($this->_tpl_vars['enable_fc'] == '1'): ?> <?php if ($_SESSION['language'] == 'ar'): ?> <?php echo '
    <script src="http://connect.facebook.net/vi_VN/all.js"></script>
    <script>
        FB.init({
            appId: \'';  echo $this->_tpl_vars['FACEBOOK_APP_ID'];  echo '\',
            status: true,
            cookie: true,
            xfbml: true
        });
        FB.Event.subscribe(\'auth.login\', function(response) {
            window.location.reload();
        });
    </script>
    '; ?>
 <?php else: ?> <?php echo '
    <script src="http://connect.facebook.net/vi_VN/all.js"></script>
    <script>
        FB.init({
            appId: \'';  echo $this->_tpl_vars['FACEBOOK_APP_ID'];  echo '\',
            status: true,
            cookie: true,
            xfbml: true
        });
        FB.Event.subscribe(\'auth.login\', function(response) {
            window.location.reload();
        });
    </script>
    '; ?>
 <?php endif; ?> <?php endif; ?> <?php echo '
    <script type="text/javascript">
        setTimeout(function() {
            $("#tooltip").fadeOut().empty();
        }, 10000);
    </script>
    '; ?>

    <div id="tmp-img" style="display:none"></div>
    <?php echo '
    <script type="text/javascript">
        function rmt(l) {
            var img = new Image();
            img.src = l;
            document.getElementById(\'tmp-img\').appendChild(img);
        }

        function myWindow(location, address, gaCategory, gaAction, entryLink) {
            var w = 640;
            var h = 460;
            var sTop = window.screen.height / 2 - (h / 2);
            var sLeft = window.screen.width / 2 - (w / 2);
            var sharer = window.open(address, "Share on Facebook", "status=1,height=" + h + ",width=" + w + ",top=" + sTop + ",left=" + sLeft + ",resizable=0");
        }
    </script>
    '; ?>

    <div id="head-wrapper">

        <div id="searchbar_container">
            <div id="searchbar_wrapper">
                <div id="header_searchbar" style="display:none;">
                    <div id="search_wrapper">
                        <form action="<?php echo $this->_tpl_vars['baseurl']; ?>
/search">
                            <input id="sitebar_search_header" type="text" class="search search_input" name="query" tabindex="1" placeholder="<?php echo $this->_tpl_vars['lang189']; ?>
" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="head-bar">
            <h1><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/"><?php echo $this->_tpl_vars['site_name']; ?>
</a></h1>
            <ul id="nav" class="main-menu" style="overflow:visible">

                <li><a class="<?php if ($this->_tpl_vars['menu'] == 1): ?>current<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/"><?php echo $this->_tpl_vars['lang336']; ?>
</a>
                </li>
                <li><a class="<?php if ($this->_tpl_vars['menu'] == 3): ?>current<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/vote"><?php echo $this->_tpl_vars['lang337']; ?>
</a>
                </li>
                <li><a class="<?php if ($this->_tpl_vars['menu'] == 4): ?>current<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/video"><?php echo $this->_tpl_vars['lang338']; ?>
</a>
                </li>
                <li><a class="<?php if ($this->_tpl_vars['menu'] == 2): ?>current<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/hot"><?php echo $this->_tpl_vars['lang339']; ?>
</a> </li>
                <li><a class="<?php if ($this->_tpl_vars['menu'] == 2): ?>current<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic"><?php echo $this->_tpl_vars['lang340']; ?>
</a> </li>
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
/search"><strong><?php echo $this->_tpl_vars['lang341']; ?>
</strong></a>
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
/submit" onclick="_gaq.push(['_trackEvent', 'New-Post', 'Clicked', 'Headbar', 1]);"> <?php echo $this->_tpl_vars['lang342']; ?>
</a>
                </li>
            </ul>
            <ul class="main-2-menu">
                <?php if ($_SESSION['USERID'] != ""): ?>
                <li>
                    <?php echo '
                    <script type="text/javascript">
                        function loadContent(elementSelector, sourceURL) {
                            $("" + elementSelector + "").load("" + sourceURL + "");
                        }
                    </script>
                    '; ?>

                    <div id="loadme"></div>
                    <div id="profile-menu" class="profile-menu">
                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_member_profilepicture', 'assign' => 'profilepicture', 'value' => 'var', 'USERID' => $_SESSION['USERID'])), $this); ?>

                        <a id="profile-username" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$_SESSION['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class="profile-button"><img width="25" height="25" src="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/thumbs/<?php echo $this->_tpl_vars['profilepicture']; ?>
?<?php echo time(); ?>
" alt="avatar" />
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
/messages"><?php echo $this->_tpl_vars['lang343']; ?>
</a>
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
                </li>
                <?php else: ?>
                <div id="headerRight">
                    <div class="login1">
                        <!--<a href="https://www.facebook.com/dialog/permissions.request?app_id=<?php echo $this->_tpl_vars['FACEBOOK_APP_ID']; ?>
&display=page&next=<?php echo $this->_tpl_vars['baseurl']; ?>
/&response_type=code&fbconnect=1&perms=email,user_birthday,user_about_me" label="Header"><?php echo $this->_tpl_vars['lang197']; ?>
</a>-->
                        <a href="login" label="Header"><?php echo $this->_tpl_vars['lang197']; ?>
</a>
                    </div>
                </div>

                <?php endif; ?>

            </ul>
        </div>
    </div>
    <div id="notice-bar">
        <div class="wrap">
            Thông báo:</b> Sau nhiều biến cố, rất có thể 1 thời trẻ trâu dữ dội của chúng ta sẽ phải dừng tại đây. Nếu may mắn hơn, nó sẽ còn tiếp tục...
        </div>
    </div>
    <?php echo '
    <script type="text/javascript">
        $(\'.search-button\').click(function() {
            $(\'#header_searchbar\').toggle(\'slow\');
        });
        setInterval("change_logo_color();", 10000);

        function change_logo_color() {
            var col = \'rgb(\' + (Math.floor((Math.random() * 128) + 50)) + \',\' + (Math.floor((Math.random() * 128) + 50)) + \',\' + (Math.floor((Math.random() * 128) + 50)) + \')\';
            $(\'#head-bar h1 a\').animate({
                "background-color": col
            }, 500);
        }
    </script>
    '; ?>

    <div id="container" style="">
        <?php if ($this->_tpl_vars['viewpage'] == '1'): ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js1.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php else: ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php endif; ?>