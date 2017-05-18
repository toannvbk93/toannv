<?php /* Smarty version 2.6.6, created on 2017-04-24 15:54:43
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'login.tpl', 4, false),)), $this); ?>
<!DOCTYPE html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="<?php echo $this->_tpl_vars['lang254']; ?>
" dir="<?php echo $this->_tpl_vars['lang255']; ?>
">
<head>
<title><?php echo ((is_array($_tmp=$this->_tpl_vars['pagetitle'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</title>
<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html, charset=utf-8" />
<meta content="width=device-width,initial-scale=1" name="viewport" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/css/connect_<?php echo $this->_tpl_vars['lang255']; ?>
.css" media="screen,projection" type="text/css" />
</head>

<body id="page-signup">
    <div class="signup-wrapper">

        <div class="header">
        	<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
"><h1></h1></a>
        </div>
        <div class="content">
            <form id="form-signup-login" class="generic" action="<?php echo $this->_tpl_vars['baseurl']; ?>
/login" method="post">
                	<?php if ($this->_tpl_vars['error'] != ""): ?>
                    <p id="setup-msg" class="message red"><?php echo $this->_tpl_vars['error']; ?>
</p>
                  <?php endif; ?>
                  <div id="login-username-block" class="field">
                  	<label><?php echo $this->_tpl_vars['lang36']; ?>
</label>
                  	<input id="login-username" type="text" class="text" name="username" placeholder="<?php echo $this->_tpl_vars['lang36']; ?>
" tabindex="1" maxlength="200" value=""/>
                  </div>
                  <div id="login-email-block" class="field">
                      <label><?php echo $this->_tpl_vars['lang20']; ?>
<span> (<a id="recover-to-login" href="#"><?php echo $this->_tpl_vars['lang27']; ?>
</a>)</span>
                      </label>
                      <input id="login-email" type="text" class="text" name="email" placeholder="<?php echo $this->_tpl_vars['lang20']; ?>
" tabindex="2" maxlength="200" value=""/>
                  </div>
                  <div id="login-password-block" class="field">
                      <label><?php echo $this->_tpl_vars['lang2']; ?>

                      <span>(<a id="login-to-recover" href="#"><?php echo $this->_tpl_vars['lang28']; ?>
<span class="badge-js" style="color:#a900f0;" key="?"></span></a>)</span>
                      </label>
                      <input id="login-password" type="password" class="text" name="password" placeholder="<?php echo $this->_tpl_vars['lang2']; ?>
" tabindex="3" maxlength="32"/>
                  </div>
  				        <div id="login-rememberme-block" class="field">
                      <label><?php echo $this->_tpl_vars['lang273']; ?>
 : <input name="rememberme" type="checkbox" tabindex="4" />
                      </label>
                  </div>
                  <div class="action">
                  	<input id="logsub" type="hidden" name="logsub" value="1"></input>
                  	<input id="login-submit" type="submit" class="submit-button" value="<?php echo $this->_tpl_vars['lang29']; ?>
"></input>
                  </div>
            </form>
        </div>
    </div>
    <div id="fb-root"></div>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/connect.js"></script>
</body>
</html>