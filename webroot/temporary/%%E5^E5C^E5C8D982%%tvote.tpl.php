<?php /* Smarty version 2.6.6, created on 2017-05-18 14:40:12
         compiled from tvote.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'makeseo', 'tvote.tpl', 5, false),array('modifier', 'stripslashes', 'tvote.tpl', 6, false),array('modifier', 'truncate', 'tvote.tpl', 73, false),array('function', 'math', 'tvote.tpl', 38, false),array('insert', 'return_vfy', 'tvote.tpl', 53, false),array('insert', 'return_vmo', 'tvote.tpl', 57, false),)), $this); ?>
<?php if ($this->_tpl_vars['topgags'] > 0): ?>
<div class="feature-bar">
<ul>
<?php unset($this->_sections['f']);
$this->_sections['f']['name'] = 'f';
$this->_sections['f']['loop'] = is_array($_loop=$this->_tpl_vars['topgags']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['f']['show'] = true;
$this->_sections['f']['max'] = $this->_sections['f']['loop'];
$this->_sections['f']['step'] = 1;
$this->_sections['f']['start'] = $this->_sections['f']['step'] > 0 ? 0 : $this->_sections['f']['loop']-1;
if ($this->_sections['f']['show']) {
    $this->_sections['f']['total'] = $this->_sections['f']['loop'];
    if ($this->_sections['f']['total'] == 0)
        $this->_sections['f']['show'] = false;
} else
    $this->_sections['f']['total'] = 0;
if ($this->_sections['f']['show']):

            for ($this->_sections['f']['index'] = $this->_sections['f']['start'], $this->_sections['f']['iteration'] = 1;
                 $this->_sections['f']['iteration'] <= $this->_sections['f']['total'];
                 $this->_sections['f']['index'] += $this->_sections['f']['step'], $this->_sections['f']['iteration']++):
$this->_sections['f']['rownum'] = $this->_sections['f']['iteration'];
$this->_sections['f']['index_prev'] = $this->_sections['f']['index'] - $this->_sections['f']['step'];
$this->_sections['f']['index_next'] = $this->_sections['f']['index'] + $this->_sections['f']['step'];
$this->_sections['f']['first']      = ($this->_sections['f']['iteration'] == 1);
$this->_sections['f']['last']       = ($this->_sections['f']['iteration'] == $this->_sections['f']['total']);
?>
        <a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['topgags'][$this->_sections['f']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['topgags'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>">
       <img src="<?php echo $this->_tpl_vars['purl']; ?>
/<?php echo $this->_tpl_vars['topgags'][$this->_sections['f']['index']]['path']; ?>
/t/s-<?php echo $this->_tpl_vars['topgags'][$this->_sections['f']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['topgags'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
">
        <span class="title"><?php echo $this->_tpl_vars['topgags'][$this->_sections['f']['index']]['story']; ?>
</span>
        </a>
<?php endfor; endif; ?>
</ul>
</div>
<?php endif; ?>
<div id="main">
    <div id="content-holder">        
        <div class="main-filter ">
               <h1 style="margin-left:15px;">Ảnh mới</h1>
			<a id="changeview" class="view_list" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/vote?view=list" title="Toggle Views"><?php echo $this->_tpl_vars['lang259']; ?>
</a>			
            <?php if ($_SESSION['USERID'] != ""): ?>
                <?php if ($_SESSION['FILTER'] == '1'): ?>
                <a class="safe-mode-switcher on" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/safe?m=<?php echo $this->_tpl_vars['eurl']; ?>
">&nbsp;</a>
                <?php else: ?>
                <a class="safe-mode-switcher off" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/safe?m=<?php echo $this->_tpl_vars['eurl']; ?>
&o=1">&nbsp;</a>
                <?php endif; ?>
            <?php else: ?>
            	<a class="safe-mode-switcher on" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/login">&nbsp;</a>
            <?php endif; ?>
        </div>
        <div id="content" listPage="hot">        
            <div id="use-tips" style="display:none;">
                <div id="view-info" class="list-tips">
                    <div id="shortcut-event-label" style="display:none"><?php echo $this->_tpl_vars['lang171']; ?>
</div>
                    <span><b><?php echo $this->_tpl_vars['lang169']; ?>
</b>: <?php echo $this->_tpl_vars['lang170']; ?>
</span>
                    <a href="#keyboard" class="keyboard_link"><?php echo $this->_tpl_vars['lang168']; ?>
</a>                    
                </div>
            </div>        
                   <div id="entries-content" class="grid"> 
					<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['posts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <ul id="grid-col-<?php if ($this->_sections['i']['iteration'] > 3):  echo smarty_function_math(array('equation' => "ceil(x / 3)",'x' => $this->_sections['i']['iteration']), $this); else: ?>1<?php endif; ?>" class="col-<?php if ($this->_sections['i']['iteration'] > 3):  echo smarty_function_math(array('equation' => "x % 3",'x' => $this->_sections['i']['iteration'],'assign' => 'remin'), $this); if ($this->_tpl_vars['remin'] == '0'): ?>3<?php else:  echo $this->_tpl_vars['remin'];  endif;  else:  echo $this->_sections['i']['iteration'];  endif; ?>">

                            <li class=" ">
                                <a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="jump_stop">
                                    <div style="" class="thimage">
                                        <?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw_thumb.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><?php else: ?>
										
<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic'] != ""): ?>
<img src="<?php echo $this->_tpl_vars['purl']; ?>
/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['path']; ?>
/t/s-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key'] != ""): ?>
<img src="http://img.youtube.com/vi/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key']; ?>
/0.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" style="max-width:215px" />
<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['fod_key'] != ""): ?>
<img src="http://www.funnyordie.com/media/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['fod_key']; ?>
/thumbnail/large.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" style="max-width:215px" />
<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['vfy_key'] != ""): ?>
<center>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vfy', 'value' => 'a', 'assign' => 'vfy', 'vfy' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['vfy_key'])), $this);  echo $this->_tpl_vars['vfy']; ?>

</center>
<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['vmo_key'] != ""): ?>
<center>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vmo', 'value' => 'a', 'assign' => 'vmo', 'vmo' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['vmo_key'])), $this);  echo $this->_tpl_vars['vmo']; ?>

</center>
<?php else: ?>
<center>
<?php echo $this->_tpl_vars['lang264']; ?>

</center>
<?php endif; ?>										
										<?php endif; ?>
                                    </div>
                                </a>
                                <p>
                                    <span class="comment">
                                    	<fb:comments-count href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html"></fb:comments-count>
                                    </span>
                                    <span id="love_count_<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="loved" votes="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['favclicks']; ?>
" score="0"><?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['favclicks']; ?>
</span>
                                </p>
                                <h1><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
 - <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</h1>
                                <h4></h4>
                            </li>
                        </ul>
                    <?php endfor; endif; ?>			
				</div>
            <div id="lastPostsLoader"></div>                
			<?php echo '
                <script type="text/javascript">
				$(document).ready(function(){
	$(window).scroll(function(){
	if (document.documentElement.scrollTop)
	{ var  curloc = document.documentElement.scrollTop; }
	else
	{ var curloc=$(window).scrollTop(); }
	var wintop = $(window).scrollTop(), docheight = $(document).height(), winheight = $(window).height();
	var  scrolltrigger = 0.95;
				 
	if  ((wintop/(docheight-winheight)) > scrolltrigger) {
	 lastAddedLiveFunc();
	 tpage = tpage+1;
	};
	if(curloc>$(window).height()){$(\'#backtotop\').slideDown();}else{$(\'#backtotop\').slideUp();};
});
});
</script>
				'; ?>

            <div id="paging-buttons" class="paging-buttons">
            	<?php if ($this->_tpl_vars['tpp'] != ""): ?>
                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/vote?page=<?php echo $this->_tpl_vars['tpp']; ?>
" class="previous">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                <?php else: ?>
                <a href="#" onclick="return false;" class="previous disabled">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['tnp'] != ""): ?>
                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/vote?page=<?php echo $this->_tpl_vars['tnp']; ?>
" class="older"><?php echo $this->_tpl_vars['lang167']; ?>
 &raquo;</a>
                <?php else: ?>
                <a href="#" onclick="return false;" class="older disabled"><?php echo $this->_tpl_vars['lang167']; ?>
 &raquo;</a>
                <?php endif; ?>
            </div>	
        </div>
        <?php echo '
        <script type="text/javascript">
        $(\'.unlove\').click(function(){
        var id=$(this).attr(\'entryId\');
        if( $(this).hasClass(\'unloved\')){
        $(this).removeClass(\'unloved\');
        ulikedeg($(this).attr(\'entryId\'),0,-1);
        }else{
        $(this).addClass(\'unloved\');
        if($(\'#post_love_\'+id).hasClass(\'loved\')){
        ulikedeg($(this).attr(\'entryId\'),-1,1);	
        $(\'#post_love_\'+id).removeClass(\'loved\');
        }else{
        ulikedeg($(this).attr(\'entryId\'),0,1);	
        }
        }
        });
        $(\'.vote\').click(function(){
        var id=$(this).attr(\'rel\');
        if( $(this).hasClass(\'loved\')){
        $(this).removeClass(\'loved\');
        ulikedeg($(this).attr(\'rel\'),-1,0);
        }else{
        $(this).addClass(\'loved\');
        if($(\'#vote-down-btn-\'+id).hasClass(\'unloved\')){
        $(\'#vote-down-btn-\'+id).removeClass(\'unloved\');
        ulikedeg($(this).attr(\'rel\'),1,-1);
        }else{
        ulikedeg($(this).attr(\'rel\'),1,0);
        }
        }
        });        
        function ulikedeg(p,l,u){
        jQuery.ajax({
        type:\'POST\',
        url:\'';  echo $this->_tpl_vars['baseurl'];  echo '\'+ \'/votegag.php\',
        data:\'l=\'+l+\'&pid=\' + p +\'&u=\'+u,
        success:function(e){
        $(\'#love_count_\'+p).html(e);
        }
        });
        }        
        </script>
        '; ?>

    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'right.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script type="text/javascript">
var adloca=$(\'#moving-boxes\').offset().top; 
 $(window).scroll(function () { 
    var curloca=$(window).scrollTop();
    if(curloca>adloca){
        $(\'#moving-boxes\').css(\'position\',\'fixed\');
        $(\'#moving-boxes\').css(\'top\',\'55px\');
        $(\'#moving-boxes\').css(\'z-index\',\'0\');
    };
    if(curloca <= adloca){
        $(\'#moving-boxes\').css(\'position\',\'static\');
        $(\'#moving-boxes\').css(\'top\',\'!important\');
        $(\'#moving-boxes\').css(\'z-index\',\'!important\');
    };
    });
</script> 
'; ?>
   
<div id="footer" class="">