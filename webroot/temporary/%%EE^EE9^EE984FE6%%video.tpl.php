<?php /* Smarty version 2.6.6, created on 2017-05-15 15:43:45
         compiled from video.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'makeseo', 'video.tpl', 5, false),array('modifier', 'stripslashes', 'video.tpl', 6, false),array('insert', 'get_advertisement', 'video.tpl', 16, false),)), $this); ?>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'quick.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 <div style="margin-bottom:5px;" align="center">    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_advertisement', 'AID' => 8)), $this); ?>
</div>
    <div id="content-holder">        
        <div class="main-filter ">
          <h1 style="margin-left:15px;margin-top: 10px;">Video</h1>
            <?php if ($this->_tpl_vars['thumbs'] == '1'): ?>
            <a id="changeview" class="view_thumbs" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/vote?view=thumbs" title="Toggle Views"><?php echo $this->_tpl_vars['lang258']; ?>
</a>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['safemode'] == '1'): ?>
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
            <?php endif; ?>
        </div>
        <div id="content" listPage="hot">        
                 <div id="use-tips">
                <div class="list-tips" id="view-info">
                    <div style="display:none" id="shortcut-event-label">Tip-Press-2</div>
                    <span><b>Mẹo</b>: Ai cũng có thể đăng ảnh và video lên codehaivl2015.com. Thử <a href="/submit?file=1">đăng ngay!</a></span>
                    <a class="keyboard_link" href="#keyboard">Cách lướt ảnh nhanh hơn tại đây</a>        
                </div>
            </div>
     
            <div id="entries-content" class="list">
                <ul id="entries-content-ul" class="col-1"> 
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
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "home_bit.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endfor; endif; ?>                
                </ul>
                 <div class="view-more" id="view_more_div">
                    <a class="next-page" id="next_page" href="#" style="display: inline;color:white;">xem thêm, còn nhiều lắm</a>
                </div>
            </div>
 <div class="plzVoteBottom"><br><span style="color:red">Giúp</span>  codehaivl2015.com <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/vote">bình chọn ảnh</a> để nhiều ảnh hay xuất hiện ở trang chủ hơn nhé</div>
           <div id="lastPostsLoader"></div>                
            <?php if ($this->_tpl_vars['AUTOSCROLL'] == '1'): ?>
            <div id="load_image" style="background:url(images/load.gif) center no-repeat; width:%100; height:50px;"> </div>
            <?php echo '
                <script type="text/javascript">
                var ajaxstart=1;
                $(document).ready(function(){
                    var tpage = ';  echo $this->_tpl_vars['tpage'];  echo ';
                    var totPageLoad = tpage + 1;
                    function lastAddedLiveFunc()
                    {
                        if (tpage > totPageLoad) {
                            return false;
                        }
                        $(\'div#lastPostsLoader\').html(\'\');
                        $.get("';  echo $this->_tpl_vars['baseurl'];  echo '/videojson.php?page="+tpage, function(data){
                            if (data != "") {
                                $(".col-1").append(data);
                                $(\'#load_image\').css(\'display\',\'none\');
                                ajaxstart=1;
                            }else{
                                ajaxstart=2;
                            }
                            $(\'div#lastPostsLoader\').empty();
                        });
                        
                        return true;
                    };
                    $(window).scroll(function(){
                        if (document.documentElement.scrollTop)
                        { 
                            var  curloc = document.documentElement.scrollTop; 
                        }
                        else
                        { 
                            var curloc=$(window).scrollTop(); 
                        }
                        if  ((curloc+document.documentElement.clientHeight+1)>=($(document).height()-400) && ajaxstart==1 ) {
                            if (tpage <= totPageLoad) {
                                lastAddedLiveFunc();
                                $(\'#load_image\').css(\'display\',\'block\');
                                ajaxstart=0;
                                tpage = tpage+1;
                            }else {
                                $(\'#next_page\').attr(\'href\', "';  echo $this->_tpl_vars['baseurl'];  echo '/video?page="+tpage);
                                $(\'#view_more_div\').show();
                            }
                        };
                        if(curloc>$(window).height()){$(\'#backtotop\').slideDown();}else{$(\'#backtotop\').slideUp();};
                    
                    });
                });
                </script>
            '; ?>

            <?php else: ?>
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
                 
                    // if  ((wintop/(docheight-winheight)) > scrolltrigger) {
                    //  lastAddedLiveFunc();
                    //  tpage = tpage+1;
                    // };
                    if(curloc>$(window).height()){$(\'#backtotop\').slideDown();}else{$(\'#backtotop\').slideUp();};
                    });
                    });
                </script>
                '; ?>

            <div id="paging-buttons" class="paging-buttons">
                <?php if ($this->_tpl_vars['tpp'] != ""): ?>
                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/video?page=<?php echo $this->_tpl_vars['tpp']; ?>
" class="previous">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                <?php else: ?>
                <a href="#" onclick="return false;" class="previous disabled">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['tnp'] != ""): ?>
                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/video?page=<?php echo $this->_tpl_vars['tnp']; ?>
" class="older"><?php echo $this->_tpl_vars['lang167']; ?>
 &raquo;</a>
                <?php else: ?>
                <a href="#" onclick="return false;" class="older disabled"><?php echo $this->_tpl_vars['lang167']; ?>
 &raquo;</a>
                <?php endif; ?>
            </div>  
            <?php endif; ?>   
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
  
<div id="footer" class="">