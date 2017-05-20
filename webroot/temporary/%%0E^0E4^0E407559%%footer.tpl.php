<?php /* Smarty version 2.6.6, created on 2017-05-20 07:49:49
         compiled from footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'get_advertisement', 'footer.tpl', 4, false),array('modifier', 'stripslashes', 'footer.tpl', 11, false),)), $this); ?>
    <div id="main-bottom-ad-tray">
        <div>

        	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_advertisement', 'AID' => 6)), $this); ?>


        </div>
    </div>
    <div class="section-2">
        <div class="wrap">
            <ul class="info footer-items">
                <li><b>Powered by tanosine.com </b></a><br />Copyright &copy; 2014 <?php echo ((is_array($_tmp=$this->_tpl_vars['site_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</li>
              <li>·<a class="badge-language-selector" href="javascript:void(0);"><?php if ($_SESSION['language'] == 'vi'): ?>Tiếng Việt<?php elseif ($_SESSION['language'] == 'en'): ?>english<?php elseif ($_SESSION['language'] == 'fr'): ?>fran&#xE7;ais<?php elseif ($_SESSION['language'] == 'de'): ?>deutsch<?php elseif ($_SESSION['language'] == 'es'): ?>espa&ntilde;ol<?php elseif ($_SESSION['language'] == 'pt'): ?>portugu&#234;s<?php elseif ($_SESSION['language'] == 'ru'): ?>pусский<?php elseif ($_SESSION['language'] == 'tr'): ?>t&uuml;rk&ccedil;e<?php endif; ?></a></li>
            </ul>
            <ul class="info footer-items-right">
                <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/about"><?php echo $this->_tpl_vars['lang67']; ?>
</a></li>
                <li>·<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/faq"><?php echo $this->_tpl_vars['lang202']; ?>
</a></li>
                <li>·<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/terms_of_service"><?php echo $this->_tpl_vars['lang203']; ?>
</a></li>
                <li>·<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/privacy_policy"><?php echo $this->_tpl_vars['lang204']; ?>
</a></li>
                <!--<li>·<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/contact"><?php echo $this->_tpl_vars['lang205']; ?>
</a></li>-->
            </ul>

        </div>
    </div>
</div>
<div id="overlay-shadow" class="hide"></div>
<div id="overlay-container" class="hide" >
<?php if ($this->_tpl_vars['owner'] == '1'):  if ($this->_tpl_vars['viewpage'] == '1' && $this->_tpl_vars['error'] == "" && $this->_tpl_vars['new'] == '1'):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js3.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif;  endif; ?>
    <div id="b9gcs-soft-report" class="b9gcs-soft-box hide">
    	<?php if ($this->_tpl_vars['viewpage'] == '1'): ?>
        <div class="content">
            <a href="javascript:void(0);" class="close-btn"></a>
            <form id="form-b9gcs-soft-report" class="modal" action="#" onsubmit="return false" >
                <h3><?php echo $this->_tpl_vars['lang206']; ?>
</h3>
                <h4><?php echo $this->_tpl_vars['lang207']; ?>
</h4>
                <input id="report_entry_id" type="hidden" name="entryId" value="<?php echo $this->_tpl_vars['p']['PID']; ?>
"/>
                <div class="field">
                    <label for="violation"><input id="violation" type="radio" name="report-reason" value="1"/><?php echo $this->_tpl_vars['lang208']; ?>
</label>
                    <label for="solicitation"><input id="solicitation" type="radio" name="report-reason" value="2"/><?php echo $this->_tpl_vars['lang209']; ?>
</label>
                    <label for="offensive"><input id="offensive" type="radio" name="report-reason" value="3"/><?php echo $this->_tpl_vars['lang210']; ?>
</label>
                    <label for="repost"><input id="repost" type="radio" name="report-reason" value="4"/><?php echo $this->_tpl_vars['lang211']; ?>
&darr;</label>
                </div>
                <div class="field">
                	<input id="repost_link" type="text" class="text " placeholder="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
" />
                </div>
            </form>
        </div>
        <?php else: ?>
        <div class="content">
            <a href="javascript:void(0);" class="close-btn"></a>
            <form id="form-b9gcs-soft-report" class="modal" action="#" onsubmit="return false" >
                <h3><?php echo $this->_tpl_vars['lang206']; ?>
</h3>
                <h4><?php echo $this->_tpl_vars['lang207']; ?>
</h4>
                <input id="report_entry_id" type="hidden" name="entryId" value=""/>
                <div class="field">
                    <label for="violation"><input id="violation" type="radio" name="report-reason" value="1"/><?php echo $this->_tpl_vars['lang208']; ?>
</label>
                    <label for="solicitation"><input id="solicitation" type="radio" name="report-reason" value="2"/><?php echo $this->_tpl_vars['lang209']; ?>
</label>
                    <label for="offensive"><input id="offensive" type="radio" name="report-reason" value="3"/><?php echo $this->_tpl_vars['lang210']; ?>
</label>
                    <label for="repost"><input id="repost" type="radio" name="report-reason" value="4"/><?php echo $this->_tpl_vars['lang211']; ?>
&darr;</label>
                </div>
                <div class="field">
                	<input id="repost_link" type="text" class="text " placeholder="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder']; ?>
" />
                </div>
            </form>
        </div>
        <?php endif; ?>
        <div class="actions">
            <ul class="buttons">
                <li><a class="cancel" href="javascript:void(0);"><?php echo $this->_tpl_vars['lang119']; ?>
</a></li>
                <li><a class="button submit-button" href="javascript:void(0);" id="report-submit"><?php echo $this->_tpl_vars['lang212']; ?>
</a></li>
                <li class="hide"><a class="button loading" href="javascript:void(0);"></a></li>
            </ul>
        </div>
    </div>
    <div id="b9gcs-soft-share" class="b9gcs-soft-box hide">
        <div class="content">
            <a href="javascript:void(0);" class="close-btn"></a>
            <form id="form-b9gcs-soft-share" class="modal" action="">
            </form>
        </div>
    </div>
    <div id="b9gcs-soft-language" class="b9gcs-soft-box hide">
        <div class="content">
            <a href="javascript:void(0);" class="close-btn badge-language-close"></a>
            <form id="form-b9gcs-soft-language" class="modal" action="" onsubmit="return false;">
                <h3><?php echo $this->_tpl_vars['lang222']; ?>
</h3>
                <h4><?php echo $this->_tpl_vars['lang223']; ?>
</h4>
                <div class="field">
					<label for="lang-vi">
                    <input id="lang-vi" type="radio" name="language" value="vi" <?php if ($_SESSION['language'] == 'vi'): ?>class="current" checked="checked"<?php endif; ?>></input>Tiếng Việt
                    </label>
               	<label for="lang-en">
                    <input id="lang-en" type="radio" name="language" value="en" <?php if ($_SESSION['language'] == 'en'): ?>class="current" checked="checked"<?php endif; ?>></input>English
                    </label>
                    <label for="lang-de">
                    <input id="lang-de" class="" type="radio" name="language" value="de" <?php if ($_SESSION['language'] == 'de'): ?>class="current" checked="checked"<?php endif; ?>></input>Deutsch
                    </label>
                </div>
            </form>
        </div>
        <div class="actions">
            <ul class="buttons">
                <li><a id="badge-language-close" class="cancel badge-language-close" href="javascript:void(0);"><?php echo $this->_tpl_vars['lang119']; ?>
</a></li>
                <li><a id="language-submit-button" class="button submit-button" href="javascript:void(0);"><?php echo $this->_tpl_vars['lang221']; ?>
</a></li>
            </ul>
        </div>
    </div>
    <div class="keyboard-instruction hide">
        <h3><?php echo $this->_tpl_vars['lang213']; ?>
</h3>
        <div class="keyboard-img"></div>
        <ul class="key">
            <li><strong>R</strong> - <?php echo $this->_tpl_vars['lang214']; ?>
</li>
            <li><strong>C</strong> - <?php echo $this->_tpl_vars['lang215']; ?>
</li>
            <li><strong>H</strong> - <?php echo $this->_tpl_vars['lang216']; ?>
</li>
            <li><strong>J</strong> - <?php echo $this->_tpl_vars['lang217']; ?>
</li>
            <li><strong>K</strong> - <?php echo $this->_tpl_vars['lang218']; ?>
</li>
            <li><strong>L</strong> - <?php echo $this->_tpl_vars['lang219']; ?>
</li>
        </ul>
        <p><?php echo $this->_tpl_vars['lang220']; ?>
</p>
    </div>
</div>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

<?php if ($_SESSION['language'] == 'ar'):  echo '
<script type="text/javascript">
  window.___gcfg = {lang: \'ar\'};

  (function() {
    var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true;
    po.src = \'https://apis.google.com/js/plusone.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
'; ?>

<?php else:  echo '
<script type="text/javascript">
  (function() {
    var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true;
    po.src = \'https://apis.google.com/js/plusone.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
'; ?>

<?php endif; ?>


<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/fbshare.js" type="text/javascript"></script>
<?php echo '
<script type="text/javascript">
function sendlang(lang){
jQuery.ajax({
type:\'POST\',
url:\' ';  echo $this->_tpl_vars['baseurl'];  echo '\'+ \'/changelang.php\',
data:\'language=\'+lang,
success:function(e){
$(\'#overlay-shadow\').addClass(\'hide\');
$(\'#overlay-container\').addClass(\'hide\');
$(\'#b9gcs-soft-language\').addClass(\'hide\');
location.reload();
}
});
}
$(\'.badge-language-selector\').click(function(){
$("#overlay-shadow").removeClass("hide");
$("#overlay-container").removeClass("hide");
$("#b9gcs-soft-language").removeClass("hide");
$("#language-submit-button").click(function(){
sendlang($(\'input[name=language]:checked\').val());
});
$("#badge-language-close").click(function(){
$(\'#overlay-shadow\').addClass(\'hide\');
$(\'#overlay-container\').addClass(\'hide\');
$(\'#b9gcs-soft-language\').addClass(\'hide\');
});
});
</script>
'; ?>

<?php if ($this->_tpl_vars['viewpage'] == '1'):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js4.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  else:  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js5.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>

<?php echo '
<!-- Pinterest Pin Button -->
<!-- Include ONCE for ALL buttons in the page -->
<script type="text/javascript">
(function() {
    window.PinIt = window.PinIt || { loaded:false };
    if (window.PinIt.loaded) return;
    window.PinIt.loaded = true;
    function async_load(){
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        if (window.location.protocol == "https:")
            s.src = "https://assets.pinterest.com/js/pinit.js";
        else
            s.src = "http://assets.pinterest.com/js/pinit.js";
        var x = document.getElementsByTagName("script")[0];
        x.parentNode.insertBefore(s, x);
    }
    if (window.attachEvent)
        window.attachEvent("onload", async_load);
    else
        window.addEventListener("load", async_load, false);
})();
</script>
'; ?>



<?php if ($this->_tpl_vars['ganalytics'] != ""):  echo '
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push([\'_setAccount\', \'';  echo $this->_tpl_vars['ganalytics'];  echo '\']);
  _gaq.push([\'_trackPageview\']);

  (function() {
    var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
    ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
'; ?>

<?php endif;  if ($_SESSION['USERID'] != ""): ?>

<?php else: ?>
<div id="loginIsRequired" class="modalDialog" title="Bạn có biết là...">
	<span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>
	<p style="margin-left: 25px">tanosine.com vui lòng Đăng Nhập.<br/><br/>
	<span style="color: #6F6F6F">Tài khoản của bạn sẽ được tạo ở lần đăng nhập đầu tiên mà không cần đăng ký :)</span></p>
</div></div>

 <?php endif; ?>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow5.js"></script>
<noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>
</body>
</html>