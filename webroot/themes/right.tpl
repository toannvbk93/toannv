
	<div class="side-bar">
			<div style="margin-bottom:5px;">
            {insert name=get_advertisement AID=1}

            </div>
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

				<div id="signup-desc" class="description">
				<div class="spcl-button-wrap">

				{if $TC eq "1"}
				<a class="spcl-button facebook badge-facebook-connect" label="LoginFormFacebookButton" next="" href="https://www.facebook.com/dialog/permissions.request?app_id={$FACEBOOK_APP_ID}&display=page&next={$baseurl}/&response_type=code&fbconnect=1&perms=email,user_birthday,user_about_me">{$lang14}</a>

				{/if}
				</div>
				</div>
			</div>
		{/if}
   <div>
        <a class="share-btn" href="{$baseurl}/submit" class="buttons spaceBottom">{$lang368}</a>
        <div class="clear">
        </div>
    </div><br/>

	<div>

			<div class="clearfix"></div>
	</div>
	<div class="top-10">
	<h3>
				TOP Cuoihi
				<span style="float:right">
				<a href="{$baseurl}/top-users"><i>Xem thêm &raquo;</i></a>
				</span>
			</h3>
            <div class="widget-wrapper">
			{section name=i loop=$top}
			<ul class="widget-content">
			<li class="widget-content">
			<a target="_blank" href="{$baseurl}/user/{$top[i].USERID|stripslashes}">
			<img src="{$membersprofilepicurl}/{if $top[i].profilepicture eq ""}noprofilepicture.jpg{else}{$top[i].profilepicture}{/if}?{$smarty.now}" style="width:40px;height:40px;">
			</a>
				<ul>
				<li>
					<a target="_blank" href="{$baseurl}/user/{$top[i].USERID}">{$top[i].username}</a>
				</li>
				<!--li>
					Bài: <strong>{$top[i].posts}</strong>
				</li-->
				<li>
					Điểm: {$top[i].points}
				</li>
				</ul>
			</li>
			</ul>
			{/section}
                <div class="clearfix"></div>
            </div>
		</div>
    <div>
	<div class="fb-like-box" data-href="https://www.facebook.com/" data-width="300" data-height="400" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
	<div class="clearfix"></div>
		</div>

        <div>

			{if $r[0].PID ne "" AND $rhome eq "1"}
			{insert name=get_advertisement value=var AID="7"}
			<div id="post-gag-stay" class="_badge-sticky-elements box_info" data-y="60">
				<div class="popular-block">
				    <h3>{$lang251}</h3>
                    <div class="box-wrapper">
				        <ol>
				        {section name=i loop=$r}
				        <a class="wrap" href="{$baseurl}{$postfolder}{$r[i].PID}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
					        <li>
						        {if $r[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}
							        <img src="{$baseurl}/images/nsfw_thumb.jpg" alt="{$r[i].story|stripslashes}" />
						        {else}
						        	{if $r[i].isgif eq "1"}
									<img src="{$purl}/{$r[i].path}/t/static-{$r[i].pic}" alt="{$r[i].story|stripslashes}" />
									{else}
						        	<img src="{$purl}/{$r[i].path}/t/s-{$r[i].pic}" alt="{$r[i].story|stripslashes}" />
						        	{/if}
						        {/if}
						        <h4>{if $truncate eq "1"}{$r[i].story|stripslashes|truncate:20:"...":true}{else}{$r[i].story|stripslashes}{/if}</h4>
						        <h4><a href="{$baseurl}/user/{$r[i].USERID|stripslashes}">{$r[i].username|stripslashes|truncate:20:"...":true}</a></h4>
					        <p class="meta">	<!--<span class="comment"><fb:comments-count href="{$baseurl}{$postfolder}{$r[i].PID}"></fb:comments-count></span>-->
						        <span class="viewed">{$r[i].view}</span>
						        </p>
					        </li>
				        </a>
				        {/section}
				        </ol>
                    </div>
				</div>
			</div>
		{/if}
<div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
	<div class="vr-box">
	<h3>{$lang288}</h3>
        <div class="info-wrapper">
	        <ol>
	        {section name=i loop=$vr}

		        <li><a class="wrap" href="{$baseurl}{$postfolder}{$vr[i].PID}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                    {if $vr[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}
				        <img src="{$baseurl}/images/nsfw_thumb.jpg" alt="{$vr[i].story|stripslashes}" />
			        {else}
				        {if $vr[i].pic ne ""}
				        	{if $vr[i].isgif eq "1"}
							<img src="{$purl}/{$vr[i].path}/t/static-{$vr[i].pic}" alt="{$vr[i].story|stripslashes}" />
							{else}
					        <img src="{$purl}/{$vr[i].path}/t/s-{$vr[i].pic}" alt="{$vr[i].story|stripslashes}" />
					        {/if}
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
                    </a>
			        <h4>{if $truncate eq "1"}{$vr[i].story|stripslashes|truncate:20:"...":true}{else}{$vr[i].story|stripslashes}{/if}</h4>
			        <h4><a href="{$baseurl}/user/{$vr[i].USERID|stripslashes}">{$vr[i].username|stripslashes|truncate:20:"...":true}</a></h4>
			        <p class="meta">	<!--<span class="comment">
			        <fb:comments-count href="{$baseurl}{$postfolder}{$vr[i].PID}"></fb:comments-count></span><span class="loved">{$vr[i].favclicks}</span>-->
			        <span class="viewed">{$vr[i].view}</span>
			        </p>
		        </li>

	        {/section}
	        </ol>
        </div>
	</div>
</div>
			 <div class="s-300" id="bottom-s300">
            	{if $smarty.session.FILTER eq "0" AND $NSFWADS}
        	{insert name=get_advertisement AID=4}
            {else}
        	{insert name=get_advertisement AID=4}
		<br/>
		{insert name=get_advertisement AID=7}
			{/if}
            </div>

        </div>
    </div>
