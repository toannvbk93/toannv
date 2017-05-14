	<div class="side-bar">
		{if $smarty.session.USERID ne ""}
			<div class="user-block">
				<h3>{$lang257} <a href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}">{$smarty.session.USERNAME|stripslashes}</a></h3>
				{insert name=get_member_profilepicture assign=profilepicture value=var USERID=$smarty.session.USERID}
				<img id="uploaded_img" src="{$membersprofilepicurl}/thumbs/{$profilepicture}?{$smarty.now}" alt="avatar" style="border: 2px solid rgb(187, 187, 187); float: left; margin-right: 10px;width:80px;height:80px" />
				<div class="userinfoblock"> 
					<a href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}">{$lang192}</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}/likes">{$lang193}</a><br>
					<a href="{$baseurl}/settings">{$lang45}</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}/messages">{$lang194}</a><br>
				</div>
			<div style="clear: both;"></div>
				{literal}
                <script type="text/javascript">
                function loadContent(elementSelector, sourceURL) {
                $(""+elementSelector+"").load(""+sourceURL+"");
                }
                </script>
                {/literal}
                <div id="loadme"></div>
			<div style="margin-top: 15px; padding-top: 10px; border-top: 1px solid rgb(187, 187, 187);">
				<a href="javascript:loadContent('#loadme', '{$baseurl}/log_out');">{$lang198}</a>
				<div style="clear: both;"></div>
			</div>
			</div>	
		{else}  
			<div class="social-block">
				<h3>{$lang9}</h3>
				<div id="signup-desc" class="description">
				<div class="spcl-button-wrap">
			
				{if $TC eq "1"}
				<a class="spcl-button facebook badge-facebook-connect" label="LoginFormFacebookButton" next="" href="https://www.facebook.com/dialog/permissions.request?app_id={$FACEBOOK_APP_ID}&display=page&next={$baseurl}/&response_type=code&fbconnect=1&perms=email,user_birthday,user_about_me">{$lang14}</a>
			
				{/if}
				</div>
				</div>
			</div>
		{/if}
     <div class="s-300" id="top-s300">
        	{if $smarty.session.FILTER eq "0" AND $NSFWADS}
        	{insert name=get_advertisement AID=5}
            {else}
        	{insert name=get_advertisement AID=11}
			{/if}
        </div>
		<div>
	<div class="fb-like-box" data-href="https://www.facebook.com/codehaivl2015.como" data-width="300" data-height="400" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
	<div class="clearfix"></div>
		</div>

        <div class="social-block">            
            <div class="google-plus">
            	<p>{$lang150}</p>
            	<g:plusone size="medium" href="{$baseurl}"></g:plusone>
            </div>
        </div>
 
        <div id="moving-boxes">
          <div class="s-300" id="bottom-s300">            
            {if $smarty.session.FILTER eq "0" AND $NSFWADS}
        	{insert name=get_advertisement AID=4}
            {else}
        	{insert name=get_advertisement AID=11}
			{/if}
            </div>

{if $r[0].PID ne "" AND $rhome eq "1"}
<div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
	<div class="popular-block">
	<h3>{$lang251}</h3>
	<ol>
	{section name=i loop=$r}                  
	<a class="wrap" href="{$baseurl}{$postfolder}{$r[i].PID}/{if $SEO eq "1"}{$r[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
		<li>
            {if $r[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}<img src="{$baseurl}/images/nsfw_thumb.jpg" alt="{$r[i].story|stripslashes}" />{else}{if $vr[i].isgif eq "1"}<img src="{$purl}/{$r[i].path}/t/static-{$r[i].pic}" alt="{$r[i].story|stripslashes}" />{else}<img src="{$purl}/{$r[i].path}/t/s-{$r[i].pic}" alt="{$r[i].story|stripslashes}" />{/if}{/if}<h4>{if $truncate eq "1"}{$r[i].story|stripslashes|truncate:20:"...":true}{else}{$r[i].story|stripslashes}{/if}</h4>
			<h4><a href="{$baseurl}/user/{$r[i].USERID|stripslashes}">{$r[i].username|stripslashes|truncate:20:"...":true}</a></h4>
			<p class="meta"><span class="comment"><fb:comments-count href="{$baseurl}{$postfolder}{$r[i].PID}/{if $SEO eq "1"}{$r[i].story|makeseo}.html{/if}"></fb:comments-count></span><span class="loved">{$r[i].favclicks}</span>
			</p>
		</li>
	</a>
	{/section}
	</ol>
	</div>
</div>
{/if} 

			
			<div class="section-2" style="display:none;">
				<div class="wrap" style="width:300px">
				<ul class="sideinfo side-items-left" style="font-weight: bold; font-size: 11px; margin-bottom: 10px; padding-left: 0px;">
					<li><a href="http://codehaivl2015.com" target="_blank"><b>Powered by codehaivl2015.com</b></a>. {$site_name|stripslashes} &copy; 2014</li>
				
				</ul>
				</div>
			</div>
        </div>
    </div>