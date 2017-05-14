{if $topgags GT 0}
<div class="feature-bar">
<ul>
{section name=f loop=$topgags}
        <a href="{$baseurl}{$postfolder}{$topgags[f].PID}/{if $SEO eq "1"}{$topgags[f].story|makeseo}.html{/if}">
        <img src="{$purl}/{$topgags[f].path}/t/s-{$topgags[f].pic}" alt="{$topgags[f].story|stripslashes}">
        <span class="title">{$topgags[f].story}</span>
        </a>
{/section}
</ul>
</div>
{/if}
<div id="main">

 <div style="margin-bottom:5px;" align="center">	{insert name=get_advertisement AID=8}</div>
    <div id="content-holder">        
        <div class="main-filter ">
           <h1 style="margin-left:15px;margin-top: 10px;">Ảnh đang HOT</h1>
			{if $thumbs eq "1"}
			<a id="changeview" class="view_thumbs" href="{$baseurl}/hot?view=thumbs" title="Toggle Views">{$lang258}</a>
			{/if}
            {if $safemode eq "1"}
			{if $smarty.session.USERID ne ""}
                {if $smarty.session.FILTER eq "1"}
                <a class="safe-mode-switcher on" href="{$baseurl}/safe?m={$eurl}">&nbsp;</a>
                {else}
                <a class="safe-mode-switcher off" href="{$baseurl}/safe?m={$eurl}&o=1">&nbsp;</a>
                {/if}
            {else}
            	<a class="safe-mode-switcher on" href="{$baseurl}/login">&nbsp;</a>
            {/if}
			{/if}
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
                    {section name=i loop=$posts}
                    {include file="posts_bit.tpl"}
                    {/section}                    
                </ul>
                	<div class="view-more" id="view_more_div">
					<a class="next-page" id="next_page" href="#" style="display: inline;color:white;">xem thêm, còn nhiều lắm</a>
				</div>
            </div>
 <div class="plzVoteBottom"><br><span style="color:red">Giúp</span>  codehaivl2015.com <a href="{$baseurl}/vote">bình chọn ảnh</a> để nhiều ảnh hay xuất hiện ở trang chủ hơn nhé</div>
            <div id="lastPostsLoader"></div>                
			{if $AUTOSCROLL eq "1"}
			<div id="load_image" style="background:url(images/load.gif) center no-repeat; width:%100; height:50px;"> </div>
 			{literal}
                <script type="text/javascript">
				var ajaxstart=1;
				$(document).ready(function(){
					var tpage = {/literal}{$tpage}{literal};
					var totPageLoad = tpage + 1;
					function lastAddedLiveFunc()
					{
						if (tpage > totPageLoad) {
							return false;
						}
						$('div#lastPostsLoader').html('');
						$.get("{/literal}{$baseurl}{literal}/hotjson.php?page="+tpage, function(data){
							if (data != "") {
								$(".col-1").append(data);
								$('#load_image').css('display','none');
								ajaxstart=1;
							}else{
								ajaxstart=2;
							}
							$('div#lastPostsLoader').empty();
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
								$('#load_image').css('display','block');
								ajaxstart=0;
								tpage = tpage+1;
							}else {
								$('#next_page').attr('href', "{/literal}{$baseurl}{literal}/hot?page="+tpage);
								$('#view_more_div').show();
							}
						};
						if(curloc>$(window).height()){$('#backtotop').slideDown();}else{$('#backtotop').slideUp();};
					
					});
				});
				</script>
			{/literal}
			{else}
 			{literal}
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
					if(curloc>$(window).height()){$('#backtotop').slideDown();}else{$('#backtotop').slideUp();};
					});
					});
				</script>
			{/literal}
            <div id="paging-buttons" class="paging-buttons">
            	{if $tpp ne ""}
                <a href="{$baseurl}/hot?page={$tpp}" class="previous">&laquo; {$lang166}</a>
                {else}
                <a href="#" onclick="return false;" class="previous disabled">&laquo; {$lang166}</a>
                {/if}
                {if $tnp ne ""}
                <a href="{$baseurl}/hot?page={$tnp}" class="older">{$lang167} &raquo;</a>
                {else}
                <a href="#" onclick="return false;" class="older disabled">{$lang167} &raquo;</a>
                {/if}
            </div>		
			{/if}	
        </div>
    </div>
</div>
{include file='vote_js.tpl'}
{include file='right.tpl'}
{literal}
<script type="text/javascript">
var adloca=$('#moving-boxes').offset().top; 
 $(window).scroll(function () { 
    var curloca=$(window).scrollTop();
    if(curloca>adloca){
        $('#moving-boxes').css('position','fixed');
        $('#moving-boxes').css('top','55px');
        $('#moving-boxes').css('z-index','0');
    };
    if(curloca <= adloca){
        $('#moving-boxes').css('position','static');
        $('#moving-boxes').css('top','!important');
        $('#moving-boxes').css('z-index','!important');
    };
    });
</script> 
{/literal}   
<div id="footer" class="">