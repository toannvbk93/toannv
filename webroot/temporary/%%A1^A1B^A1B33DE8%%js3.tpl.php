<?php /* Smarty version 2.6.6, created on 2017-05-19 19:06:14
         compiled from js3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'js3.tpl', 12, false),)), $this); ?>
    <div id="b9gcs-soft-share" class="b9gcs-soft-box ">
        <div class="content">
            <a href="javascript:void(0);" class="close-btn"></a>
            <form id="form-b9gcs-soft-share" class="modal" action="">
                <h3><?php echo $this->_tpl_vars['lang266']; ?>
<span id="post-share-dismiss-counter"></span></h3>
                <h4><?php echo $this->_tpl_vars['lang267']; ?>
</h4>
                <div class="facebook-share">
                	<a href="javascript:myWindow('Facebook Share', 'http://www.facebook.com/sharer/sharer.php?u=<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
', 'Facebook-Share-After-User-Post', 'Clicked');"></a>					
                </div>
                <div class="other-social">
                    <div class="twitter-tweet">
                    	<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php echo ((is_array($_tmp=$this->_tpl_vars['p']['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" data-url="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
" data-count="horizontal" data-via="">&nbsp;</a>						
                    </div>
                    <div class="google-plus">
                    	<g:plusone size="medium" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
"></g:plusone>	
                    </div>                    
                    <div class="facebook-button">
                    	<fb:like href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
" send="false" layout="button_count" width="90" show_faces="false" font="" label="PostShare"></fb:like>
                    </div>
                    <div class="stumbleupon-button">
                    	<su:badge layout="1" location="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
?ref=stumbleupon"></su:badge> <?php echo '<script type="text/javascript"> (function() { var li = document.createElement(\'script\'); li.type = \'text/javascript\'; li.async = true;  li.src = \'https://platform.stumbleupon.com/1/widgets.js\';  var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(li, s);  })(); </script>'; ?>
						
                    </div>                
                </div>
                <div class="field">
                	<p><?php echo $this->_tpl_vars['lang268']; ?>
:</p>
                	<input id="post-share-entry-url" type="text" class="text" value="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
" placeholder="" />
                </div>
            </form>
        </div>                
    </div>
</div>
<?php echo '
<script type="text/javascript">
$(\'#overlay-shadow\').removeClass(\'hide\');
$(\'#overlay-container\').removeClass(\'hide\');  
$(\'.close-btn\').click(function(){
$(\'#overlay-shadow\').addClass(\'hide\');
$(\'#overlay-container\').addClass(\'hide\');
});
var i=10;		
function delayedAlert()  
{  
timeoutID = window.setTimeout(decrease, 1000);  
}  
function decrease()  
{  
$(\'#post-share-dismiss-counter\').html(\'(\'+i+\')\');
i--;
if(i==-1){
$(\'#overlay-shadow\').addClass(\'hide\');
$(\'#overlay-container\').addClass(\'hide\'); 
}else{
delayedAlert() ;	  
};
}  
delayedAlert(); 
function clearAlert()  
{  
window.clearTimeout(timeoutID);  
}
</script>
'; ?>