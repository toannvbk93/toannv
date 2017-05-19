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

 <div style="margin-bottom:5px;" align="center">    {insert name=get_advertisement AID=8}</div>
    <div id="content-holder">
        <div class="main-filter ">
          <h1 style="margin-left:15px;margin-top: 10px;">{$lang355}</h1>
            {if $thumbs eq "1"}
            <a id="changeview" class="view_thumbs" href="{$baseurl}/vote?view=thumbs" title="Toggle Views">{$lang258}</a>
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
                    <span><b>Mẹo</b>: {$lang356}<a href="/webroot/submit?file=1">{$lang357}!</a></span>
                    <a class="keyboard_link" href="#keyboard">{$lang358}</a>
                </div>

                <center>

                    <div class="tips">
                        <b>{$lang359}</b> {$lang360}
                        <br/>
                        Hãy <b>click </b>{$lang361} <span class="iconVoteUp"></span>hoặc <span class="iconVoteDown">
                        </span>{$lang363}

                        <br/>
                        <b style="color:red">{$lang364}</b>
                    </div>
                </center>
            </div>


            <div id="entries-content" class="list">
                <ul id="entries-content-ul" class="col-1">
                    {section name=i loop=$posts}
                        {include file="votes_bit.tpl"}

                    {/section}
                </ul>
                 <div class="view-more" id="view_more_div">
                  <a class="next-page" id="next_page" href="#" style="display: inline;color:white;"> {$lang335}</a>
                </div>
            </div>
         <div class="plzVoteBottom"><br><span style="color:red">{$lang332}</span>  tanosine.com <a href="{$baseurl}/vote">{$lang333}</a> {$lang334}</div>
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
                        $.get("{/literal}{$baseurl}{literal}/votejson.php?page="+tpage, function(data){
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
                                $('#next_page').attr('href', "{/literal}{$baseurl}{literal}/vote?page="+tpage);
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
                <a href="{$baseurl}/vote?page={$tpp}" class="previous">&laquo; {$lang166}</a>
                {else}
                <a href="#" onclick="return false;" class="previous disabled">&laquo; {$lang166}</a>
                {/if}
                {if $tnp ne ""}
                <a href="{$baseurl}/vote?page={$tnp}" class="older">{$lang167} &raquo;</a>
                {else}
                <a href="#" onclick="return false;" class="older disabled">{$lang167} &raquo;</a>
                {/if}
            </div>
            {/if}
        </div>
        {literal}
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
</div>
{include file='right.tpl'}

<div id="footer" class="">
