<?php /* Smarty version 2.6.6, created on 2015-01-15 13:44:41
         compiled from creatememe.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'makeseo', 'creatememe.tpl', 52, false),array('modifier', 'stripslashes', 'creatememe.tpl', 71, false),array('insert', 'get_member_profilepicture', 'creatememe.tpl', 74, false),)), $this); ?>
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
<link href="css/meme.css" rel="stylesheet" />
<link href="css/spectrum.css" rel="stylesheet" />
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
<?php echo '
<script type="text/javascript">
$(\'.searchButton\').click(function(){
    $(\'#header_searchbar\').toggle(\'slow\');
    });
</script>
'; ?>

<div id="container">
<div class="container">
<div class="box memes">
	<h1><?php echo $this->_tpl_vars['k']; ?>
</h1>
	<div class="row">
		<div class="span4">
				<p><?php echo $this->_tpl_vars['lang319']; ?>
</p>
				<select id="fontsizesel">
				<option value="18">18</option>
				<option value="24" selected>24</option>
				<option value="32">32</option>
				<option value="48">48</option>
				<option value="72">72</option>
				<option value="144">144</option>
				</select>
				
				<p><?php echo $this->_tpl_vars['lang320']; ?>
</p>
				<input type='text' id="custom" value="#ffffff" />
				
				<p><?php echo $this->_tpl_vars['lang321']; ?>
</p>
				<input type='text' id="strokesel" value="#000000" />
				<hr />
				
				<p><?php echo $this->_tpl_vars['lang322']; ?>
</p>
				<textarea id="tc1"><?php echo $this->_tpl_vars['lang324']; ?>
</textarea>
				<p>
					<button type="button" class="btn btn-success" id="cap1"><?php echo $this->_tpl_vars['lang326']; ?>
</button>
					<button type="button" class="btn btn-danger" id="rcap1"><?php echo $this->_tpl_vars['lang327']; ?>
</button>
				</p>
				
				<p><?php echo $this->_tpl_vars['lang323']; ?>
<p>
				<textarea id="tc2"><?php echo $this->_tpl_vars['lang325']; ?>
</textarea>
				<p>
					<button type="button" class="btn btn-success" id="cap2"><?php echo $this->_tpl_vars['lang326']; ?>
</button>
					<button type="button" class="btn btn-danger" id="rcap2"><?php echo $this->_tpl_vars['lang327']; ?>
</button>
				</p>
				<hr />
			<form id="createimg" action="create.php" method="post">
				<p><button id="cands" class="btn btn-large btn-primary" type="button"><?php echo $this->_tpl_vars['lang328']; ?>
</button></p>
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
	var gblImgName = "<?php echo $this->_tpl_vars['imgname']; ?>
";
	var watermark = "<?php echo $this->_tpl_vars['watermark']; ?>
";
</script>
<script src="js/kinetic-v4.0.5.min.js" type="text/javascript"></script>
<?php if ($_SESSION['language'] == 'vi'): ?>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/meme/js/meme.min.vi.js" type="text/javascript"></script>
<?php else: ?>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/meme/js/meme.min.en.js" type="text/javascript"></script>
<?php endif; ?>
<script src="js/spectrum.js" type="text/javascript"></script>
</body>
</html>