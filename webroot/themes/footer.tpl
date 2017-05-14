    <div id="main-bottom-ad-tray">
        <div>

        	{insert name=get_advertisement AID=6}

        </div>
    </div>
    <div class="section-2">
        <div class="wrap">
            <ul class="info footer-items">
                <li><b>Powered by tanosine.com </b></a><br />Copyright &copy; 2014 {$site_name|stripslashes}</li>
              <li>·<a class="badge-language-selector" href="javascript:void(0);">{if $smarty.session.language eq "vi"}Tiếng Việt{elseif $smarty.session.language eq "en"}english{elseif $smarty.session.language eq "fr"}fran&#xE7;ais{elseif $smarty.session.language eq "de"}deutsch{elseif $smarty.session.language eq "es"}espa&ntilde;ol{elseif $smarty.session.language eq "pt"}portugu&#234;s{elseif $smarty.session.language eq "ru"}pусский{elseif $smarty.session.language eq "tr"}t&uuml;rk&ccedil;e{/if}</a></li>
            </ul>
            <ul class="info footer-items-right">
                <li><a href="{$baseurl}/about">{$lang67}</a></li>
                <li>·<a href="{$baseurl}/faq">{$lang202}</a></li>
                <li>·<a href="{$baseurl}/terms_of_service">{$lang203}</a></li>
                <li>·<a href="{$baseurl}/privacy_policy">{$lang204}</a></li>
                <!--<li>·<a href="{$baseurl}/contact">{$lang205}</a></li>-->
            </ul>

        </div>
    </div>
</div>
<div id="overlay-shadow" class="hide"></div>
<div id="overlay-container" class="hide" >
{if $owner eq "1"}
{if $viewpage eq "1" AND $error eq "" AND $new eq "1"}
{include file='js3.tpl'}
{/if}
{/if}
    <div id="b9gcs-soft-report" class="b9gcs-soft-box hide">
    	{if $viewpage eq "1"}
        <div class="content">
            <a href="javascript:void(0);" class="close-btn"></a>
            <form id="form-b9gcs-soft-report" class="modal" action="#" onsubmit="return false" >
                <h3>{$lang206}</h3>
                <h4>{$lang207}</h4>
                <input id="report_entry_id" type="hidden" name="entryId" value="{$p.PID}"/>
                <div class="field">
                    <label for="violation"><input id="violation" type="radio" name="report-reason" value="1"/>{$lang208}</label>
                    <label for="solicitation"><input id="solicitation" type="radio" name="report-reason" value="2"/>{$lang209}</label>
                    <label for="offensive"><input id="offensive" type="radio" name="report-reason" value="3"/>{$lang210}</label>
                    <label for="repost"><input id="repost" type="radio" name="report-reason" value="4"/>{$lang211}&darr;</label>
                </div>
                <div class="field">
                	<input id="repost_link" type="text" class="text " placeholder="{$baseurl}{$postfolder}{$p.PID}" />
                </div>
            </form>
        </div>
        {else}
        <div class="content">
            <a href="javascript:void(0);" class="close-btn"></a>
            <form id="form-b9gcs-soft-report" class="modal" action="#" onsubmit="return false" >
                <h3>{$lang206}</h3>
                <h4>{$lang207}</h4>
                <input id="report_entry_id" type="hidden" name="entryId" value=""/>
                <div class="field">
                    <label for="violation"><input id="violation" type="radio" name="report-reason" value="1"/>{$lang208}</label>
                    <label for="solicitation"><input id="solicitation" type="radio" name="report-reason" value="2"/>{$lang209}</label>
                    <label for="offensive"><input id="offensive" type="radio" name="report-reason" value="3"/>{$lang210}</label>
                    <label for="repost"><input id="repost" type="radio" name="report-reason" value="4"/>{$lang211}&darr;</label>
                </div>
                <div class="field">
                	<input id="repost_link" type="text" class="text " placeholder="{$baseurl}{$postfolder}" />
                </div>
            </form>
        </div>
        {/if}
        <div class="actions">
            <ul class="buttons">
                <li><a class="cancel" href="javascript:void(0);">{$lang119}</a></li>
                <li><a class="button submit-button" href="javascript:void(0);" id="report-submit">{$lang212}</a></li>
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
                <h3>{$lang222}</h3>
                <h4>{$lang223}</h4>
                <div class="field">
					<label for="lang-vi">
                    <input id="lang-vi" type="radio" name="language" value="vi" {if $smarty.session.language eq "vi"}class="current" checked="checked"{/if}></input>Tiếng Việt
                    </label>
               	<label for="lang-en">
                    <input id="lang-en" type="radio" name="language" value="en" {if $smarty.session.language eq "en"}class="current" checked="checked"{/if}></input>English
                    </label>
                    <label for="lang-de">
                    <input id="lang-de" class="" type="radio" name="language" value="de" {if $smarty.session.language eq "de"}class="current" checked="checked"{/if}></input>Deutsch
                    </label>
                </div>
            </form>
        </div>
        <div class="actions">
            <ul class="buttons">
                <li><a id="badge-language-close" class="cancel badge-language-close" href="javascript:void(0);">{$lang119}</a></li>
                <li><a id="language-submit-button" class="button submit-button" href="javascript:void(0);">{$lang221}</a></li>
            </ul>
        </div>
    </div>
    <div class="keyboard-instruction hide">
        <h3>{$lang213}</h3>
        <div class="keyboard-img"></div>
        <ul class="key">
            <li><strong>R</strong> - {$lang214}</li>
            <li><strong>C</strong> - {$lang215}</li>
            <li><strong>H</strong> - {$lang216}</li>
            <li><strong>J</strong> - {$lang217}</li>
            <li><strong>K</strong> - {$lang218}</li>
            <li><strong>L</strong> - {$lang219}</li>
        </ul>
        <p>{$lang220}</p>
    </div>
</div>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

{if $smarty.session.language eq "ar"}
{literal}
<script type="text/javascript">
  window.___gcfg = {lang: 'ar'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
{/literal}
{else}
{literal}
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
{/literal}
{/if}


<script src="{$baseurl}/js/fbshare.js" type="text/javascript"></script>
{literal}
<script type="text/javascript">
function sendlang(lang){
jQuery.ajax({
type:'POST',
url:' {/literal}{$baseurl}{literal}'+ '/changelang.php',
data:'language='+lang,
success:function(e){
$('#overlay-shadow').addClass('hide');
$('#overlay-container').addClass('hide');
$('#b9gcs-soft-language').addClass('hide');
location.reload();
}
});
}
$('.badge-language-selector').click(function(){
$("#overlay-shadow").removeClass("hide");
$("#overlay-container").removeClass("hide");
$("#b9gcs-soft-language").removeClass("hide");
$("#language-submit-button").click(function(){
sendlang($('input[name=language]:checked').val());
});
$("#badge-language-close").click(function(){
$('#overlay-shadow').addClass('hide');
$('#overlay-container').addClass('hide');
$('#b9gcs-soft-language').addClass('hide');
});
});
</script>
{/literal}
{if $viewpage eq "1"}
{include file='js4.tpl'}
{else}
{include file='js5.tpl'}
{/if}

{literal}
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
{/literal}


{if $ganalytics ne ""}
{literal}
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '{/literal}{$ganalytics}{literal}']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
{/literal}
{/if}
{if $smarty.session.USERID ne ""}

{else}
<div id="loginIsRequired" class="modalDialog" title="Bạn có biết là...">
	<span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>
	<p style="margin-left: 25px">tanosine.com vui lòng Đăng Nhập.<br/><br/>
	<span style="color: #6F6F6F">Tài khoản của bạn sẽ được tạo ở lần đăng nhập đầu tiên mà không cần đăng ký :)</span></p>
</div></div>

 {/if}
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow5.js"></script>
<noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>
</body>
</html>
