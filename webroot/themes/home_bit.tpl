                    <li class=" gag-link" data-url="{$baseurl}{$postfolder}{$posts[i].PID}/{if SEO eq "1"}{$posts[i].story|makeseo}.html{/if}" data-text="{$posts[i].story|stripslashes|truncate:20:"...":true}" gagId="{$posts[i].PID}" itemType="list" id="entry-{$posts[i].PID}">
                        <div class="content">
                            <div class="img-wrap">
                                {if $posts[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}
                                    <a target="_blank" href="{$baseurl}{$postfolder}{$posts[i].PID}"><img src="{$baseurl}/images/nsfw.jpg" alt="{$posts[i].story|stripslashes}" /></a>
                                {else}
                                    {if $posts[i].pic ne ""}
                                        {if $posts[i].isgif eq "1"}
                                        <div class="thumb-wrapper" id="scriptolution_gif_static{$posts[i].PID}">
                                            <a target="_blank" href="{$baseurl}{$postfolder}{$posts[i].PID}">
                                                <img src="{$purl}/{$posts[i].path}/t/static-{$posts[i].pic}" alt="{$posts[i].story|stripslashes}" />
                                                <span>GIF</span>
                                            </a>
                                        </div>
                                        {else}
                                        <a target="_blank" href="{$baseurl}{$postfolder}{$posts[i].PID}"><img src="{$purl}/{$posts[i].path}/t/{$posts[i].pic}" alt="{$posts[i].story|stripslashes}" /></a>
                                        {/if}
                                    {else}
                                        {if $posts[i].youtube_key != ""}
                                        <a target="_blank" href="{$baseurl}{$postfolder}{$posts[i].PID}"> <center>
                                        {insert name=return_youtube2 value=a assign=youtube youtube=$posts[i].youtube_key}{$youtube}
                                          <img src="{$baseurl}/images/play_icon1.png" class="videoIndicator"></a>
  </center></a>
                                        {elseif $posts[i].fod_key != ""}
                                        <center>
                                        {insert name=return_fod2 value=a assign=fod fod=$posts[i].fod_key}{$fod}
                                        </center>
                                        {elseif $posts[i].vfy_key != ""}
                                        <center>{insert name=return_vfy2 value=a assign=vfy vfy=$posts[i].vfy_key}{$vfy}</center>
                                        {elseif $posts[i].vmo_key != ""}
                                        <center>{insert name=return_vmo2 value=a assign=vmo vmo=$posts[i].vmo_key}{$vmo}</center>
                                        {else}
                                        <center>{$lang264}</center>
                                        {/if}
                                    {/if}
                                {/if}
                            </div>
                            {if $displaywm eq "0" AND $posts[i].pic ne "" AND $posts[i].gif ne "1" AND $posts[i].nsfw eq "0"}
                            <div class="watermark-clear"></div>
                            {/if}                          
                        </div>
                        <div style="position:relative;width:220px;float:right">
                            <div class="info b9gcs-stop" id="action-{$posts[i].PID}">
                                <h1><a target="_blank" href="{$baseurl}{$postfolder}{$posts[i].PID}" class="jump_focus">{if $truncate eq "1"}{$posts[i].story|stripslashes|truncate:20:"...":true}{else}{$posts[i].story|stripslashes}{/if}</a></h1>
                                <!--  them vao info -->
                                <div class="userinfo">
                                    <!--a class="avatar" href="{$baseurl}/user/{$posts[i].USERID|stripslashes}"><img src="{$membersprofilepicurl}/thumbs/{$posts[i].USERID|stripslashes}.jpg?{$smarty.now}"></a-->
                                        <div class="uinfo"><a href="{$baseurl}/user/{$posts[i].USERID|stripslashes}">{$posts[i].username|stripslashes}</a>
                                            <div class="user-bar">
                                            {insert name=get_time_to_days_ago time=$posts[i].time_added}
                                            </div>
                                        </div>
                                    <div class="clear"></div>
                                </div>
                                
                                <!-- /ket thuc them vao info -->
                                                                                          
                                <p>
                                    <span class="comment">
                                        <fb:comments-count href="{$baseurl}{$postfolder}{$posts[i].PID}"></fb:comments-count>
                                    </span>
                                    {insert name=get_fav_count value=var assign=fcount PID=$posts[i].PID}
                                    <!-- <span id="love_count_{$posts[i].PID}" class="loved" votes="{$posts[i].favclicks}" score="0">{$posts[i].favclicks}</span> -->
                                    <span score="0" votes="{$posts[i].view}" class="view" id="view_count">{$posts[i].view}</span>
                                </p>
                             
                                <div class="sharing-box ">
                                    <hr class="arrow" />
                                      <ul class="sharing ">
                                        <li class="facebook" id="share1-{$posts[i].PID}">
                                            <span id="list-share-twitter-{$posts[i].PID}">
                                                {if $share1 eq 1}
                                                    <a href="https://twitter.com/share" class="twitter-share-button" data-text="{$posts[i].story|stripslashes|truncate:20:"...":true}" data-url="{$baseurl}{$postfolder}{$posts[i].PID}" data-count="horizontal" data-via="">&nbsp;</a>     
                                                {elseif $share1 eq 2}
                                                <div style="float:right" class="facebook-share-btn">
                                                    <fb:share-button href="{$baseurl}{$postfolder}{$posts[i].PID}" type="button_count"></fb:share-button>
                                                </div>
                                                {else}
                                                    <iframe src="//www.facebook.com/plugins/like.php?href={$baseurl}{$postfolder}{$posts[i].PID}&amp;width=80&amp;height=20&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false&amp;appId={$FACEBOOK_APP_ID}" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:20px;" allowTransparency="true"></iframe>
                                                {/if}
                                            </span>
                                                {if $share2 eq 1}
                                                    <a href="https://twitter.com/share" class="twitter-share-button" data-text="{$posts[i].story|stripslashes|truncate:20:"...":true}" data-url="{$baseurl}{$postfolder}{$posts[i].PID}" data-count="horizontal" data-via="">&nbsp;</a>     
                                                {elseif $share2 eq 2}
                                                <div style="float:right" class="facebook-share-btn">
                                                    <fb:share-button href="{$baseurl}{$postfolder}{$posts[i].PID}" type="button_count"></fb:share-button>
                                                </div>
                                                {else}
                                                    <iframe src="//www.facebook.com/plugins/like.php?href={$baseurl}{$postfolder}{$posts[i].PID}&amp;width=80&amp;height=20&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false&amp;appId={$FACEBOOK_APP_ID}" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:20px;" allowTransparency="true"></iframe>
                                                {/if}
                                        </li>
                                    </ul>
                                </div>
                                {if $fixenabled eq "1"}<a class="fix" href="{$baseurl}/fix/{$posts[i].PID}">{$lang142}</a>{/if}
                                <a class="report" entryId="{$posts[i].PID}" href="javascript:void(0);">{$lang146}</a>
                            </div>
                        </div>
                    </li>
 {if $smarty.section.i.first}
      <li style="padding: 0px;">
            <div style="background-color: #EEEEEE;margin: 10px 0px 10px 0px;padding: 5px;">
                                <span style="font-size: 18px;color:#880015"><b>Like <a style="display:inline;" href="http://www.facebook.com/{$FACEBOOK_PROFILE}" target="_blank">codehaivl2015.com trên Facebook</a> để được cười nhiều hơn;)</b></span>
                <br>    <div class="fb-like" data-href="http://www.facebook.com/{$FACEBOOK_PROFILE}" data-width="450" data-show-faces="false" data-send="false"></div>
            </div>
            </li>
                {insert name=get_advertisement AID=9}
        {/if}