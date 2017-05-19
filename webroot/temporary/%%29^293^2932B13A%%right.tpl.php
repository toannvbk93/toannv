<?php /* Smarty version 2.6.6, created on 2017-05-19 19:17:22
         compiled from right.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'get_advertisement', 'right.tpl', 4, false),array('insert', 'get_member_profilepicture', 'right.tpl', 10, false),array('modifier', 'stripslashes', 'right.tpl', 9, false),array('modifier', 'truncate', 'right.tpl', 112, false),)), $this); ?>
	
	<div class="side-bar">
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
			<div style="clear: both;"></div>
				<?php echo '
                <script type="text/javascript">
                function loadContent(elementSelector, sourceURL) {
                $(""+elementSelector+"").load(""+sourceURL+"");
                }
                </script>
                '; ?>

                <div id="loadme"></div>
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
   <div>
        <a class="share-btn" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/submit" class="buttons spaceBottom">Click để bắt đầu chia sẻ những bức ảnh vui!</a>
        <div class="clear">
        </div>
    </div><br/>
 
	<div>
		
			<div class="clearfix"></div>
	</div>
	<div class="top-10">
	<h3>
				TOP Cuoihi
				<span style="float:right">
				<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/top-users"><i>Xem thêm &raquo;</i></a>
				</span>
			</h3>
            <div class="widget-wrapper">
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['top']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<ul class="widget-content">
			<li class="widget-content">
			<a target="_blank" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$this->_tpl_vars['top'][$this->_sections['i']['index']]['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
">
			<img src="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/<?php if ($this->_tpl_vars['top'][$this->_sections['i']['index']]['profilepicture'] == ""): ?>noprofilepicture.jpg<?php else:  echo $this->_tpl_vars['top'][$this->_sections['i']['index']]['profilepicture'];  endif; ?>?<?php echo time(); ?>
" style="width:40px;height:40px;">
			</a>
				<ul>
				<li>
					<a target="_blank" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo $this->_tpl_vars['top'][$this->_sections['i']['index']]['USERID']; ?>
"><?php echo $this->_tpl_vars['top'][$this->_sections['i']['index']]['username']; ?>
</a>
				</li>
				<!--li>
					Bài: <strong><?php echo $this->_tpl_vars['top'][$this->_sections['i']['index']]['posts']; ?>
</strong>
				</li-->
				<li>
					Điểm: <?php echo $this->_tpl_vars['top'][$this->_sections['i']['index']]['points']; ?>

				</li>
				</ul>
			</li>
			</ul>
			<?php endfor; endif; ?>
                <div class="clearfix"></div>
            </div>
		</div>
    <div>
	<div class="fb-like-box" data-href="https://www.facebook.com/codehaivl2015.como" data-width="300" data-height="400" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
	<div class="clearfix"></div>
		</div>
 
        <div>
         
			<?php if ($this->_tpl_vars['r'][0]['PID'] != "" && $this->_tpl_vars['rhome'] == '1'): ?>
			<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_advertisement', 'value' => 'var', 'AID' => '7')), $this); ?>

			<div id="post-gag-stay" class="_badge-sticky-elements box_info" data-y="60">
				<div class="popular-block">
				    <h3><?php echo $this->_tpl_vars['lang251']; ?>
</h3>
                    <div class="box-wrapper">
				        <ol>
				        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['r']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				        <a class="wrap" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['r'][$this->_sections['i']['index']]['PID']; ?>
"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
					        <li>
						        <?php if ($this->_tpl_vars['r'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?>
							        <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw_thumb.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['r'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
						        <?php else: ?>
						        	<?php if ($this->_tpl_vars['r'][$this->_sections['i']['index']]['isgif'] == '1'): ?>
									<img src="<?php echo $this->_tpl_vars['purl']; ?>
/<?php echo $this->_tpl_vars['r'][$this->_sections['i']['index']]['path']; ?>
/t/static-<?php echo $this->_tpl_vars['r'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['r'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
									<?php else: ?>
						        	<img src="<?php echo $this->_tpl_vars['purl']; ?>
/<?php echo $this->_tpl_vars['r'][$this->_sections['i']['index']]['path']; ?>
/t/s-<?php echo $this->_tpl_vars['r'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['r'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
						        	<?php endif; ?>
						        <?php endif; ?>
						        <h4><?php if ($this->_tpl_vars['truncate'] == '1'):  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['r'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true));  else:  echo ((is_array($_tmp=$this->_tpl_vars['r'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp));  endif; ?></h4>
						        <h4><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$this->_tpl_vars['r'][$this->_sections['i']['index']]['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['r'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</a></h4>
					        <p class="meta">	<!--<span class="comment"><fb:comments-count href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['r'][$this->_sections['i']['index']]['PID']; ?>
"></fb:comments-count></span>-->
						        <span class="viewed"><?php echo $this->_tpl_vars['r'][$this->_sections['i']['index']]['view']; ?>
</span>
						        </p>
					        </li>
				        </a>
				        <?php endfor; endif; ?>
				        </ol>
                    </div>
				</div>
			</div>
		<?php endif; ?> 
<div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
	<div class="vr-box">
	<h3>Giúp codehaivl2015.com duyệt bài này</h3>
        <div class="info-wrapper">
	        <ol>
	        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['vr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	
		        <li><a class="wrap" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['vr'][$this->_sections['i']['index']]['PID']; ?>
"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                    <?php if ($this->_tpl_vars['vr'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?>
				        <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw_thumb.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['vr'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
			        <?php else: ?>
				        <?php if ($this->_tpl_vars['vr'][$this->_sections['i']['index']]['pic'] != ""): ?>
				        	<?php if ($this->_tpl_vars['vr'][$this->_sections['i']['index']]['isgif'] == '1'): ?>
							<img src="<?php echo $this->_tpl_vars['purl']; ?>
/<?php echo $this->_tpl_vars['vr'][$this->_sections['i']['index']]['path']; ?>
/t/static-<?php echo $this->_tpl_vars['vr'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['vr'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
							<?php else: ?>
					        <img src="<?php echo $this->_tpl_vars['purl']; ?>
/<?php echo $this->_tpl_vars['vr'][$this->_sections['i']['index']]['path']; ?>
/t/s-<?php echo $this->_tpl_vars['vr'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['vr'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
					        <?php endif; ?>
				        <?php else: ?>
					        <?php if ($this->_tpl_vars['vr'][$this->_sections['i']['index']]['youtube_key'] != ""): ?>
						        <img src="http://img.youtube.com/vi/<?php echo $this->_tpl_vars['vr'][$this->_sections['i']['index']]['youtube_key']; ?>
/0.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['vr'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
					        <?php elseif ($this->_tpl_vars['vr'][$this->_sections['i']['index']]['contents'] != ""): ?>
						        <img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/s-text.png" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['vr'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
					        <?php else: ?>
						        <img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/s-error.jpg" alt="Không tìm thấy dữ liệu" />
					        <?php endif; ?>
				        <?php endif; ?>
			        <?php endif; ?>
                    </a>
			        <h4><?php if ($this->_tpl_vars['truncate'] == '1'):  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['vr'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true));  else:  echo ((is_array($_tmp=$this->_tpl_vars['vr'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp));  endif; ?></h4>
			        <h4><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$this->_tpl_vars['vr'][$this->_sections['i']['index']]['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['vr'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</a></h4>
			        <p class="meta">	<!--<span class="comment">
			        <fb:comments-count href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['vr'][$this->_sections['i']['index']]['PID']; ?>
"></fb:comments-count></span><span class="loved"><?php echo $this->_tpl_vars['vr'][$this->_sections['i']['index']]['favclicks']; ?>
</span>-->
			        <span class="viewed"><?php echo $this->_tpl_vars['vr'][$this->_sections['i']['index']]['view']; ?>
</span>
			        </p>
		        </li>
	
	        <?php endfor; endif; ?>
	        </ol>
        </div>
	</div>
</div>
			 <div class="s-300" id="bottom-s300">            
            	<?php if ($_SESSION['FILTER'] == '0' && $this->_tpl_vars['NSFWADS']): ?>
        	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_advertisement', 'AID' => 4)), $this); ?>

            <?php else: ?>
        	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_advertisement', 'AID' => 4)), $this); ?>

		<br/>
		<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_advertisement', 'AID' => 7)), $this); ?>

			<?php endif; ?>
            </div>
			
        </div>
    </div>