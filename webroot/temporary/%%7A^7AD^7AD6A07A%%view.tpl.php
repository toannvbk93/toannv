<?php /* Smarty version 2.6.6, created on 2017-05-14 10:13:28
         compiled from view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'view.tpl', 76, false),array('modifier', 'stripslashes', 'view.tpl', 77, false),array('modifier', 'makeseo', 'view.tpl', 80, false),array('modifier', 'truncate', 'view.tpl', 241, false),array('insert', 'get_fav_status', 'view.tpl', 104, false),array('insert', 'get_unfav_status', 'view.tpl', 113, false),array('insert', 'get_short_url', 'view.tpl', 148, false),array('insert', 'return_youtube', 'view.tpl', 179, false),array('insert', 'return_fod', 'view.tpl', 184, false),array('insert', 'return_vfy', 'view.tpl', 188, false),array('insert', 'return_vmo', 'view.tpl', 192, false),array('insert', 'get_advertisement', 'view.tpl', 208, false),array('function', 'math', 'view.tpl', 234, false),)), $this); ?>
<?php if ($this->_tpl_vars['p']['nsfw'] == '1' && $_SESSION['FILTER'] == '1'): ?>
    <div>
        <div class="post-next-prev">
            <?php if ($this->_tpl_vars['prev'] != ""): ?>
            <a id="prev_post" class="prev-post" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['prev']; ?>
/" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);"></a>
            <?php else: ?>
            <a id="prev_post" class="prev-post" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);"></a>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['next'] != ""): ?>
            <a id="next_post" class="next-post" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['next']; ?>
/" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);"></a>
            <?php else: ?>
            <a id="next_post" class="next-post" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);"></a>
            <?php endif; ?>
        </div>
    </div>
    <div id="main" class="middle">
        <div id="content-holder">
            <div id="content" class="nsfw">
                <div class="content">
                    <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/safe?m=<?php echo $this->_tpl_vars['eurl']; ?>
"><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw.jpg" alt="NSFW" /></a>
                </div>
                <div class="info">
                    <h1><?php echo $this->_tpl_vars['lang154']; ?>
</h1>
                    <p><?php echo $this->_tpl_vars['lang155']; ?>
</p>
                    <div class="message-box alt">
                        <div class="inline-message">
                            <p><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/safe?m=<?php echo $this->_tpl_vars['eurl']; ?>
"><?php echo $this->_tpl_vars['lang156']; ?>
 &raquo;</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="middle">
<?php elseif ($this->_tpl_vars['p']['nsfw'] == '1' && $_SESSION['USERID'] == ""): ?>
    <div>
        <div class="post-next-prev">
            <?php if ($this->_tpl_vars['prev'] != ""): ?>
            <a id="prev_post" class="prev-post" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['prev']; ?>
/" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);"></a>
            <?php else: ?>
            <a id="prev_post" class="prev-post" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);"></a>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['next'] != ""): ?>
            <a id="next_post" class="next-post" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['next']; ?>
/" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);"></a>
            <?php else: ?>
            <a id="next_post" class="next-post" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);"></a>
            <?php endif; ?>
        </div>
    </div>
    <div id="main" class="middle">
        <div id="content-holder">
            <div id="content" class="nsfw">
                <div class="content">
                    <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/safe?m=<?php echo $this->_tpl_vars['eurl']; ?>
"><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw.jpg" alt="NSFW" /></a>
                </div>
                <div class="info">
                    <h1><?php echo $this->_tpl_vars['lang154']; ?>
</h1>
                    <p><?php echo $this->_tpl_vars['lang155']; ?>
</p>
                    <div class="message-box alt">
                        <div class="inline-message">
                            <p><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/safe?m=<?php echo $this->_tpl_vars['eurl']; ?>
"><?php echo $this->_tpl_vars['lang156']; ?>
 &raquo;</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="middle">
<?php else: ?>
    <div id="main">
        <div id="content-holder">
            <div class="post-info-pad">
                <div class="author">
                <p>Đăng <?php echo ((is_array($_tmp=$this->_tpl_vars['p']['time_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['p']['time_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%I:%M %p") : smarty_modifier_date_format($_tmp, "%I:%M %p")); ?>
 bởi</p>
                <p><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$this->_tpl_vars['p']['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"> <?php echo ((is_array($_tmp=$this->_tpl_vars['p']['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></p>
                <?php if ($this->_tpl_vars['cname'] != "" && $this->_tpl_vars['channels'] == '1'): ?>
                    <p>
                    <?php echo $this->_tpl_vars['lang269']; ?>
 : <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/<?php echo ((is_array($_tmp=$this->_tpl_vars['cname'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
/"><?php echo $this->_tpl_vars['cname']; ?>
</a>
                    </p>
                    <?php endif; ?></div>
                <h1><?php echo ((is_array($_tmp=$this->_tpl_vars['p']['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</h1>


                <p class="stat">

                    <span class="comment">Lượt bình luận: <strong><fb:comments-count href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
"></fb:comments-count></strong></span>

                    <span score="0" votes="<?php echo $this->_tpl_vars['p']['view']; ?>
" class="view" id="view_count">Lượt xem: <strong><?php echo $this->_tpl_vars['p']['view']; ?>
</strong></span>

                    <?php if ($this->_tpl_vars['owner'] == '1'): ?>
                    <span class="seperator">|</span>
                    <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/deletepost.php?pid=<?php echo $this->_tpl_vars['p']['PID']; ?>
" class="delete" onclick="return confirm('<?php echo $this->_tpl_vars['lang147']; ?>
');"><?php echo $this->_tpl_vars['lang145']; ?>
</a>
                    <?php endif; ?>
                </p>
            </div>

            <div id="post-control-bar" class="spread-bar-wrap">
                <div class="vote-bar">
                    <ul class="actions">
                    <?php if ($this->_tpl_vars['phase'] == '0'): ?>
                        <?php if ($_SESSION['USERID'] != ""): ?>
                            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_fav_status', 'value' => 'var', 'assign' => 'isfav', 'PID' => $this->_tpl_vars['p']['PID'])), $this); ?>

                            <?php if ($this->_tpl_vars['isfav'] == '1'): ?>
                            <li class="bored-li">
                                <a id="vote-down-btn-<?php echo $this->_tpl_vars['p']['PID']; ?>
" class="unlove badge-vote-down "  entryId="<?php echo $this->_tpl_vars['p']['PID']; ?>
" href="javascript:void(0);"><span>Chán</span></a>
                            </li>
                            <li class="love-li">
                                <a class="vote love loved" id="post_love_<?php echo $this->_tpl_vars['p']['PID']; ?>
" rel="<?php echo $this->_tpl_vars['p']['PID']; ?>
" href="javascript:void(0);"><span>Duyệt</span></a>
                            </li>
                            <?php else: ?>
                                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_unfav_status', 'value' => 'var', 'assign' => 'isunfav', 'PID' => $this->_tpl_vars['p']['PID'])), $this); ?>

                                <?php if ($this->_tpl_vars['isunfav'] == '1'): ?>
                                <li class="bored-li">
                                    <a id="vote-down-btn-<?php echo $this->_tpl_vars['p']['PID']; ?>
" class="unlove badge-vote-down unloved "  entryId="<?php echo $this->_tpl_vars['p']['PID']; ?>
" href="javascript:void(0);"><span>Chán</span></a>
                                </li>
                                <li class="love-li">
                                    <a class="vote love " id="post_love_<?php echo $this->_tpl_vars['p']['PID']; ?>
" rel="<?php echo $this->_tpl_vars['p']['PID']; ?>
" href="javascript:void(0);"><span>Duyệt</span></a>
                                </li>
                                <?php else: ?>
                                <li class="bored-li">
                                    <a id="vote-down-btn-<?php echo $this->_tpl_vars['p']['PID']; ?>
" class="unlove badge-vote-down "  entryId="<?php echo $this->_tpl_vars['p']['PID']; ?>
" href="javascript:void(0);"><span>Chán</span></a>
                                </li>
                                <li class="love-li">
                                    <a class="vote love " id="post_love_<?php echo $this->_tpl_vars['p']['PID']; ?>
" rel="<?php echo $this->_tpl_vars['p']['PID']; ?>
" href="javascript:void(0);"><span>Duyệt</span></a>
                                </li>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php else: ?>
                        <li class="bored-li">
                            <a id="vote-down-btn-<?php echo $this->_tpl_vars['p']['PID']; ?>
" class="unlove badge-vote-down " entryId="<?php echo $this->_tpl_vars['p']['PID']; ?>
" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/login"><span>Chán</span></a>
                        </li>
                        <li class="love-li">
                            <a class="vote love " id="post_love_<?php echo $this->_tpl_vars['p']['PID']; ?>
" rel="<?php echo $this->_tpl_vars['p']['PID']; ?>
" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/login"><span>Duyệt</span></a>
                        </li>
                        <?php endif; ?>
                    <?php endif; ?>
                    </ul>
                </div>
                  <div class="spread-bar"><div class="text hidden">
                   Thích ảnh này?
                </div>
                   <div class="facebook-btn"><fb:like href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like> </div>
                      <div class="facebook-btn"> <fb:share-button href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
" layout="button_count"></fb:share-button> </div>


                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_short_url', 'value' => 'a', 'assign' => 'tto', 'PID' => $this->_tpl_vars['p']['PID'], 'short' => $this->_tpl_vars['p']['short'])), $this); ?>

                    <?php if ($this->_tpl_vars['short_urls'] == '1'): ?>
                    <div class="google-btn"><g:plusone size="medium" href="<?php echo $this->_tpl_vars['tto']; ?>
"></g:plusone> </div>
                    <?php else: ?>
                    <div class="google-btn"><g:plusone size="medium" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
"></g:plusone> </div>
                    <?php endif; ?>


                </div>
                <div class="post-next-prev">
                    <?php if ($this->_tpl_vars['prev'] != ""): ?>
                    <a id="prev_post" class="prev-post" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['prev']; ?>
/" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);"></a>
                    <?php else: ?>
                    <a id="prev_post" class="prev-post" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);"></a>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['next'] != ""): ?>
                    <a id="next_post" class="next-post" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['next']; ?>
/" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);"></a>
                    <?php else: ?>
                    <a id="next_post" class="next-post" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);"></a>
                    <?php endif; ?>
                </div>
            </div>
            <div id="content">
                <div class="post-container">
                    <div class="img-wrap">
                        <?php if ($this->_tpl_vars['p']['pic'] != ""): ?>
                        <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/random"><img src="<?php echo $this->_tpl_vars['purl']; ?>
/<?php echo $this->_tpl_vars['p']['path']; ?>
/t/l-<?php echo $this->_tpl_vars['p']['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['p']['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"/></a>

                        <?php else: ?>
                             <center><?php if ($this->_tpl_vars['p']['youtube_key'] != ""): ?>

                            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_youtube', 'value' => 'a', 'assign' => 'youtube', 'youtube' => $this->_tpl_vars['p']['youtube_key'])), $this);  echo $this->_tpl_vars['youtube']; ?>
 </center>


                            <?php elseif ($this->_tpl_vars['p']['fod_key'] != ""): ?>
                            <center>
                            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_fod', 'value' => 'a', 'assign' => 'fod', 'fod' => $this->_tpl_vars['p']['fod_key'])), $this);  echo $this->_tpl_vars['fod']; ?>

                            </center>
                            <?php elseif ($this->_tpl_vars['p']['vfy_key'] != ""): ?>
                            <center>
                            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vfy', 'value' => 'a', 'assign' => 'vfy', 'vfy' => $this->_tpl_vars['p']['vfy_key'])), $this);  echo $this->_tpl_vars['vfy']; ?>

                            </center>
                            <?php elseif ($this->_tpl_vars['p']['vmo_key'] != ""): ?>
                            <center>
                            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vmo', 'value' => 'a', 'assign' => 'vmo', 'vmo' => $this->_tpl_vars['p']['vmo_key'])), $this);  echo $this->_tpl_vars['vmo']; ?>

                            </center>
                            <?php else: ?>
                            <center>
                            <?php echo $this->_tpl_vars['lang143']; ?>

                            </center>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if ($this->_tpl_vars['displaywm'] == '0' && $this->_tpl_vars['p']['pic'] != "" && $this->_tpl_vars['p']['gif'] != '1'): ?>
                <div class="watermark-clear"></div>
                <?php endif; ?>
                  <div style="padding:0 10px 0 10px;margin:5px">
                       <?php echo ((is_array($_tmp=$this->_tpl_vars['p']['blog'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>

                        </div>
                   <div style="margin-bottom:5px;" align="center">  <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_advertisement', 'AID' => 6)), $this); ?>
</div>
                <div class="featuredFanPage">
                <span><a href="http://www.facebook.com/<?php echo $this->_tpl_vars['FACEBOOK_PROFILE']; ?>
" style="font-size: 13px;padding-top:5px;padding-right:5px;float:left;color:#3B5998;">Like codehaivl2015.com để cười nhiều hơn</a></span>

                <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffacebook.com%2F<?php echo $this->_tpl_vars['FACEBOOK_PROFILE']; ?>
&amp;width=460&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:460px; height:30px;" allowTransparency="true"></iframe>
                <div class="clear"></div></div>
                <div class="comment-section" <?php if ($this->_tpl_vars['displaywm'] == '0' && $this->_tpl_vars['p']['pic'] != "" && $this->_tpl_vars['p']['gif'] != '1'): ?>style=""<?php endif; ?>>

           <h3 class="title" id="comments"><?php echo $this->_tpl_vars['lang143']; ?>
</h3>
                    <span class="report-and-source">
                    <p>
                        <?php if ($this->_tpl_vars['fixenabled'] == '1'): ?><a class="fix" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/fix/<?php echo $this->_tpl_vars['p']['PID']; ?>
"><?php echo $this->_tpl_vars['lang142']; ?>
</a><?php endif; ?>
                        <?php if ($this->_tpl_vars['owner'] != '1'): ?><span id="report-item-separator">|</span><a id="report-item-link" class="report report-item" entryId="<?php echo $this->_tpl_vars['p']['PID']; ?>
" href="javascript:void(0);"><?php echo $this->_tpl_vars['lang146']; ?>
</a><?php endif; ?>
                        <span id="report-item-separator">|</span><?php if ($this->_tpl_vars['p']['source'] == ""):  echo $this->_tpl_vars['lang141'];  else:  echo ((is_array($_tmp=$this->_tpl_vars['p']['source'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp));  endif; ?>
                    </p>
                    </span>
                <div>
                        <fb:comments href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
" num_posts="10" width="700"></fb:comments>
                    </div>
                    <div id="fb-root"></div>
                </div>
                <br/>
            <?php if ($this->_tpl_vars['recommended'] == '1'): ?>
                <div class="post-may-like">
                    <div id="entries-content" class="grid">
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
                        <ul id="grid-col-<?php if ($this->_sections['i']['iteration'] > 3): ?>2<?php else: ?>1<?php endif; ?>" class="col-<?php if ($this->_sections['i']['iteration'] > 3):  echo smarty_function_math(array('equation' => "x - 3",'x' => $this->_sections['i']['iteration']), $this); else:  echo $this->_sections['i']['iteration'];  endif; ?>">
                            <li class=" ">
                                <a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['r'][$this->_sections['i']['index']]['PID']; ?>
" class="jump_stop">
                                    <div style="" class="thimage">
                                        <?php if ($this->_tpl_vars['r'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw_thumb.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['r'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><?php else: ?><img src="<?php echo $this->_tpl_vars['purl']; ?>
/<?php echo $this->_tpl_vars['r'][$this->_sections['i']['index']]['path']; ?>
/t/s-<?php echo $this->_tpl_vars['r'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['r'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><?php endif; ?>
                                    </div>
                                </a>
                                <h1><?php if ($this->_tpl_vars['truncate'] == '1'):  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['r'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true));  else:  echo ((is_array($_tmp=$this->_tpl_vars['r'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp));  endif; ?></h1>
                                <h4><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$this->_tpl_vars['r'][$this->_sections['i']['index']]['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['r'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</a></h4>
                            </li>
                        </ul>
                        <?php endfor; endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </div>


<div class="side-bar">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'right2.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div>
        <a class="share-btn" href="http://codehaivl2015.com/submit" class="buttons spaceBottom">Click để bắt đầu chia sẻ những bức ảnh vui!</a>
        <div class="clear">
        </div>
    </div>
    <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
    <div class="ad-box">
    <a href="http://codehaivl2015.com/event" title="Chế ảnh liền tay, nhận ngay thẻ cào"><img src="http://2.bp.blogspot.com/-yEubUsIdss8/VGSE9Oe978I/AAAAAAAAArg/k8n2DTppIjk/s1600/banner.png" width="300" alt="Chế ảnh liền tay, nhận ngay thẻ cào"></a>

            <div class="clearfix"></div>
            </div>
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
            <a class="wrap" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['vr'][$this->_sections['i']['index']]['PID']; ?>
"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                <li>
                    <?php if ($this->_tpl_vars['vr'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?>
                        <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw_thumb.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['vr'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['vr'][$this->_sections['i']['index']]['pic'] != ""): ?>
                            <img src="<?php echo $this->_tpl_vars['purl']; ?>
/<?php echo $this->_tpl_vars['vr'][$this->_sections['i']['index']]['path']; ?>
/t/s-<?php echo $this->_tpl_vars['vr'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['vr'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
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
                    <h4><?php if ($this->_tpl_vars['truncate'] == '1'):  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['vr'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true));  else:  echo ((is_array($_tmp=$this->_tpl_vars['vr'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp));  endif; ?></h4>
                    <h4><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$this->_tpl_vars['vr'][$this->_sections['i']['index']]['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['vr'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</a></h4>
                    <p class="meta"><span class="comment"><fb:comments-count href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['vr'][$this->_sections['i']['index']]['PID']; ?>
"></fb:comments-count></span><span class="viewed"><?php echo $this->_tpl_vars['vr'][$this->_sections['i']['index']]['view']; ?>
</span>
                    </p>
                </li>
            </a>
            <?php endfor; endif; ?>
            </ol>
        </div>
    </div>
</div>
<!--div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
    <div class="popular-block">
    <h3>Bài HOT</h3>
    <ol>
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['lq']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <a class="wrap" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['lq'][$this->_sections['i']['index']]['PID']; ?>
"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
        <li>
            <?php if ($this->_tpl_vars['lq'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw_thumb.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['lq'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><?php else: ?><img src="<?php echo $this->_tpl_vars['purl']; ?>
/<?php echo $this->_tpl_vars['lq'][$this->_sections['i']['index']]['path']; ?>
/t/s-<?php echo $this->_tpl_vars['lq'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['lq'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><?php endif; ?>
            <h4><?php if ($this->_tpl_vars['truncate'] == '1'):  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lq'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true));  else:  echo ((is_array($_tmp=$this->_tpl_vars['lq'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp));  endif; ?></h4>
            <h4><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$this->_tpl_vars['lq'][$this->_sections['i']['index']]['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lq'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</a></h4>
            <p class="meta"><span class="comment"><fb:comments-count href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['lq'][$this->_sections['i']['index']]['PID']; ?>
"></fb:comments-count></span><span class="loved"><?php echo $this->_tpl_vars['lq'][$this->_sections['i']['index']]['favclicks']; ?>
</span>
            </p>
        </li>
    </a>
    <?php endfor; endif; ?>
    </ol>
    </div>
</div-->

<!--div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
    <div class="popular-block">
    <h3>Bài mới</h3>
    <ol>
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['vnew']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <a class="wrap" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['vnew'][$this->_sections['i']['index']]['PID']; ?>
"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
        <li>
            <?php if ($this->_tpl_vars['vnew'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw_thumb.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['vnew'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><?php else: ?><img src="<?php echo $this->_tpl_vars['purl']; ?>
/<?php echo $this->_tpl_vars['vnew'][$this->_sections['i']['index']]['path']; ?>
/t/s-<?php echo $this->_tpl_vars['vnew'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['vnew'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><?php endif; ?>
            <h4><?php if ($this->_tpl_vars['truncate'] == '1'):  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['vnew'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true));  else:  echo ((is_array($_tmp=$this->_tpl_vars['vnew'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp));  endif; ?></h4>
            <h4><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$this->_tpl_vars['vnew'][$this->_sections['i']['index']]['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['vnew'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</a></h4>
            <p class="meta"><span class="comment"><fb:comments-count href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['vnew'][$this->_sections['i']['index']]['PID']; ?>
"></fb:comments-count></span><span class="loved"><?php echo $this->_tpl_vars['vnew'][$this->_sections['i']['index']]['favclicks']; ?>
</span>
            </p>
        </li>
    </a>
    <?php endfor; endif; ?>
    </ol>
    </div>
</div-->
<div id="moving-boxes">
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_advertisement', 'AID' => 4)), $this); ?>

            </div>
<div>
    <div class="fb-like-box" data-href="http://www.facebook.com/<?php echo $this->_tpl_vars['FACEBOOK_PROFILE']; ?>
" data-width="300" data-height="400" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
    <div class="clearfix"></div>
        </div>

<div>




</div>

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
    <script type="text/javascript">
    var adloca2=$(\'#post-control-bar\').offset().top;
     $(window).scroll(function () {
        var curloca2=$(window).scrollTop()+41;
        if(curloca2>adloca2){
            $(\'#post-control-bar\').css(\'position\',\'fixed\');
            $(\'#post-control-bar\').css(\'top\',\'41px\');
            $(\'#post-control-bar\').css(\'z-index\',\'10\');
        };
        if(curloca2 <= adloca2){
            $(\'#post-control-bar\').css(\'position\',\'absolute\');
            $(\'#post-control-bar\').css(\'top\',\'auto\');
            $(\'#post-control-bar\').css(\'z-index\',\'!important\');
        };
        });
    </script>
    <script type="text/javascript">
    $(\'#post_view_love\').click(function(){
        if( $(\'#post_view_love\').hasClass(\'current\')){
            $(\'#post_view_love\').removeClass(\'current\');
        likedeg(';  echo $this->_tpl_vars['p']['PID'];  echo ',-1,0);
        }else{
            likedeg(';  echo $this->_tpl_vars['p']['PID'];  echo ',1,0);
        $(\'#post_view_love\').addClass(\'current\');
        }
        });
    function likedeg(p,l,u){
        jQuery.ajax({
            type:\'POST\',
            url:\'';  echo $this->_tpl_vars['baseurl'];  echo '\'+ \'/likedeg.php\',
            data:\'l=\'+l+\'&pid=';  echo $this->_tpl_vars['p']['PID'];  echo '&u=\'+u,
            success:function(e){
                $(\'#love_count\').html(e);}
            });
        }
    </script>
    <script type="text/javascript">
         var barloc=$(\'#post-control-bar\').offset().top;
         $(window).scroll(function () {
              var curloc=$(window).scrollTop();
              if(curloc>barloc){
        $(\'#post-control-bar\').addClass(\'topbarfixed\');
              }else{
                $(\'#post-control-bar\').removeClass(\'topbarfixed\');
                 }
         });
    </script>
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
<div id="footer" class="">

<?php endif; ?>