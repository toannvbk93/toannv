{if $p.nsfw eq "1" AND $smarty.session.FILTER eq "1"}
    <div>
        <div class="post-next-prev">
            {if $prev != ""}
            <a id="prev_post" class="prev-post" href="{$baseurl}{$postfolder}{$prev}/" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);"></a>
            {else}
            <a id="prev_post" class="prev-post" href="{$baseurl}/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);"></a>
            {/if}
            {if $next ne ""}
            <a id="next_post" class="next-post" href="{$baseurl}{$postfolder}{$next}/" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);"></a>
            {else}
            <a id="next_post" class="next-post" href="{$baseurl}/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);"></a>
            {/if}
        </div>
    </div>
    <div id="main" class="middle">
        <div id="content-holder">
            <div id="content" class="nsfw">
                <div class="content">
                    <a href="{$baseurl}/safe?m={$eurl}"><img src="{$baseurl}/images/nsfw.jpg" alt="NSFW" /></a>
                </div>
                <div class="info">
                    <h1>{$lang154}</h1>
                    <p>{$lang155}</p>
                    <div class="message-box alt">
                        <div class="inline-message">
                            <p><a href="{$baseurl}/safe?m={$eurl}">{$lang156} &raquo;</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="middle">
{elseif $p.nsfw eq "1" AND $smarty.session.USERID eq ""}
    <div>
        <div class="post-next-prev">
            {if $prev != ""}
            <a id="prev_post" class="prev-post" href="{$baseurl}{$postfolder}{$prev}/" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);"></a>
            {else}
            <a id="prev_post" class="prev-post" href="{$baseurl}/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);"></a>
            {/if}
            {if $next ne ""}
            <a id="next_post" class="next-post" href="{$baseurl}{$postfolder}{$next}/" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);"></a>
            {else}
            <a id="next_post" class="next-post" href="{$baseurl}/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);"></a>
            {/if}
        </div>
    </div>
    <div id="main" class="middle">
        <div id="content-holder">
            <div id="content" class="nsfw">
                <div class="content">
                    <a href="{$baseurl}/safe?m={$eurl}"><img src="{$baseurl}/images/nsfw.jpg" alt="NSFW" /></a>
                </div>
                <div class="info">
                    <h1>{$lang154}</h1>
                    <p>{$lang155}</p>
                    <div class="message-box alt">
                        <div class="inline-message">
                            <p><a href="{$baseurl}/safe?m={$eurl}">{$lang156} &raquo;</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="middle">
{else}
    <div id="main">
        <div id="content-holder">
            <div class="post-info-pad">
                <div class="author">
                <p>Đăng {$p.time_added|date_format} {$p.time_added|date_format:"%I:%M %p"} bởi</p>
                <p><a href="{$baseurl}/user/{$p.USERID|stripslashes}"> {$p.username|stripslashes}</a></p>
                {if $cname ne "" AND $channels eq "1"}
                    <p>
                    {$lang269} : <a href="{$baseurl}/channels/{$cname|makeseo}/">{$cname}</a>
                    </p>
                    {/if}</div>
                <h1>{$p.story|stripslashes}</h1>


                <p class="stat">

                    <span class="comment">Lượt bình luận: <strong><fb:comments-count href="{$baseurl}{$postfolder}{$p.PID}"></fb:comments-count></strong></span>

                    <span score="0" votes="{$p.view}" class="view" id="view_count">{$lang285}: <strong>{$p.view}</strong></span>

                    {if $owner eq "1"}
                    <span class="seperator">|</span>
                    <a href="{$baseurl}/deletepost.php?pid={$p.PID}" class="delete" onclick="return confirm('{$lang147}');">{$lang145}</a>
                    {/if}
                </p>
            </div>

            <div id="post-control-bar" class="spread-bar-wrap">
                <div class="vote-bar">
                    <ul class="actions">
                    {if $phase eq "0"}
                        {if $smarty.session.USERID ne ""}
                            {insert name=get_fav_status value=var assign=isfav PID=$p.PID}
                            {if $isfav eq "1"}
                            <li class="bored-li">
                                <a id="vote-down-btn-{$p.PID}" class="unlove badge-vote-down "  entryId="{$p.PID}" href="javascript:void(0);"><span>{$lang365}</span></a>
                            </li>
                            <li class="love-li">
                                <a class="vote love loved" id="post_love_{$p.PID}" rel="{$p.PID}" href="javascript:void(0);"><span>{$lang366}</span></a>
                            </li>
                            {else}
                                {insert name=get_unfav_status value=var assign=isunfav PID=$p.PID}
                                {if $isunfav eq "1"}
                                <li class="bored-li">
                                    <a id="vote-down-btn-{$p.PID}" class="unlove badge-vote-down unloved "  entryId="{$p.PID}" href="javascript:void(0);"><span>{$lang365}</span></a>
                                </li>
                                <li class="love-li">
                                    <a class="vote love " id="post_love_{$p.PID}" rel="{$p.PID}" href="javascript:void(0);"><span>{$lang366}</span></a>
                                </li>
                                {else}
                                <li class="bored-li">
                                    <a id="vote-down-btn-{$p.PID}" class="unlove badge-vote-down "  entryId="{$p.PID}" href="javascript:void(0);"><span>{$lang365}</span></a>
                                </li>
                                <li class="love-li">
                                    <a class="vote love " id="post_love_{$p.PID}" rel="{$p.PID}" href="javascript:void(0);"><span>{$lang366}</span></a>
                                </li>
                                {/if}
                            {/if}
                        {else}
                        <li class="bored-li">
                            <a id="vote-down-btn-{$p.PID}" class="unlove badge-vote-down " entryId="{$p.PID}" href="{$baseurl}/login"><span>{$lang365}</span></a>
                        </li>
                        <li class="love-li">
                            <a class="vote love " id="post_love_{$p.PID}" rel="{$p.PID}" href="{$baseurl}/login"><span>{$lang366}</span></a>
                        </li>
                        {/if}
                    {/if}
                    </ul>
                </div>
                  <div class="spread-bar"><div class="text hidden">
                   Thích ảnh này?
                </div>
                   <div class="facebook-btn"><fb:like href="{$baseurl}{$postfolder}{$p.PID}" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like> </div>
                      <div class="facebook-btn"> <fb:share-button href="{$baseurl}{$postfolder}{$p.PID}" layout="button_count"></fb:share-button> </div>


                    {insert name=get_short_url value=a assign=tto PID=$p.PID short=$p.short}
                    {if $short_urls eq "1"}
                    <div class="google-btn"><g:plusone size="medium" href="{$tto}"></g:plusone> </div>
                    {else}
                    <div class="google-btn"><g:plusone size="medium" href="{$baseurl}{$postfolder}{$p.PID}"></g:plusone> </div>
                    {/if}


                </div>
                <div class="post-next-prev">
                    {if $prev != ""}
                    <a id="prev_post" class="prev-post" href="{$baseurl}{$postfolder}{$prev}/" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);"></a>
                    {else}
                    <a id="prev_post" class="prev-post" href="{$baseurl}/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);"></a>
                    {/if}
                    {if $next ne ""}
                    <a id="next_post" class="next-post" href="{$baseurl}{$postfolder}{$next}/" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);"></a>
                    {else}
                    <a id="next_post" class="next-post" href="{$baseurl}/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);"></a>
                    {/if}
                </div>
            </div>
            <div id="content">
                <div class="post-container">
                    <div class="img-wrap">
                        {if $p.pic ne ""}
                        <a href="{$baseurl}/random"><img src="{$purl}/{$p.path}/t/l-{$p.pic}" alt="{$p.story|stripslashes}"/></a>

                        {else}
                             <center>{if $p.youtube_key != ""}

                            {insert name=return_youtube value=a assign=youtube youtube=$p.youtube_key}{$youtube} </center>


                            {elseif $p.fod_key != ""}
                            <center>
                            {insert name=return_fod value=a assign=fod fod=$p.fod_key}{$fod}
                            </center>
                            {elseif $p.vfy_key != ""}
                            <center>
                            {insert name=return_vfy value=a assign=vfy vfy=$p.vfy_key}{$vfy}
                            </center>
                            {elseif $p.vmo_key != ""}
                            <center>
                            {insert name=return_vmo value=a assign=vmo vmo=$p.vmo_key}{$vmo}
                            </center>
                            {else}
                            <center>
                            {$lang143}
                            </center>
                            {/if}
                        {/if}
                    </div>
                </div>
                {if $displaywm eq "0" AND $p.pic ne "" AND $p.gif ne "1"}
                <div class="watermark-clear"></div>
                {/if}
                  <div style="padding:0 10px 0 10px;margin:5px">
                       {$p.blog|stripslashes}
                        </div>
                   <div style="margin-bottom:5px;" align="center">  {insert name=get_advertisement AID=6}</div>
                <div class="featuredFanPage">
                <span><a href="http://www.facebook.com/{$FACEBOOK_PROFILE}" style="font-size: 13px;padding-top:5px;padding-right:5px;float:left;color:#3B5998;">{$lang153}</a></span>

                <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffacebook.com%2F{$FACEBOOK_PROFILE}&amp;width=460&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:460px; height:30px;" allowTransparency="true"></iframe>
                <div class="clear"></div></div>
                <div class="comment-section" {if $displaywm eq "0" AND $p.pic ne "" AND $p.gif ne "1"}style=""{/if}>

           <h3 class="title" id="comments">{$lang143}</h3>
                    <span class="report-and-source">
                    <p>
                        {if $fixenabled eq "1"}<a class="fix" href="{$baseurl}/fix/{$p.PID}">{$lang142}</a>{/if}
                        {if $owner ne "1"}<span id="report-item-separator">|</span><a id="report-item-link" class="report report-item" entryId="{$p.PID}" href="javascript:void(0);">{$lang146}</a>{/if}
                        <span id="report-item-separator">|</span>{if $p.source eq ""}{$lang141}{else}{$p.source|stripslashes}{/if}
                    </p>
                    </span>
                <div>
                        <fb:comments href="{$baseurl}{$postfolder}{$p.PID}" num_posts="10" width="700"></fb:comments>
                    </div>
                    <div id="fb-root"></div>
                </div>
                <br/>
            {if $recommended eq "1"}
                <div class="post-may-like">
                    <div id="entries-content" class="grid">
                        {section name=i loop=$r}
                        <ul id="grid-col-{if $smarty.section.i.iteration GT 3}2{else}1{/if}" class="col-{if $smarty.section.i.iteration GT 3}{math equation="x - 3" x=$smarty.section.i.iteration}{else}{$smarty.section.i.iteration}{/if}">
                            <li class=" ">
                                <a href="{$baseurl}{$postfolder}{$r[i].PID}" class="jump_stop">
                                    <div style="" class="thimage">
                                        {if $r[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}<img src="{$baseurl}/images/nsfw_thumb.jpg" alt="{$r[i].story|stripslashes}" />{else}<img src="{$purl}/{$r[i].path}/t/s-{$r[i].pic}" alt="{$r[i].story|stripslashes}" />{/if}
                                    </div>
                                </a>
                                <h1>{if $truncate eq "1"}{$r[i].story|stripslashes|truncate:20:"...":true}{else}{$r[i].story|stripslashes}{/if}</h1>
                                <h4><a href="{$baseurl}/user/{$r[i].USERID|stripslashes}">{$r[i].username|stripslashes|truncate:20:"...":true}</a></h4>
                            </li>
                        </ul>
                        {/section}
                    </div>
                </div>
            {/if}
            </div>
        </div>
    </div>


<div class="side-bar">
    {include file='right2.tpl'}
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
    <h3>{$lang288}</h3>
        <div class="info-wrapper">
            <ol>
            {section name=i loop=$vr}
            <a class="wrap" href="{$baseurl}{$postfolder}{$vr[i].PID}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                <li>
                    {if $vr[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}
                        <img src="{$baseurl}/images/nsfw_thumb.jpg" alt="{$vr[i].story|stripslashes}" />
                    {else}
                        {if $vr[i].pic ne ""}
                            <img src="{$purl}/{$vr[i].path}/t/s-{$vr[i].pic}" alt="{$vr[i].story|stripslashes}" />
                        {else}
                            {if $vr[i].youtube_key != ""}
                                <img src="http://img.youtube.com/vi/{$vr[i].youtube_key}/0.jpg" alt="{$vr[i].story|stripslashes}" />
                            {elseif $vr[i].contents != ""}
                                <img src="{$imageurl}/s-text.png" alt="{$vr[i].story|stripslashes}" />
                            {else}
                                <img src="{$imageurl}/s-error.jpg" alt="Không tìm thấy dữ liệu" />
                            {/if}
                        {/if}
                    {/if}
                    <h4>{if $truncate eq "1"}{$vr[i].story|stripslashes|truncate:20:"...":true}{else}{$vr[i].story|stripslashes}{/if}</h4>
                    <h4><a href="{$baseurl}/user/{$vr[i].USERID|stripslashes}">{$vr[i].username|stripslashes|truncate:20:"...":true}</a></h4>
                    <p class="meta"><span class="comment"><fb:comments-count href="{$baseurl}{$postfolder}{$vr[i].PID}"></fb:comments-count></span><span class="viewed">{$vr[i].view}</span>
                    </p>
                </li>
            </a>
            {/section}
            </ol>
        </div>
    </div>
</div>
<!--div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
    <div class="popular-block">
    <h3>Bài HOT</h3>
    <ol>
    {section name=i loop=$lq}
    <a class="wrap" href="{$baseurl}{$postfolder}{$lq[i].PID}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
        <li>
            {if $lq[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}<img src="{$baseurl}/images/nsfw_thumb.jpg" alt="{$lq[i].story|stripslashes}" />{else}<img src="{$purl}/{$lq[i].path}/t/s-{$lq[i].pic}" alt="{$lq[i].story|stripslashes}" />{/if}
            <h4>{if $truncate eq "1"}{$lq[i].story|stripslashes|truncate:20:"...":true}{else}{$lq[i].story|stripslashes}{/if}</h4>
            <h4><a href="{$baseurl}/user/{$lq[i].USERID|stripslashes}">{$lq[i].username|stripslashes|truncate:20:"...":true}</a></h4>
            <p class="meta"><span class="comment"><fb:comments-count href="{$baseurl}{$postfolder}{$lq[i].PID}"></fb:comments-count></span><span class="loved">{$lq[i].favclicks}</span>
            </p>
        </li>
    </a>
    {/section}
    </ol>
    </div>
</div-->

<!--div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
    <div class="popular-block">
    <h3>Bài mới</h3>
    <ol>
    {section name=i loop=$vnew}
    <a class="wrap" href="{$baseurl}{$postfolder}{$vnew[i].PID}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
        <li>
            {if $vnew[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}<img src="{$baseurl}/images/nsfw_thumb.jpg" alt="{$vnew[i].story|stripslashes}" />{else}<img src="{$purl}/{$vnew[i].path}/t/s-{$vnew[i].pic}" alt="{$vnew[i].story|stripslashes}" />{/if}
            <h4>{if $truncate eq "1"}{$vnew[i].story|stripslashes|truncate:20:"...":true}{else}{$vnew[i].story|stripslashes}{/if}</h4>
            <h4><a href="{$baseurl}/user/{$vnew[i].USERID|stripslashes}">{$vnew[i].username|stripslashes|truncate:20:"...":true}</a></h4>
            <p class="meta"><span class="comment"><fb:comments-count href="{$baseurl}{$postfolder}{$vnew[i].PID}"></fb:comments-count></span><span class="loved">{$vnew[i].favclicks}</span>
            </p>
        </li>
    </a>
    {/section}
    </ol>
    </div>
</div-->
<div id="moving-boxes">
{insert name=get_advertisement AID=4}
            </div>
<div>
    <div class="fb-like-box" data-href="http://www.facebook.com/{$FACEBOOK_PROFILE}" data-width="300" data-height="400" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
    <div class="clearfix"></div>
        </div>

<div>




</div>

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
    <script type="text/javascript">
    var adloca2=$('#post-control-bar').offset().top;
     $(window).scroll(function () {
        var curloca2=$(window).scrollTop()+41;
        if(curloca2>adloca2){
            $('#post-control-bar').css('position','fixed');
            $('#post-control-bar').css('top','41px');
            $('#post-control-bar').css('z-index','10');
        };
        if(curloca2 <= adloca2){
            $('#post-control-bar').css('position','absolute');
            $('#post-control-bar').css('top','auto');
            $('#post-control-bar').css('z-index','!important');
        };
        });
    </script>
    <script type="text/javascript">
    $('#post_view_love').click(function(){
        if( $('#post_view_love').hasClass('current')){
            $('#post_view_love').removeClass('current');
        likedeg({/literal}{$p.PID}{literal},-1,0);
        }else{
            likedeg({/literal}{$p.PID}{literal},1,0);
        $('#post_view_love').addClass('current');
        }
        });
    function likedeg(p,l,u){
        jQuery.ajax({
            type:'POST',
            url:'{/literal}{$baseurl}{literal}'+ '/likedeg.php',
            data:'l='+l+'&pid={/literal}{$p.PID}{literal}&u='+u,
            success:function(e){
                $('#love_count').html(e);}
            });
        }
    </script>
    <script type="text/javascript">
         var barloc=$('#post-control-bar').offset().top;
         $(window).scroll(function () {
              var curloc=$(window).scrollTop();
              if(curloc>barloc){
        $('#post-control-bar').addClass('topbarfixed');
              }else{
                $('#post-control-bar').removeClass('topbarfixed');
                 }
         });
    </script>
    <script type="text/javascript">
        $('.unlove').click(function(){
        var id=$(this).attr('entryId');
        if( $(this).hasClass('unloved')){
        $(this).removeClass('unloved');
        ulikedeg($(this).attr('entryId'),0,-1);
        }else{
        $(this).addClass('unloved');
        if($('#post_love_'+id).hasClass('loved')){
        ulikedeg($(this).attr('entryId'),-1,1);
        $('#post_love_'+id).removeClass('loved');
        }else{
        ulikedeg($(this).attr('entryId'),0,1);
        }
        }
        });
        $('.vote').click(function(){
        var id=$(this).attr('rel');
        if( $(this).hasClass('loved')){
        $(this).removeClass('loved');
        ulikedeg($(this).attr('rel'),-1,0);
        }else{
        $(this).addClass('loved');
        if($('#vote-down-btn-'+id).hasClass('unloved')){
        $('#vote-down-btn-'+id).removeClass('unloved');
        ulikedeg($(this).attr('rel'),1,-1);
        }else{
        ulikedeg($(this).attr('rel'),1,0);
        }
        }
        });
        function ulikedeg(p,l,u){
        jQuery.ajax({
        type:'POST',
        url:'{/literal}{$baseurl}{literal}'+ '/votegag.php',
        data:'l='+l+'&pid=' + p +'&u='+u,
        success:function(e){
        $('#love_count_'+p).html(e);
        }
        });
        }
        </script>
    {/literal}
</div>
<div id="footer" class="">

{/if}
