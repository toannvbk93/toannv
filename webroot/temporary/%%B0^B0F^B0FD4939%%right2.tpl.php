<?php /* Smarty version 2.6.6, created on 2017-05-20 07:48:11
         compiled from right2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'get_advertisement', 'right2.tpl', 5, false),array('insert', 'get_member_profilepicture', 'right2.tpl', 11, false),array('modifier', 'stripslashes', 'right2.tpl', 10, false),)), $this); ?>

		<div style="margin-bottom:5px;">          
            
           
        	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_advertisement', 'AID' => 1)), $this); ?>


            </div>
    	<?php if ($_SESSION['USERID'] != ""): ?>
		<div class="user-block">
				<h3><?php echo $this->_tpl_vars['lang257']; ?>
 <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$_SESSION['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=$_SESSION['USERNAME'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></h3>
				<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_member_profilepicture', 'assign' => 'profilepicture', 'value' => 'var', 'USERID' => $_SESSION['USERID'])), $this); ?>

				<img id="uploaded_img" src="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/thumbs/<?php echo $this->_tpl_vars['profilepicture']; ?>
?<?php echo time(); ?>
" alt="avatar" style="border: 2px solid rgb(187, 187, 187); float: left; margin-right: 10px;width:80px;height:80px" />
				<div class="userinfoblock"> 
					<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$_SESSION['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo $this->_tpl_vars['lang192']; ?>
</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$_SESSION['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
/likes"><?php echo $this->_tpl_vars['lang193']; ?>
</a><br>
					<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/settings"><?php echo $this->_tpl_vars['lang45']; ?>
</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$_SESSION['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
/messages"><?php echo $this->_tpl_vars['lang194']; ?>
</a><br>
				</div>
				<?php echo '
                <script type="text/javascript">
                function loadContent(elementSelector, sourceURL) {
                $(""+elementSelector+"").load(""+sourceURL+"");
                }
                </script>
                '; ?>

                <div id="loadme"></div>
			<div style="clear: both;"></div>
			<div style="margin-top: 15px; padding-top: 10px; border-top: 1px solid rgb(187, 187, 187);">
				 <a href="javascript:loadContent('#loadme', '<?php echo $this->_tpl_vars['baseurl']; ?>
/log_out');"><?php echo $this->_tpl_vars['lang198']; ?>
</a>
				<div style="clear: both;"></div>
			</div>
			</div>
		<?php else: ?>  
			<div class="social-block">
				
				<div id="signup-desc" class="description">
				<div class="spcl-button-wrap">
			
				<?php if ($this->_tpl_vars['TC'] == '1'): ?>
				<a class="spcl-button facebook badge-facebook-connect" label="LoginFormFacebookButton" next="" href="https://www.facebook.com/dialog/permissions.request?app_id=<?php echo $this->_tpl_vars['FACEBOOK_APP_ID']; ?>
&display=page&next=<?php echo $this->_tpl_vars['baseurl']; ?>
/&response_type=code&fbconnect=1&perms=email,user_birthday,user_about_me"><?php echo $this->_tpl_vars['lang14']; ?>
</a>
			
				<?php endif; ?>
				</div>
				</div>
			</div>
		<?php endif; ?>
     